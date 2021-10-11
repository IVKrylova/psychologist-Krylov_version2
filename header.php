<?php include 'form.php'; ?>

<?php 
	function data_filter($data)	{
		$data = htmlspecialchars($data);
		$data = mysql_escape_string($data);
		return $data;
	}
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Психолог Алексей Крылов в Нижнем Новгороде</title>

		<meta name="yandex-verification" content="0255136b20acb5aa" />

		<link rel="shortcut icon" href="img/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="libs/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="libs/dist/css/lightbox.css">
		<link rel="stylesheet" href="style/normalize.css">
		<link rel="stylesheet" href="style/animation.css">
		<link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/media.css">	

		<script src="https://www.google.com/recaptcha/api.js" async defer></script>	
	</head>

	<body>
		<header class="header">
			<div class="topRectangle mediaTopRectangleDesktop">
				<div class="topTitle">
					<img class="logo" src="img/logo.png" alt="Психолог Алексей Крылов">
					<h1>Психолог Алексей Крылов</h1>
				</div>
				<p class="phone"><a href="tel:+79101031599">8 (910) 103-15-99</a></p>
				<p class="socialNetwork">
					<a href="https://www.instagram.com/krylov_alni/?igshid=ffm4pjtbjhtw" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://join.skype.com/invite/h70XDqDThlth" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a>
					<a href="https://www.tiktok.com/@psy_krylov" target="_blank"><i class="fab fa-tiktok"></i></a>
				</p>
			</div>

			<div class="topRectangle mediaTopRectangleTablet">
				<div class="topTitle">
					<img class="logo" src="img/logo.png" alt="Психолог Алексей Крылов">
					<h4>Психолог Алексей Крылов</h4>
				</div>
				<div class="mediaWrap">
					<p class="socialNetwork">
						<a href="https://www.instagram.com/krylov_alni/?igshid=ffm4pjtbjhtw" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://join.skype.com/invite/h70XDqDThlth" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a>
						<a href="https://www.tiktok.com/@psy_krylov" target="_blank"><i class="fab fa-tiktok"></i></a>
					</p>
					<p class="phone"><a href="tel:+79101031599">8 (910) 103-15-99</a></p>
				</div>
			</div>