 <table class="table table-sm" border="2" width="100%">
 <thead>
    <tr class="bg-success" style="text-decoration-style: bold">
      <th scope="col"><center><b>No</b></center></th>
      <th scope="col"><center>Kode Laporan</center></th>
      <th scope="col"><center>Nama Laporan</center></th>
      <th scope="col"><center>Tanggal Dikirim</center></th>
      <th scope="col"><center>Aksi</center></th>

    </tr>
  </thead>
  <tbody>
  
    <?php $no = 1;
    foreach($data as $l){
     ?>
   
    <tr>
      <th scope="row"><center><?= $no++ ?></center></th>
      <td><center><?= $l->id_laporan_peminjaman ?></center></td>
      <td><center><?= $l->nama_laporan_peminjaman ?></center></td>
      <td><center><?=date('d-m-Y',strtotime($l->tgl_dibuat_peminjaman))?></center></td>
      <td><center><a href="<?php echo base_url().'kepala/download3/'.$l->id_laporan_peminjaman; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt">Download</a></center></td>
        <?php
              }
              ?>
    </tr>
   
  </tbody>
  
</table>
<div class="row">
      <div class="col">
        <!--Tampilkan pagination-->
        <?php echo $pagination; ?>
      </div>
    </div>

 <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KP UNJANI</span>
          </div>
        </div>
      </footer>