<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepala extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_laporan');
		//load libary pagination
        $this->load->library('pagination');
                $this->load->helper(array('url','form','download'));
	}
	public function index(){
		$data['title'] = 'Halaman Kepala';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		 $data['data_anggota']=$this->db->get('data_anggota')->num_rows();
		 $data['data_buku']=$this->db->get('data_buku')->num_rows();
		 $data['peminjaman']=$this->db->get('peminjaman')->num_rows();
		   $data['data']=$this->m_laporan->get_data_anggota();
		    $data['data1']=$this->m_laporan->get_data_buku();
		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar2', $data);
		$this->load->view('kepala/index', $data);
		$this->load->view('templates/footer_kepala');
	}

	public function laporan(){
		  $config['base_url'] = site_url('Kepala/laporan'); //site url
        $config['total_rows'] = $this->db->count_all('laporan'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
	  $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_laporan->getdata($config["per_page"], $data['page'])->result();          

        $data['pagination'] = $this->pagination->create_links();

		$data['title'] = 'Data Laporan';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		//$data['laporan'] = $this->m_laporan->tampil_data()->result();
		 //$data['laporan'] = $this->m_laporan->getAllFiles();
      //$this->load->view('laporan', $data);
		//$data['kodeunik'] = $this->m_data->buat_kode();		

		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar2', $data);
		$this->load->view('kepala/laporan', $data);
		//$this->load->view('templates/footer_kepala');
}

	public function laporan2(){
		  $config['base_url'] = site_url('Kepala/laporan2'); //site url
        $config['total_rows'] = $this->db->count_all('laporan_pengunjung'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
	  $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_laporan->getdata2($config["per_page"], $data['page'])->result();          

        $data['pagination'] = $this->pagination->create_links();

		$data['title'] = 'Data Laporan';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		//$data['laporan_pengunjung'] = $this->m_laporan->tampil_data2()->result();
		 //$data['laporan_pengunjung'] = $this->m_laporan->getAllFiles2();
      //$this->load->view('laporan', $data);
		//$data['kodeunik'] = $this->m_data->buat_kode();		

		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar2', $data);
		$this->load->view('kepala/laporan2', $data);
		//$this->load->view('templates/footer_kepala');
}

	public function laporan3(){
		$config['base_url'] = site_url('Kepala/laporan3'); //site url
        $config['total_rows'] = $this->db->count_all('laporan_peminjaman'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
	  $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_laporan->getdata3($config["per_page"], $data['page'])->result();          

        $data['pagination'] = $this->pagination->create_links();

		$data['title'] = 'Data Laporan';
		//mengambil data dr user berdasar email yg ada di session
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		//$data['laporan_peminjaman'] = $this->m_laporan->tampil_data3()->result();
		 //$data['laporan_peminjaman'] = $this->m_laporan->getAllFiles3();
      //$this->load->view('laporan', $data);
		//$data['kodeunik'] = $this->m_data->buat_kode();		

		//me load templates tampilan admin
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar2', $data);
		$this->load->view('kepala/laporan3', $data);
		//$this->load->view('templates/footer_kepala');
}

		public function download($id_laporan){
    		$this->load->helper('download');
    		$fileinfo = $this->m_laporan->download($id_laporan);
    		$i = 'uploads/'.$fileinfo['nama_laporan'];
    		force_download($i, NULL);
	}

		public function download2($id_laporan_pengunjung){
    $this->load->helper('download');
    $fileinfo = $this->m_laporan->download2($id_laporan_pengunjung);
    $i = 'uploads/'.$fileinfo['nama_laporan_pengunjung'];
    force_download($i, NULL);
	}

	public function download3($id_laporan_peminjaman){
    $this->load->helper('download');
    $fileinfo = $this->m_laporan->download3($id_laporan_peminjaman);
    $i = 'uploads/'.$fileinfo['nama_laporan_peminjaman'];
    force_download($i, NULL);
	}
}