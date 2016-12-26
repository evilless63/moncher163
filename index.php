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
					<a href="images/mainPage/1.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/1.jpg" alt="">		
					</a>
					<a href="images/mainPage/2.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/2.jpg" alt="">		
					</a>
					<a href="images/mainPage/3.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/3.jpg" alt="">		
					</a>
					<a href="images/mainPage/4.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/4.jpg" alt="">		
					</a>
					<a href="images/mainPage/5.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/5.jpg" alt="">		
					</a>
					<a href="images/mainPage/6.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/6.jpg" alt="">		
					</a>
					<a href="images/mainPage/7.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/7.jpg" alt="">		
					</a>
					<a href="images/mainPage/8.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/8.jpg" alt="">		
					</a>
					<a href="images/mainPage/1.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/9.jpg" alt="">		
					</a>
					<a href="images/mainPage/2.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/10.jpg" alt="">		
					</a>
					<a href="images/mainPage/3.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/11.jpg" alt="">		
					</a>
					<a href="images/mainPage/4.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/12.jpg" alt="">		
					</a>
					<a href="images/mainPage/5.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/13.jpg" alt="">		
					</a>
					<a href="images/mainPage/6.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/14.jpg" alt="">		
					</a>
					<a href="images/mainPage/7.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/15.jpg" alt="">		
					</a>
					<a href="images/mainPage/8.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/16.jpg" alt="">		
					</a>
					<a href="images/mainPage/2.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/17.jpg" alt="">		
					</a>
					<a href="images/mainPage/3.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/18.jpg" alt="">		
					</a>
					<a href="images/mainPage/4.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/19.jpg" alt="">		
					</a>
					<a href="images/mainPage/5.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/20.jpg" alt="">		
					</a>
					<a href="images/mainPage/6.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/21.jpg" alt="">		
					</a>
					<a href="images/mainPage/7.jpg" class="fancyBoxImg" rel="gallery">
						<img src="images/mainPage/22.jpg" alt="">		
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