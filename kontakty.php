		<?php 
			
			$wrapperType = '<div id="wrapperForFullpagePluginContacts">';
			$title = 'Mon Cher - Салон красоты';
			$articleClass = 'section contactsInfo  targetFlexVerticalCenter  fp-section active fp-completely';
			$articleDataAncor = 'contactsInfo';
			include 'layouts/header.php';

		?>
			<section class="welcomePresentation contactsSection container">
				<div class="ContactsTitle"><span>Наши</span> контакты</div>
				<div class="ContactsAdress">город Самара<br> ул. Мориса-Тореза 79</div>
				<div class="ContactsPhone">990-48-05</div>
				<div class="toShares toReviews toMap">
					<a href="#contactsMap">Посмотреть карту</a>
				</div>	
			</section>
		</article>
		<article class="section contactsMap backgroundCover targetFlexVerticalCenter " data-anchor="contactsMap">
			<div class="toAboutUs toContacts">
				<a href="#contactsInfo"></a>
			</div>
			<!-- <img src="images/contactsPage/logo.png" alt="Mon Cher - Салон красоты" class="logoContacts"> -->
			<section class="containerFluid ContactsSepia"></section>
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ucw8IJTPLuzMTfOH98KOPu4SEklKWi0g&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
		<? include 'layouts/footer.php' ?>