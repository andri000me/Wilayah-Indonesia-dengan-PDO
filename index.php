<!DOCTYPE html>
<html>
<head>
	<title>Wilayah Indonesia</title>
	<link rel="stylesheet" type="text/css" href="aset/style.css">
</head>
<body>

<?php 
	include_once 'database.php';
	$call_db = new db_class();
?>
	<center>
		<h2 style="margin-bottom: 50px; margin-top: 100px;">Wilayah Indonesia</h2>
		<table>
			<tr>
				<td>Pilih Provinsi</td>
				<td>:</td>
				<td>
					<select name="prop" id="prop" onchange="ajaxkota(this.value)">
						<option value="">Pilih Provinsi</option>
						<?php
					      $provinsi = $call_db->view('provinces', '*', '', 'name ASC', '');
					      while ($data = $provinsi->fetch(PDO::FETCH_OBJ)){
					    ?>
					      	<option value="<?= $data->id; ?>"><?= $data->name; ?></option>
					     <?php } ?>
					<select>
				</td>
			</tr>
			<tr>
				<td>Pilih Kota/Kab</td>
				<td>:</td>
				<td>
					<select name="kota" id="kota" onchange="ajaxkec(this.value)">
						<option value="">Pilih Kota/Kabupaten</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pilih Kec</td>
				<td>:</td>
				<td>
					<select name="kec" id="kec" onchange="ajaxkel(this.value)">
						<option value="">Pilih Kecamatan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pilih Kelurahan/Desa</td>
				<td>:</td>
				<td>
					<select name="kel" id="kel">
						<option value="">Pilih Kelurahan/Desa</option>
					</select>
				</td>
			</tr>
		</table>
	</center>

	
	<script type="text/javascript" src="aset/jquery.min.js"></script>
	<script type="text/javascript" src="wilayah.js"></script>
</body>
</html>