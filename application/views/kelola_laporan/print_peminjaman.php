<html>
<head>
	<title>Cetak PDF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: -1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}
	</style>
</head>
<body>
    <b><?php echo $ket; ?></b><br /><br />

    <table class="table table-sm" border="1" width="100%">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">ID Peminjaman</th>
     
      <th scope="col">Nama Anggota</th>
      <!-- <th></th> -->
       <th scope="col">Judul Buku</th>
       <th scope="col">Tanggal Peminjaman</th>
      <th scope="col">Tanggal Pengembalian</th>
     
    
    </tr>
  </thead>
  <tbody>

  <!--  <?php
    if( ! empty($peminjaman)){
        $no = 1;
        foreach($peminjaman as $i){
            $tgl = date('d-m-Y', strtotime($i->tanggal_pengembalian));

            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$id_peminjaman."</td>";
            echo "<td>".$i->tanggal_pinjam."</td>";
            echo "<td>".$i->nama."</td>";
            echo "<td>".$i->judul."</td>";
            echo "<td>".$i->tanggal_pengembalian."</td>";
            
            echo "</tr>";
            $no++;
      }
    }
    ?>-->

  <?php $no = 1; foreach ($peminjaman as $i):?>
   <!--  <?php $s=implode(",",(array($i->judul)));
    // var_dump($s);die;
    // echo $s;die;
    ?>-->
      <tr>
        
    <td><?= $no++ ?></td>
    <td><?= $i->id_peminjaman?></td>
  
    <td><?= $i->nama?></td>
    <!-- <td><?= $i->nopinjam?></td> -->
    <td><?= $i->judul ?></td>
    <td><?= $i->tanggal_pinjam ?></td>
      <td><?= $i->tgl_pengembalian?></td>
      
    </tr>

    <?php endforeach;?>
  </tbody>
  
</table>