<?PHP
	$adresat = 'ewelinamichalik184@gmail.com'; 	// pod ten adres zostanie wysłana 							// wiadomosc
	@$email = $_POST['adres'];
	@$content = $_POST['komentarz'];
			
	$header = "MIME-Version: 1.0".
	"\r\n";
	$header .= "Content-type:text/html;charset=UTF-8".
	"\r\n";
	$header .= "From: $email". 
	"\r\n";
			
	if (mail($adresat, 'List z wujek-dekoracje.pl', $content,  $header))
	{
		
		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "kontakt.php";';
		echo 'alert("E-mail został wysłany");'; 
		echo '</script>';

	}
	else 
	{
		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "kontakt.php";';
		echo 'alert("Nie można wysłać e-maila");'; 
		echo '</script>';
	}
?>