<?php
	include '../../conf.php';
	include '../../conn.php';
	$nama = post('judul');
	$alamat = post('konten');
	$logo = post('penulis');
	$simpan = $koneksi->prepare("INSERT INTO artikel (`judul`,`konten`,`penulis`) VALUES ('".$nama."','".$alamat."','".$logo."')");
	$simpan->execute();
	header("location:../../index.php?p=crud");
?>