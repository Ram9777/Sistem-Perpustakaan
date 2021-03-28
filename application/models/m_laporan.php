<?php 
 
class m_laporan extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function tampil_data(){
		return $this->db->get('laporan');
	}

	public function getAllFiles(){
		$query = $this->db->get('laporan');
		return $query->result(); 
	}

	function getdata($limit, $start)	{
		$this->db->order_by('id_laporan', 'DESC');
		$query = $this->db->get('laporan', $limit, $start);
        return $query;
	}

	function getdata2($limit, $start)	{
		$this->db->order_by('id_laporan_pengunjung', 'DESC');
		$query = $this->db->get('laporan_pengunjung', $limit, $start);
        return $query;
	}

	function getdata3($limit, $start)	{
		$this->db->order_by('id_laporan_peminjaman', 'DESC');
		$query = $this->db->get('laporan_peminjaman', $limit, $start);
        return $query;
	}

	function tampil_data2(){
		return $this->db->get('laporan_pengunjung');
	}

	public function getAllFiles2(){
		$query = $this->db->get('laporan_pengunjung');
		return $query->result(); 
	}

	function tampil_data3(){
		return $this->db->get('laporan_peminjaman');
	}

	public function getAllFiles3(){
		$query = $this->db->get('laporan_peminjaman');
		return $query->result(); 
	}

	public function download($id_laporan){
		$query = $this->db->get_where('laporan',array('id_laporan'=>$id_laporan));
		return $query->row_array();
	}

	public function download2($id_laporan_pengunjung){
		$query = $this->db->get_where('laporan_pengunjung',array('id_laporan_pengunjung'=>$id_laporan_pengunjung));
		return $query->row_array();
	}

	public function download3($id_laporan_peminjaman){
		$query = $this->db->get_where('laporan_peminjaman',array('id_laporan_peminjaman'=>$id_laporan_peminjaman));
		return $query->row_array();
	}

	 function get_data_anggota(){
        $query = $this->db->query("SELECT tanggal_dtg, COUNT(id_anggota) AS total FROM buku_tamu GROUP BY year(tanggal_dtg)");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

        function get_data_buku(){
        $query = $this->db->query("SELECT b.judul, COUNT(o.id) AS total FROM peminjaman o INNER JOIN data_buku b ON o.id=b.id GROUP BY b.id");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

	}