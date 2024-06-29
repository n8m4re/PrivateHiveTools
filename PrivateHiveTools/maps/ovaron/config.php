<?php
/****************************
PrivateHiveTools by Nightmare
http://n8m4re.de
*****************************/
$MAP['name'] 		= 'ovaron';
$MAP['locations'] 	= '[{"latte":"-82.2379940231732","lange":"-38.199462890625","label":"Tokyo"},{"latte":"-78.79344256302927","lange":"-42.42919921875","label":"Soul"},{"latte":"-78.2334779330488","lange":"-29.46533203125","label":"Bangkok"},{"latte":"-79.75384125542179","lange":"-2.098388671875","label":"Yokohama"},{"latte":"-75.18578927942625","lange":"31.44287109375","label":"East Airport"},{"latte":"-75.90950400691686","lange":"-43.61572265625","label":"Jakarta"},{"latte":"-73.76349715052719","lange":"-31.124267578124996","label":"Teheran"},{"latte":"-71.01695975726373","lange":"-14.4580078125","label":"Hanoi"},{"latte":"-70.52489722821652","lange":"-3.09814453125","label":"Bagdad"},{"latte":"-71.83569063799273","lange":"12.579345703125","label":"Minsk"},{"latte":"-67.37369797436554","lange":"-15.75439453125","label":"Singapure"},{"latte":"-39.90973623453718","lange":"17.138671875","label":"Moskow"},{"latte":"-48.6909603909255","lange":"-13.0517578125","label":"Kabul"},{"latte":"-57.32652122521708","lange":"-27.9931640625","label":"Villa Bacho"},{"latte":"-61.60639637138627","lange":"-23.994140624999996","label":"Mac Castle"},{"latte":"-79.33521923837228","lange":"-77.2998046875","label":"Skopje"},{"latte":"-78.85306975959564","lange":"-87.33032226562499","label":"Valletta"},{"latte":"-81.55707352166367","lange":"-89.40673828125","label":"Monaco"},{"latte":"-69.8396219406746","lange":"-32.9150390625","label":"Hiroshima"},{"latte":"-66.58321725728175","lange":"-58.75488281249999","label":"Riad"},{"latte":"-72.47527631092942","lange":"-90.81298828125","label":"Luxemburg"},{"latte":"-77.93405519690262","lange":"-106.9189453125","label":"Calais"},{"latte":"-81.67242422726375","lange":"-121.59667968749999","label":"Amsterdam"},{"latte":"-78.93770843550641","lange":"-124.82666015624999","label":"Den Haag"},{"latte":"-77.91566898632583","lange":"-140.361328125","label":"Vaduz"},{"latte":"-76.22690740640384","lange":"-124.1455078125","label":"Eddie Castle"},{"latte":"-72.1279362810559","lange":"-119.5751953125","label":"Pix Castle"},{"latte":"-66.37275500247455","lange":"-81.298828125","label":"Rom"},{"latte":"-66.86108230224609","lange":"-148.8427734375","label":"New York"},{"latte":"-61.270232790000605","lange":"-121.904296875","label":"Dublin"},{"latte":"-61.77312286453146","lange":"-94.2626953125","label":"Riga"},{"latte":"-53.98193516209166","lange":"-106.23779296875","label":"Villa Riba"},{"latte":"-48.60385760823253","lange":"-110.54443359375","label":"Ace Castle"},{"latte":"-40.212440718286466","lange":"-76.431884765625","label":"Lissabon"},{"latte":"-48.51660434886747","lange":"-40.6494140625","label":"Damaskus"},{"latte":"-38.54816542304656","lange":"-28.498535156249996","label":"Beirut"},{"latte":"-27.059125784374054","lange":"-43.43994140625","label":"Baku"},{"latte":"-27.761329874505233","lange":"-15.75439453125","label":"Daninz Castle"},{"latte":"-14.093957177836224","lange":"-10.65673828125","label":"Hawk Castle"},{"latte":"-5.266007882805498","lange":"5.95458984375","label":"Colombo"},{"latte":"-1.4061088354351594","lange":"-8.778076171875","label":"Kuwait"},{"latte":"7.297087564172005","lange":"-6.668701171875","label":"Bejing"},{"latte":"14.987239525774259","lange":"-13.68896484375","label":"Dili"},{"latte":"-4.390228926463384","lange":"-27.35595703125","label":"Peking"},{"latte":"-0.615222552406841","lange":"-47.65869140625","label":"Eriwan"},{"latte":"14.306969497825788","lange":"-45.59326171875","label":"Islamabad"},{"latte":"1.4280747713669302","lange":"-57.249755859375","label":"Ulan Bator"},{"latte":"-14.604847155053898","lange":"-90.9228515625","label":"Kopenhagen"},{"latte":"-0.7909904981540058","lange":"-92.48291015625","label":"Belgrad"},{"latte":"19.12440952808487","lange":"-95.833740234375","label":"Oslo"},{"latte":"-4.039617826768424","lange":"-106.89697265625","label":"Sofia"},{"latte":"3.6888551431470478","lange":"-132.802734375","label":"Stralsund"},{"latte":"-18.646245142670608","lange":"-166.9482421875","label":"West Airport"},{"latte":"-28.459033019728043","lange":"-147.0849609375","label":"Rostock"},{"latte":"-31.353636941500987","lange":"-130.8251953125","label":"Athen"},{"latte":"-30.44867367928755","lange":"-121.2451171875","label":"Reval"},{"latte":"-39.0277188402116","lange":"-119.55322265624999","label":"Helsinki"},{"latte":"-33.578014746143985","lange":"-102.7001953125","label":"Paris"},{"latte":"-21.125497636606266","lange":"-104.6337890625","label":"Berlin"}]';
$MAP['size'] 		= 10240;
$MAP['var']			= 6144;
$MAP['div']			= 101;
$MAP['gpsX']		= 'pixel / ' . $MAP['div'];
$MAP['gpsY']		= '( pixel - ' . $MAP['var']  . ' ) / ' . $MAP['div'];
$MAP['limitGPSX']	= 102;
$MAP['limitGPSY']	= 0;
$MAP['minZoom']		= 1;
$MAP['maxZoom']		= 6;
$MAP['setView']		= '[-60,-60],2';
$MAP['markerY']     = ( $MAP['size'] + $MAP['var'] ) . '- markerY';
$MAP['markerX']     = 'markerX';