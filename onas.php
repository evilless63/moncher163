		<?php 
			
			$wrapperType = '<div id="wrapperForFullpagePluginAbout">';
			$title = 'Mon Cher - Салон красоты';
			$articleClass = 'section aboutUs backgroundCover fp-section active fp-completely';
			$articleDataAncor = 'aboutUs';
			include '/layouts/header.php';

		?>
			<section class="welcomePresentation  container">
				<div class="h1Uslugi">Мастера нашего салона</div>		
				<div class="h2Uslugi">Наши мастера — настоящие профессионалы своего дела. Они постоянно повышают свою квалификацию, участвуют в международных форумах и занимают призовые места.</div>	
				<div class="employerSlider">

				<? foreach($employers->contents as $employer):?>
					<div class="employerBlock" >
						<img src="images/aboutPage/<?= $employer->photo ?>" alt="<?= $employer->name ?>" class="employerPhoto" id="employerInfo<?= $employer->employerNumber ?>">
						<div class="employerTitle"><?= $employer->name ?></div>
						<div class="employerDesc"><?= $employer->position ?>
							<br><span class="employerMoreInfo"  >Подробнее...</span>
						</div>
						<div class="employerSocials">
							<a href="<?= $employer->vkLink ?>" class="vk social">
								<img src="images/aboutPage/employer_vk.png" alt="">
							</a>
							<a href="<?= $employer->fbLink ?>" class="fb social">
								<img src="images/aboutPage/employer_fb.png" alt="">
							</a>

							<a href="<?= $employer->instLink ?>" class="tw social">
								<img src="images/aboutPage/employer_tw.png" alt="">
							</a>
						</div>
						<script>
							$(document).ready(function(){
								var item = "employerInfo<?= $employer->employerNumber ?>" ;
								var description = "<?= $employer->description ?>" ;
								$("#" + item).tooltip({
								    txt: description 
								});
							});
						</script>
					</div>
				<? endforeach;?>	

				</div>		
				<div class="toShares toReviews">
					<a href="#clientReviews"></a>
				</div>	
			</section>
		</article>
		<article class="section clientReviews backgroundCover targetFlexVerticalCenter" data-anchor="clientReviews">
			<section class="welcomePresentation container">
				<div class="toServises toAboutUs">
					<a href="#aboutUs"></a>
				</div>
				<div class="ourAdvantages">
					<div class="ourAdvantagesBlock">
						<div class="ourAdvantagesh1">
							Индивидуальный подход
						</div>
						<div class="ourAdvantagesDesc">
							Все наши клиенты достойны эксклюзивности, 
							и мы обеспечиваем индивидуальный и творческий подход к
							каждому клиенту!
						</div>
					</div>
					<div class="ourAdvantagesBlock">
						<div class="ourAdvantagesh1">
							Гарантия качества
						</div>
						<div class="ourAdvantagesDesc">
							Для Вас работают только опытные мастера, используются только проверенные современные технологии и исключительно качественная продукция лучших производителей косметики. 
						</div>
					</div>
					<div class="ourAdvantagesBlock">
						<div class="ourAdvantagesh1">
							Широкий спектр услуг 
						</div>
						<div class="ourAdvantagesDesc">
							У нас всегда широкий выбор услуг, из которых наши мастера создадут индивидуальную программу Вашего преображения.
						</div>
					</div>
				</div>
				<div class="H1clientReviews">Отзывы наших клиентов</div>
				<div class="clientReviewsSlider">

					<? if($reviews->contents) foreach($reviews->contents as $review) :?>
					<div class="clientReviewsBlock">
						<div class="clientReviewsDesc">
							“<?= $review->description ?>”
						</div>
						<div class="clientReviewsName">
							<?= $review->name ?>
						</div>
						<div class="clientReviewsName">
							<?= $review->city ?>
						</div>
						<a class="clientReviewsLink">
							<?= $review->vkLink ?>
						</a>
					</div>
					<? endforeach; ?>
				</div>
			</section>
			<? include 'layouts/footer.php' ?>