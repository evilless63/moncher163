<?php

$jsonAdress = '
{ 

	"adress": "Г. Самара ул.Мориса Тореза, д.79 ",                        
	"phoneMobile": "990-48-05",             
	"phone": "8 (846) 200-52-82",
	"email": "Moncher63@gmail.ru",
 	"vkLink": "https://vk.com/salon_mon_cher",
	"instagramLink": "https://www.instagram.com/mon_cher_salon_v_samare"                  
}                                          
';
 
$adress = json_decode( $jsonAdress );
