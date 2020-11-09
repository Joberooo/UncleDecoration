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
			<a href="dekoracje_kosciola.php"><li>Dekoracje kościoła</li></a>
			<a href="dekoracje_sali.php"><li>Dekoracje sali</li></a>
			<a href="bukiety_slubne.php"><li>Bukiety ślubne</li></a>
			<a href="sesja_plenerowa.php"><li>Sesja Plenerowa</li></a>
			<a href="akcesoria.php"><li>Akcesoria Ślubne</li></a>
		</ul>
	</div>
	
	
	<div id="kontener">
		<div id="kontenerOferty">
			<div id="oferty">
				<div class="oferta">
					<div class="element">
						<img src="img2/oferta/akcesoria.jpg" />
						<h2><a class="link" href="dekoracje_kosciola.php">
							<div class="content">
								<h1>Dekoracje kościoła</h1>
								<br/>
								<p>Zobacz ofertę</p>
							</div>
						</a></h2>
					</div>
				</div>
				<div class="oferta">
					<div class="element">
						<img src="img2/oferta/dekoracjaSali.jpg" />
						<h2><a class="link" href="dekoracje_sali.php">
							<div class="content">
								<h1>Dekoracje sali</h1>
								<br/>
								<p>Zobacz ofertę</p>
							</div>
						</a></h2>
					</div>
				</div>
				<div class="oferta">
					<div class="element">
						<img src="img/bukietslubny2.jpg" />
						<h2><a class="link" href="akcesoria.php">
							<div class="content">
								<h1>Akcesoria ślubne</h1>
								<br/>
								<p>Zobacz ofertę</p>
							</div>
						</a></h2>
					</div>
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