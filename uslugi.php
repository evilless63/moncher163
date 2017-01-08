		<?php 
			
			$wrapperType = '<div id="wrapperForFullpagePluginUslugi">';
			$title = 'Mon Cher - Салон красоты';
			$articleClass = 'section servises backgroundCover fp-section active fp-completely';
			$articleDataAncor = 'servises';
			include 'layouts/header.php';

		?>
			<section class="welcomePresentation serviseNodes container">
                <div class="row">

                <?php
                    $count = 0;
                    foreach($servises->contents as $servise){
                        echo "<div class=\"serviseNode ". $servise->servisesAttrAndClass ."\" attrText=\"". $servise->title ."\" attrId=". $servise->servisesAttrAndClass ."></div>";
                        
                        $count ++ ;
                        
                        if($count % 4 == 0 && $count !== 12) {
                            echo "</div><div class=\"row\">" ;
                        } 

                    }

                ?>
                </div>
			</section>
		</article>
		<article class="section servisesInfo backgroundCover targetFlexVerticalCenter" data-anchor="servisesInfo">
            <div class="toServises">
					<a href="#servises"></a>
				</div>
			<div class="servisesInfoWrap container">
                <? foreach($servises->contents as $servise):?>
                    <div class="servicesDescription" id="<?=$servise->servisesAttrAndClass ?>">
                        <!-- <img class="servisesInfoLogo" src="images/servisesPage/serviseInfoLogo.png"/> -->
                        
                            <div class="serviseHeader"><?=$servise->title ?></div>
                            <div class="serviseSubHeader"><?=$servise->subtitle ?></div>
                            <div class="serviseDescription"><?=$servise->description ?></div>
                            <div class="serviseDescription"><a href="doc/price1.pdf" target="_blank">Прайс №1</a><a href="doc/price2.pdf" target="_blank">Прайс №2</a></div>
                            
                    </div>
                    <div class="servicesPrices <?=$servise->servisesAttrAndClass. 'Class' ?>">
                        <p><span>От</span> <?=$servise->price ?> руб</p>
                    </div>
                <? endforeach; ?>
			</div>
		<? include 'layouts/footer.php' ?>