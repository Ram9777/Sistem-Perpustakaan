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

  <div class="container-fluid">
<html>
<head>
	
    
    
   
</head>
<body>
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="get" action="">

             
        </div>

        <label>Filter Berdasarkan</label><br>
        <select name="filter" id="filter">
            <option value="">Pilih</option>
            
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br /><br />

      

        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br /><br />
        </div>

        <div id="form-tahun">
            <label>Tahun</label><br>
            <select name="tahun">
                <option value="">Pilih</option>
                <?php
                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                    echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>

        <button type="submit">Tampilkan</button>
   
    </form>
    <hr />
    
    <b><?php echo $ket; ?></b><br /><br />
    <a href="<?php echo $url_cetak; ?>" class="btn btn-warning"><i class="fa fa-file"></i> CETAK PDF</a><br /><br />

    <table class="table table-sm" cellpadding="8" border="2" id="table" width="100%">
    <tr class="bg-success" style="text-decoration-style: bold">
       <th scope="col"><center><b>No</b></center></th>
       <th scope="col"><center><b>Tanggal dibuat</b></center></th>
      <th scope="col"><center><b>ID Anggota</b></center></th>
      <th scope="col"><center><b>Nama</b></center></th>
      <th scope="col"><center><b>Alamat</b></center></th>
      <th scope="col"><center><b>No HP</b></center></th>
      <th scope="col"><center><b>Jenis Kelamin</b></center></th>
      <th scope="col"><center><b>Tingkat Pendidikan</b></center></th>
      <th scope="col"><center><b>Kategori</b></center></th>
    </tr>
    <?php
    if( ! empty($data_anggota)){
        $no = 1;
        foreach($data_anggota as $dta){
            $tgl = date('d-m-Y', strtotime($dta->data_created));

            echo "<tr>";
            echo "<td><center>".$no."</center></td>";
            echo "<td><center>".$tgl."</center></td>";
            echo "<td><center>".$dta->id_anggota."</center></td>";
            echo "<td><center>".$dta->nama."</center></td>";
            echo "<td><center>".$dta->alamat."</center></td>";
            echo "<td><center>".$dta->no_hp."</center></td>";
            echo "<td><center>".$dta->Jenis_kelamin."</center></td>";
            echo "<td><center>".$dta->tingkat_pendidikan."</center></td>";
            echo "<td><center>".$dta->kategori."</center></td>";
            echo "</tr>";
            $no++;
    	}
    }
    ?>
    
   
    
</table>
<!--<div class="row">
      <div class="col">
        <!--Tampilkan pagination
        <?php echo $pagination; ?>
      </div>
    </div>-->
</body>
</html>