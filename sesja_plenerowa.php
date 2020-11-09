<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Wujek Dekoracje</title>
	<meta name="description" content="Strona przedstawiająca ofertę firmy Wujek Dekoracje">
	<meta name="keywords" content="dekoracje, wujek, florystyka, slub, ślub, wedding, impreza, wesele, kwiaty, wypozyczenie">
	<meta name="author" content="It Masters">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/oferta.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/galeria.css">
	<link href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
</head>

<body>
	<div id="menu">
		<div id="miniLogo">
			<a href="index.php">
				<div id="logo">
					<div id="prostokat">
						<p>Wujek</p>
					</div>
					<p>Dekoracje</p>
				</div>
			</a>
		</div>
		<ul>
			<li><a href="index.php">Strona Główna</a></li>
			<li><a href="oferta.php">Oferta</a></li>
			<li><a href="kontakt.php">Kontakt</a></li>
		<ul>
	</div>	
	
	<div id="navBar">
		<ul>
			<a href="dekoracje_kosciola.php"><li><p>Dekoracje</p><div class="decorationSmallElement"><p>kościoła</p></div></li></a>
			<a href="dekoracje_sali.php"><li><p>Dekoracje</p><div class="decorationSmallElement"><p>sali</p></div></li></a>
			<a href="bukiety_slubne.php"><li><p>Bukiety</p><div class="decorationSmallElement"><p>ślubne</p></div></li></a>
			<a href="sesja_plenerowa.php"><li><p>Sesja</p><div class="decorationSmallElement"><p>plenerowa</p></div></li></a>
			<a href="akcesoria.php"><li><p>Akcesoria</p><div class="decorationSmallElement"><p>ślubne</p></div></li></a>
		</ul>
	</div>
	
	
	<div id="kontener">
		<div id="zawartosc">
			<div id="tytul">
				<h1>Dekoracje Sali</h1>
			</div>
			<section id="photos">
				<div class="container">
					<?php
						$katalog = "img2/sesja_plenerowa";
						$galeria = opendir($katalog);
						while( $zdjecie = readdir($galeria)){
							$odczyt = pathinfo($katalog.'/'.$zdjecie);
							if($odczyt['extension'] == 'jpg' || $odczyt['extension'] == 'JPG' || $odczyt['extension'] == 'png' || $odczyt['extension'] == 'PNG' || $odczyt['extension'] == 'gif' || $odczyt['extension'] == 'GIF'){
								echo '<div class="box"><a class="gallery" href="'.$katalog.'/'.$zdjecie.'"><img src="'.$katalog.'/'.$zdjecie.'" alt=""></a></div>';
							}
						}
						closedir($galeria);
					?>
				</div>
			</section>
		</div>
	</div>
	<script src="comp.js"></script>
	<script src="gallery.js"></script>
	<script src="kolumny.js"></script>
	<script>
    (function ($) {
      $(".gallery").gallery();
    })(Comp);
	</script>
</body>