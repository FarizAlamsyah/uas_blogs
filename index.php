<?php
	include 'conn.php';
	include 'conf.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD & BLOG</title>
	<link rel="stylesheet" type="text/css" href="assets/css/css.css">
</head>
<body>
	<div class="top-gray"></div>
	<div class="header">
		<div class="big-logo">LOGO</div>
		<?php include 'menu.php';?>
	</div>
	<div class="content">
		<div class="container">
			<?php
				if(!is_null(get('p'))){
					switch (get('p')) {
						case 'sekolah':
							inc('home');
							break;
						case 'crud':
							switch (get('m')) {
								case 'crud':
									inc('tampilan/crud/all');
									break;
								case 'add':
									inc('tampilan/crud/add');
									break;
								case 'edit':
									inc('tampilan/crud/edit');
								default:
									inc('tampilan/crud/all');
									break;
							}
							break;
						default;
							inc('home');
							break;
					}
				}else{ inc('home'); } ?>
		</div>
	</div>
</body>
</html>