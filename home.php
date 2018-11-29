<h1>BLOGSPOT Fariz Alamsyah</h1>

<?php
	$judul = post('judul');
	$konten = post('konten');
	$penulis = post('penulis');
?>

	<?php
	$addonq = '';
	if(get("q")!=""){ $addonq = " WHERE nama LIKE '%". get('q')."%'"; }
	$hasil = $koneksi->prepare("SELECT * FROM artikel ".$addonq.
	" ORDER BY id DESC");
	$hasil->execute();
	$data = $hasil->fetchAll();
	?>

	<?php
	$i = 1;
	foreach ($data as $key) {
	?>

	<h2><?php echo $key['judul']; ?></h2>
	<h4><?php echo $key['penulis']; ?></h4>
	<p><?php echo $key['konten']; ?></p>

	<?php
		$i++;
	}
	?>