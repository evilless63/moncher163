<?php

$jsonActions = '
{ 
	"contents": [
		{
			"actionNumber": 1,                        
			"title": "Наши акции",             
			"subTitle": "Купи 2 крема \"Vichy\" в салоне<br>получи процедуру бесплатно !",
			"classShare": "share1"  
		},	
		{
			"actionNumber": 2,                        
			"title": "Наши акции",             
			"subTitle": "Купи 2 крема \"Vichy\" в салоне<br>получи процедуру бесплатно !",
			"classShare": "share1"  
		},	
		{
			"actionNumber": 3,                        
			"title": "Наши акции",             
			"subTitle": "Купи 2 крема \"Vichy\" в салоне<br>получи процедуру бесплатно !",
			"classShare": "share1"  
		},	
		{
			"actionNumber": 4,                        
			"title": "Наши акции",             
			"subTitle": "Купи 2 крема \"Vichy\" в салоне<br>получи процедуру бесплатно !",
			"classShare": "share1"  
		}
	]	              
}                                          
';
 
$actions = json_decode( $jsonActions );
