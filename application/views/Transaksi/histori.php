 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content" style="margin-left: 225px;">

  <!-- Topbar -->
  <nav  class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" >

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" >
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search
    <?= form_open('Administrator/cari') ?>
    <form method="post" >
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari" name="katakunci" id="katakunci">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit" id="tombolcari">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>
    <?= form_close() ?> -->

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto" >

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none" >
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown" >
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     

      <div class="topbar-divider d-none d-sm-block" ></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?= $user['name']; ?> </span>
          <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->   <!-- Begin Page Content -->

   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <hr>

<table class="table table-sm" border="2" width="100%">
  <thead>
    <tr class="bg-success">
    <th scope="col"><center><b>No</b></center></th>
      <th scope="col"><center><b>ID Peminjaman</b></center></th>
      <th scope="col"><center><b>Tanggal Pinjam</b></center></th>
      <th scope="col"><center><b>Nama Anggota</b></center></th>
      <!-- <th></th> -->
       <th scope="col"><center><b>Judul Buku</b></center></th>
      <th scope="col"><center><b>Tanggal Pengembalian</b></center></th>
      <th scope="col"><center><b>Status</b></center></th>
           <th scope="col"><center><b>Aksi</b></center></th>
    
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach ($data as $i):?>
   <!--  <?php $s=implode(",",(array($i->judul)));
    // var_dump($s);die;
    // echo $s;die;
    ?> -->
      <tr>
        
    <td><?= $no++ ?></td>
    <td><?= $i->id_peminjaman?></td>
  <td><?=date('d-m-Y',strtotime($i->tanggal_pinjam))?></td>
    <td><?= $i->nama?></td>
    <!-- <td><?= $i->nopinjam?></td> -->
    <td><?= $i->judul ?></td>
      <td><?=date('d-m-Y',strtotime($i->tgl_pengembalian))?></td>
      <td><button class="btn btn-success" readonly >Buku dikembalikan</button></td>
      <td><button type="button" class="btn btn-warning histori" id_peminjaman="<?= $i->id_peminjaman ?>"><i class="fa fa-info fa-fw"></i> Detail</button></td>
    </tr>

    <?php endforeach;?>
  </tbody>
  
</table>
 <br>
  <div class="row">
      <div class="col">
        <!--Tampilkan pagination-->
        <?php echo $pagination; ?>
      </div>
    </div>
<!-- Modal -->
 <div class="modal fade" id="detail" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   
                    <h4 class="modal-title">Detail Peminjaman</h4>
                </div>
                <div class="modal-body">
                <form>
                    <div class="form-group">
                      
                        <span id="pinjam"></span>

                      
                     </div>
                 </form>

                </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                </div>
            </div>
    
        </div>
    </div>

    <!-- akhir kode modal dialog -->

