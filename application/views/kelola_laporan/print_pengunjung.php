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
    
	 <table border="1" cellpadding="8">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Datang</th>
       
       
       
      <th scope="col">ID Anggota</th>
      <th scope="col">Tujuan</th>
      <th scope="col">Nama</th>
      
      
    </tr>

    

    <?php
    if( ! empty($buku_tamu)){
        $no = 1;
        foreach($buku_tamu as $btu){
            $tgl = date('d-m-Y', strtotime($btu->tanggal_dtg));

            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$tgl."</td>";
            echo "<td>".$btu->id_anggota."</td>";
            echo "<td>".$btu->tujuan."</td>";
            echo "<td>".$btu->nama."</td>";
         
            echo "</tr>";
            $no++;
      }
    }
    ?>
    
   
    
</table>
</body>
</html>
