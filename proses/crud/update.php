<?php
	include '../../conf.php';
	include '../../conn.php';
	$id = post('id');
	$nama = post('judul');
	$alamat = post('konten');
	$update_logo = post('penulis');
	
	$simpan = $koneksi->prepare("UPDATE 
								artikel 
							SET 
								`judul`='".$nama."', 
								`konten`='".$alamat."', 
								`penulis`='".$update_logo."' 
							WHERE 
								`id` ='".$id."'");
	$simpan->execute();
	header("location:../../index.php?p=crud");
?>