<h1>Tambah Artikel</h1>
<form method="POST" action="proses/crud/save.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Konten</td>
			<td><input type="text" name="konten"></td>
		</tr>
		<tr>
			<td>Penulis</td>
			<td><input type="text" name="penulis"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
</form>