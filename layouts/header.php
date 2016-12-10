<? 
	
	include 'json/actionsInfo.php';
	include 'json/adressInfo.php';
	include 'json/employersInfo.php';
	include 'json/reviewsInfo.php';
	include 'json/servisesInfo.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/latofonts.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="plugins/fullpage/jquery.fullpage.min.css">
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick/slick-theme.css">
	<link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="css/reset.css">
	
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/fullpage/jquery.fullpage.min.js"></script>	
	<script type="text/javascript" src="plugins/fullpage/scrolloverflow.min.js"></script>
	<script src="plugins/slick/slick.min.js"></script>
	<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
	<script src="plugins/tooltip/easytooltip.js"></script>
	<script src="js/script.js"></script>

	<title><?= $title?></title>
</head>
<body>
	
	<?= $wrapperType?>
		
		<article class="<?= $articleClass?>" data-anchor="<?= $articleDataAncor?>">
			<header class="header containerFluid row">
				<div class="container row">
					<img src="images/mainPage/logo.png" alt="Mon Cher - Салон красоты" class="logo">
					<ul class="mainMenu row">
						<li><a href="index.php">Главная</a></li>
						<li><a href="uslugi.php">Услуги и цены</a></li>
						<li><a href="onas.php">О нас</a></li>
						<li><a href="kontakty.php">Контакты</a></li>
					</ul>
					<div class="phone"><?= $adress->phoneMobile ?></div>	
				</div>
			</header>