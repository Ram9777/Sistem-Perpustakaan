<div class="content-wrapper">
	<section class="content">
		<table width="25%">
			<tr>
				<th>
		<h4><strong>Perpustakaan Braille BPBI Abiyoso</strong></h4>
	</th>
	</tr>
	<tr>
		<td>
			<hr>
		</td>
	</tr>
</table>


<table class="bg-success" width="25%" height="25%">
	<tr rowspan="3" class="bg-success">
		<td><b>ID Anggota : </b></td>
		<td><?= $detailang->id_anggota ?></td>
		<th rowspan="3"><img src="<?php echo base_url(); ?>assets/foto/<?php echo $detailang->foto; ?>" width="140" height="150"></th>
			</tr>
			<tr>
				<td><b>Nama Anggota :</b> </td>
		<td><?= $detailang->nama ?></td>

			</tr>
			<tr>
				<td><b>Tipe Keanggotaan : </b></td>
		<td><?= $detailang->kategori ?></td>
			</tr>
			
				
		<!--<td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $detailang->foto; ?>" width="90" height="90"></td>-->
			
</table>

<button onclick="myFunction()">Cetak Kartu Anggota</button>
 
<script>
 
function myFunction() {
 
    window.print();
 
}
 
</script>
</section>
</div>