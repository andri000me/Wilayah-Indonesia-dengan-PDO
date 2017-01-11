<?php

include_once "database.php";
$call_db = new db_class();

if (!empty($_GET['q'])){
	if (ctype_digit($_GET['q'])) {
		$kota = $call_db->view('regencies', '*', 'province_id='.$_GET["q"], 'name ASC', '');
		echo '<option value="" disabled selected>Pilih Kota/Kabupaten</option>';
		while($data = $kota->fetch(PDO::FETCH_OBJ)){
			echo '<option value='.$data->id.'&prop=11>'.$data->name.'</option>';
		}
	}
}

if (!empty($_GET['kec'])){
	if (ctype_digit($_GET['kec'])) {
		$kec = $call_db->view('districts', '*', 'regency_id='.$_GET["kec"], 'name ASC', '');
		echo '<option value="" disabled selected>Pilih Kecamatan</option>';
		while($data = $kec->fetch(PDO::FETCH_OBJ)){
			echo '<option value='.$data->id.'>'.$data->name.'</option>';
		}
	}
}

if (!empty($_GET['kel'])){
	if (ctype_digit($_GET['kel'])) {
		$kec = $call_db->view('villages', '*', 'district_id='.$_GET["kel"], 'name ASC', '');
		echo '<option value="" disabled selected>Pilih Kelurahan/Desa</option>';
		while($data = $kec->fetch(PDO::FETCH_OBJ)){
			echo '<option value='.$data->id.'>'.$data->name.'</option>';
		}
	}
}
			