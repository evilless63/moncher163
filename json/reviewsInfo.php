<?php

$jsonReviews = '
{ 
	"contents": [
		{
			"reviewsNumber": 1,                        
			"name": "Ангелина",             
			"description": "Чувствовала себя уютно, комфортно. Полностью довольна результатом. Обязательно в следующий раз выберу Вас !",
			"city": "Самара",
			"vkLink": ""											
		},	
		{
			"reviewsNumber": 2,                        
			"name": "Василиса",             
			"description": "Отличный салон красоты ! Очень рекомендую.",
			"city": "Самара",
			"vkLink": ""											
		},
		{
			"reviewsNumber": 3,                        
			"name": "Екатерина",             
			"description": "Приятные цены, хорошие мастера. Спасибо Вам ! ",
			"city": "Самара",
			"vkLink": ""											
		},
		{
			"reviewsNumber": 4,                        
			"name": "Ксения",             
			"description": "Очень классный салон. Пришла по записи покрасить волосы, очень рада своему новому образу! Спасибо! Все понравилось.",
			"city": "Самара",
			"vkLink": ""											
		}
	]	              
}                                          
';
 
$reviews = json_decode( $jsonReviews );