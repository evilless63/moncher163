		<?php 
			
			$wrapperType = '<div id="wrapperForFullpagePlugin">';
			$title = 'Mon Cher - Салон красоты';
			$articleClass = 'section welcome backgroundCover';
			$articleDataAncor = 'welcome';
			include '/layouts/header.php';

		?>
			<section class="welcomePresentation container">
				<h1 class="welcomeH1">
					Зима в moncher
				</h1>
				<h2 class="welcomeH2">
					<span>Мы поможем Вам</span><br>
					сделать еще один шаг на пути к абсолютной красоте!
				</h2>
				<div class="welcomeSlider">
					<a href="images/mainPage/sliderPhoto1.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/sliderPhoto1.jpg" alt="">		
					</a>
					<a href="images/mainPage/sliderPhoto2.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/sliderPhoto2.jpg" alt="">		
					</a>
					<a href="images/mainPage/sliderPhoto3.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/sliderPhoto3.jpg" alt="">		
					</a>
					<a href="images/mainPage/sliderPhoto4.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/sliderPhoto4.jpg" alt="">		
					</a>
					<a href="images/mainPage/sliderPhoto1.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/sliderPhoto1.jpg" alt="">		
					</a>
					<a href="images/mainPage/sliderPhoto2.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/sliderPhoto2.jpg" alt="">		
					</a>
					<a href="images/mainPage/sliderPhoto3.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/sliderPhoto3.jpg" alt="">		
					</a>
					<a href="images/mainPage/sliderPhoto4.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/sliderPhoto4.jpg" alt="">		
					</a>
				</div>
				<div class="toShares">
					<a href="#shares">Наши акции</a>
				</div>	
			</section>
		</article>
		<article class="section shares backgroundCover targetFlexVerticalCenter" data-anchor="shares">
			<div class="sharesSlider container">

				<? foreach($actions->contents as $action): ?>
				<div class="sharesSliderBlock <?= $action->classShare ?>">
					<h1 class="shareH1"><?= $action->title ?></h1>	
					<h2 class="shareH2"><?= $action->subTitle ?></h2>
				</div>
				<? endforeach; ?>

			</div>
		<? include 'layouts/footer.php' ?>