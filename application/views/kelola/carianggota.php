

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" style="margin-left: 230px;">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <?= form_open('Kelola/cari') ?>
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
          <?= form_close() ?>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
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

           

            <div class="topbar-divider d-none d-sm-block"></div>

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
        <!-- End of Topbar -->

    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahAnggotaModal"><i class="fa fa-plus"></i> Tambah Anggota</a>
           
            <hr>
         <div class="">
          <div class="">

 
           <table class="table table-sm" border="2" width="100%">
  <thead>
    <tr class="bg-success">
      <th scope="col">No</th>
      <th scope="col">ID Anggota</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No HP</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tingkat Pendidikan</th>
      <th scope="col">Kategori</th>
      <th scope="col">Dibuat Pada</th>
      <th scope="col" colspan="3"><center>Aksi</center></th>
    </tr>
  </thead>
  <tbody>
  
    <?php $no = 1;
    foreach($data_anggota as $dta){
     ?>
   
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $dta->id_anggota ?></td>
      <td><?= $dta->nama ?></td>
      <td><?= $dta->alamat ?></td>
      <td><?= $dta->no_hp ?></td>
      <td><?= $dta->Jenis_kelamin ?></td>
      <td><?= $dta->tingkat_pendidikan ?></td>
      <td><?= $dta->kategori ?></td>
      <td><?=date('d-m-Y',strtotime($dta->data_created))?></td>
      <td>
        <?= anchor('Kelola/detailang/'.$dta->id_anggota, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>' ) ?>
      </td>
      <td>
        <a href="" class="btn-primary btn btn-sm" data-toggle="modal" data-target="#EditModal<?=$dta->id_anggota;?>">Edit</a></td>
       <td onclick="javascript: return confirm('Apakah anda yakin?')"> <a href="<?php echo site_url('Kelola/hapus_anggota/'.$dta->id_anggota); ?>"  class="btn btn-danger btn-sm" title="Hapus Data">Hapus</a>
      </td>
    </tr>
   <?php } ?>
  </tbody>
  
</table>
          </div>
        </div>

        </div>
        <!-- /.container-fluid -->
</div>
<!-- trs ini file coba teh tampilan stlh data dicari dibagian class container fluid tadi ditambahin tag div -->
      </div>
      <!-- End of Main Content -->

    
<!-- Modal -->

<!-- Modal tambah-->
<div class="modal fade" id="tambahAnggotaModal" tabindex="-1" role="dialog" aria-labelledby="tambahAnggotaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahAnggotaModalLabel">Tambah Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('kelola/tambah_aksi_anggota'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="id_anggota" name="id_anggota" placeholder="ID Anggota" value="<?= $kodeunik;?>" readonly>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anggota">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anggota">
          <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No HP Anggota">
          <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin">
          <input type="text" class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan" placeholder="Tingkat Pendidikan">
          <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
          <input type="text" name="data_created" id="data_created" readonly value="<?= date('d-m-Y') ?>" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal edit-->
<?php foreach($data_anggota as $dta): ?>
<div id="EditModal<?=$dta->id_anggota;?>" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('kelola/update'); ?>" method="post">
      <div class="modal-body">
        <input type="hidden" readonly value="<?=$dta->id_anggota;?>" name="id_anggota" class="form-control">
        <div class="form-group">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anggota" value="<?= $dta->nama; ?>">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anggota" value="<?= $dta->alamat; ?>">
          <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No HP Anggota" value="<?= $dta->no_hp; ?>">
          <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= $dta->Jenis_kelamin; ?>">
          <input type="text" class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan" placeholder="Tingkat Pendidikan" value="<?= $dta->tingkat_pendidikan; ?>">
          <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="<?= $dta->kategori; ?>">
          <input type="text" name="data_created" id="data_created" disabled value="<?=date('d-m-Y',strtotime($dta->data_created))?>"/>


        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>
 <?php endforeach; ?>