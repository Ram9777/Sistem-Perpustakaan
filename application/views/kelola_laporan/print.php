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
    <b style="margin-left: 175px;margin-top: 45px;"><?php echo $ket; ?></b><br /><br />
    
	<table class="table table-sm" border="1" width="100%" style="margin-left: 175px;">
    <tr>
       <th scope="col"><b>No</b></th>
       <th scope="col"><b>Tanggal dibuat</b></th>
      <th scope="col"><b>ID Anggota</b></th>
      <th scope="col"><b>Nama</b></th>
      <th scope="col"><b>Alamat</b></th>
      <th scope="col"><b>No HP</b></th>
      <th scope="col"><b>Jenis Kelamin</b></th>
      <th scope="col"><b>Tingkat Pendidikan</b></th>
      <th scope="col"><b>Kategori</b></th>
    </tr>
    <?php
    if( ! empty($data_anggota)){
        $no = 1;
        foreach($data_anggota as $dta){
            $tgl = date('d-m-Y', strtotime($dta->data_created));

            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$tgl."</td>";
            echo "<td>".$dta->id_anggota."</td>";
            echo "<td>".$dta->nama."</td>";
            echo "<td>".$dta->alamat."</td>";
            echo "<td>".$dta->no_hp."</td>";
            echo "<td>".$dta->Jenis_kelamin."</td>";
            echo "<td>".$dta->tingkat_pendidikan."</td>";
            echo "<td>".$dta->kategori."</td>";
            echo "</tr>";
            $no++;
    	}
    }
    ?>
	</table>
</body>
</html>
