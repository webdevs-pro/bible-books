<?php
	$biblerefs_lang_name = 'NRT (Новый русский перевод)';
	$biblerefs_book_lang = 'nrt';
	$biblerefs_chapter = 'Глава';
	$biblerefs_ch = 'гл.';
	$biblerefs_psalm = 'Псалом';
	$biblerefs_ps = 'пс.';
	
	$biblerefs_url = array(		// Допустимые обозначения книг Священного Писания
		// Ветхий Завет
		// Пятикнижие Моисея															
		'Gen'			=>'Gen',			//'Книга Бытия', 	
		'Бытие'		=>'Gen',					
		'Быт'			=>'Gen',					
		'Ex'			=>'Ex',	 		//'Книга Исход', 			
		'Исх'			=>'Ex',	 					
		'Lev'			=>'Lev', 		//'Книга Левит', 		
		'Левит'		=>'Lev', 							
		'Лев'			=>'Lev', 							
		'Лв'			=>'Lev', 							
		'Num'			=>'Num', 		//'Книга Числа',	
		'Числа'		=>'Num', 						
		'Числ'		=>'Num', 						
		'Чис'			=>'Num', 						
		'Чс'			=>'Num', 						
		'Deut'		=>'Deut',		//'Второзаконие',		
		'Втор'		=>'Deut',							
		// «Пророки» (Невиим) 
		'Nav'			=>'Nav', 		//'Книга Иисуса Навина',	
		'Нав'			=>'Nav', 						
		'ИсНав'		=>'Nav', 						
		'Judg'		=>'Judg', 		//'Книга Судей Израилевых', 	
		'Судей'		=>'Judg', 						
		'Суд'			=>'Judg', 						
		'Сд'			=>'Judg', 						
		'Rth'			=>'Rth',			//'Книга Руфь',	
		'Руфь'		=>'Rth',						
		'Руф'			=>'Rth',						
		'1Sam'		=>'1Sam',		//'Первая книга Царств (Первая книга Самуила)', 	
		'1Цар'		=>'1Sam',						
		'1Сам'		=>'1Sam',						
		'1См'			=>'1Sam',						
		'2Sam'		=>'2Sam',		//'Вторая книга Царств (Вторая книга Самуила)', 	
		'2Цар'		=>'2Sam',						
		'2Сам'		=>'2Sam',						
		'2См'			=>'2Sam',						
		'1King'		=>'1King', 		//'Третья книга Царств (Первая книга Царей)', 
		'3Цар'		=>'1King', 					
		'1Царей'		=>'1King', 					
		'2King'		=>'2King', 		//'Четвертая книга Царств (Вторая книга Царей)', 
		'4Цар'		=>'2King', 					
		'2Царей'		=>'2King', 					
		'1Chron'		=>'1Chron',		//'Первая книга Паралипоменон (Первая книга Хроник, Первая Летопись)', 
		'1Пар'		=>'1Chron',		
		'1Хрон'		=>'1Chron',		
		'1Хр'			=>'1Chron',		
		'1Лет'		=>'1Chron',		
		'2Chron'		=>'2Chron',		//'Вторая книга Паралипоменон (Вторая книга Хроник, Вторая Летопись)', 
		'2Пар'		=>'2Chron',		
		'2Хрон'		=>'2Chron',		
		'2Хр'			=>'2Chron',		
		'2Лет'		=>'2Chron',		
		'Ezr'			=>'Ezr', 		//'Книга Ездры (Первая книга Ездры)', 
		'1Ездр'		=>'Ezr', 				
		'1Езд'		=>'Ezr', 				
		'Ездр'		=>'Ezr', 				
		'Езд'			=>'Ezr', 				
		'Ез'			=>'Ezr', 				
		'Nehem'		=>'Nehem', 		//'Книга Неемии',	
		'Неем'		=>'Nehem', 						
		'Нм'			=>'Nehem', 						
		'Est'			=>'Est', 		//'Книга Есфири',  
		'Есф'			=>'Est', 							
		'Эсф'			=>'Est', 							
		// «Писания» (Ктувим)		
		'Job'			=>'Job', 		//'Книга Иова',			
		'Иов'			=>'Job', 								
		'Ps'			=>'Ps',			//'Псалтирь', 	
		'Псалт'		=>'Ps',							
		'Псал'		=>'Ps',							
		'Пс'			=>'Ps',							
		'Prov'		=>'Prov', 		//'Книга Притчей Соломоновых', 
		'Притчи'		=>'Prov', 					
		'Притч'		=>'Prov', 					
		'Прит'		=>'Prov', 					
		'Eccl'		=>'Eccl', 		//'Книга Екклезиаста, или Проповедника', 		
		'Еккл'		=>'Eccl', 							
		'Екк'			=>'Eccl', 							
		'Екл'			=>'Eccl', 							
		'Ек'			=>'Eccl', 							
		'Song'		=>'Song',		//'Песнь песней Соломона',		
		'Песня'		=>'Song',							
		'Песн'		=>'Song',							
		'Is'			=>'Is', 			//'Книга пророка Исайи',		
		'Исайи'		=>'Is', 							
		'Исаи'		=>'Is', 							
		'Ис'			=>'Is', 							
		'Jer'			=>'Jer',			//'Книга пророка Иеремии',			
		'Иер'			=>'Jer',								
		'Lam'			=>'Lam', 		//'Книга Плач Иеремии', 	
		'Плч'			=>'Lam', 						
		'Плач'		=>'Lam', 						
		'Ezek'		=>'Ezek',		//'Книга пророка Иезекииля',		
		'Иез'			=>'Ezek',							
		'Dan'			=>'Dan', 		//'Книга пророка Даниила',			
		'Дан'			=>'Dan', 								
		'Днл'			=>'Dan', 								
		// Двенадцать малых пророков 
		'Hos'			=>'Hos',  		//'Книга пророка Осии', 		
		'Осии'		=>'Hos',  							
		'Ос'			=>'Hos',  							
		'Joel'		=>'Joel', 		//'Книга пророка Иоиля',
		'Иоиль'		=>'Joel', 					
		'Иоил'		=>'Joel', 					
		'Am'			=>'Am',			//'Книга пророка Амоса',	
		'Амос'		=>'Am',							
		'Амс'			=>'Am',							
		'Ам'			=>'Am',							
		'Avd'			=>'Avd', 		//'Книга пророка Авдия',			
		'Авд'			=>'Avd', 								
		'Jona'		=>'Jona', 		//'Книга пророка Ионы',	
		'Иона'		=>'Jona', 						
		'Ион'			=>'Jona', 						
		'Mic'			=>'Mic', 		//'Книга пророка Михея',			
		'Михей'		=>'Mic', 								
		'Мих'			=>'Mic', 								
		'Мх'			=>'Mic', 								
		'Naum'		=>'Naum', 		//'Книга пророка Наума',		
		'Наум'		=>'Naum', 							
		'Habak'		=>'Habak', 		//'Книга пророка Аввакума',		
		'Аввак'		=>'Habak', 							
		'Авв'			=>'Habak', 							
		'Ав'			=>'Habak', 							
		'Sofon'		=>'Sofon', 		//'Книга пророка Софонии',					
		'Софон'		=>'Sofon', 							
		'Соф'			=>'Sofon', 							
		'Hag'			=>'Hag', 		//'Книга пророка Аггея',					
		'Агг'			=>'Hag', 							
		'Аг'			=>'Hag', 							
		'Zah'			=>'Zah',			//'Книга пророка Захарии',						
		'Захар'		=>'Zah',								
		'Зах'			=>'Zah',								
		'Зхр'			=>'Zah',								
		'Mal'			=>'Mal',			//'Книга пророка Малахии',						
		'Малах'		=>'Mal',								
		'Мал'			=>'Mal',														
		// Новый Завет
		// Евангилие
		'Mt'			=>'Mt', 			//'Евангелие от Матфея',				
		'Мф'			=>'Mt', 						
		'Мт'			=>'Mt', 						
		'Матфея'		=>'Mt', 						
		'Матф'		=>'Mt', 						
		'Mk'			=>'Mk', 			//'Евангелие от Марка',			
		'Марка'		=>'Mk', 					
		'Марк'		=>'Mk', 					
		'Мар'			=>'Mk', 					
		'Мр'			=>'Mk', 					
		'Мк'			=>'Mk', 					
		'Lk'			=>'Lk',			//'Евангелие от Луки',			
		'Луки'		=>'Lk',						
		'Лук'			=>'Lk',						
		'Лк'			=>'Lk',						
		'Jn'			=>'Jn',			//'Евангелие от Иоанна',				
		'Иоанна'		=>'Jn',							
		'Иоан'		=>'Jn',							
		'Ин'			=>'Jn',							
		// Деяния и послания Апостолов
		'Act'			=>'Act', 		//'Деяния святых Апостолов',				
		'Деяния'		=>'Act', 						
		'Деян'		=>'Act', 						
		'Jac'			=>'Jac', 		//'Послание Иакова',						
		'Иакова'		=>'Jac', 								
		'Иаков'		=>'Jac', 								
		'Иак'			=>'Jac', 								
		'1Pet'		=>'1Pet',		//'Первое послание Петра', 			
		'1Петра'		=>'1Pet',					
		'1Петр'		=>'1Pet',					
		'1Пет'		=>'1Pet',					
		'2Pet'		=>'2Pet',		//'Второе послание Петра',			
		'2Петра'		=>'2Pet',					
		'2Петр'		=>'2Pet',					
		'2Пет'		=>'2Pet',					
		'1Jn'			=>'1Jn', 		//'Первое послание Иоанна'				
		'1Иоанна'	=>'1Jn', 						
		'1Иоан'		=>'1Jn', 						
		'1Ин'			=>'1Jn', 						
		'2Jn'			=>'2Jn', 		//'Второе послание Иоанна',				
		'2Иоанна'	=>'2Jn', 						
		'2Иоан'		=>'2Jn', 						
		'2Ин'			=>'2Jn', 						
		'3Jn'			=>'3Jn', 		//'Третье послание Иоанна',				
		'3Иоанна'	=>'3Jn', 						
		'3Иоан'		=>'3Jn', 						
		'3Ин'			=>'3Jn', 						
		'Juda'		=>'Juda', 		//'Послание Иуды',					
		'Иуды'		=>'Juda', 							
		'Иуда'		=>'Juda', 							
		'Иуд'			=>'Juda', 							
		// Послания апостола Павла
		'Rom'			=>'Rom', 		//'Послание апостола Павла к Римлянам',				
		'Римл'		=>'Rom', 						
		'Рим'			=>'Rom', 						
		'1Cor'		=>'1Cor', 		//'Первое послание апостола Павла к Коринфянам',					
		'1Кор'		=>'1Cor', 							
		'2Cor'		=>'2Cor',		//'Второе послание апостола Павла к Коринфянам',					
		'2Кор'		=>'2Cor',							
		'Gal'			=>'Gal', 		//'Послание апостола Павла к Галатам',						
		'Галат'		=>'Gal', 								
		'Гал'			=>'Gal', 								
		'Eph'			=>'Eph', 		//'Послание апостола Павла к Ефесянам'					
		'Ефесян'		=>'Eph', 							
		'Ефес'		=>'Eph', 							
		'Еф'			=>'Eph', 							
		'Phil'		=>'Phil',  		//'Послание апостола Павла к Филиппийцам',		
		'Филип'		=>'Phil',  				
		'Фил'			=>'Phil',  				
		'Флп'			=>'Phil',  				
		'Col'			=>'Col',			//'Послание апостола Павла к Колоссянам',						
		'Колос'		=>'Col',								
		'Кол'			=>'Col',								
		'1Thes'		=>'1Thes', 		//'Первое послание апостола Павла к Фессалоникийцам (Солунянам)',			
		'1Солун'		=>'1Thes', 					
		'1Сол'		=>'1Thes', 					
		'1Фес'		=>'1Thes', 					
		'2Thes'		=>'2Thes', 		//'Второе послание апостола Павла к Фессалоникийцам (Солунянам)',			
		'2Солун'		=>'2Thes', 					
		'2Сол'		=>'2Thes', 					
		'2Фес'		=>'2Thes', 					
		'1Tim'		=>'1Tim', 		//'Первое послание апостола Павла к Тимофею', 					
		'1Тимоф'		=>'1Tim', 							
		'1Тим'		=>'1Tim', 							
		'2Tim'		=>'2Tim',		//'Второе послание апостола Павла к Тимофею',					
		'2Тимоф'		=>'2Tim',							
		'2Тим'		=>'2Tim',							
		'Tit'			=>'Tit', 		//'Послание апостола Павла к Титу', 						
		'Титу'		=>'Tit', 								
		'Тита'		=>'Tit', 								
		'Тит'			=>'Tit', 								
		'Phlm'		=>'Phlm', 		//'Послание апостола Павла к Филимону', 				
		'Филим'		=>'Phlm', 						
		'Флм'			=>'Phlm', 						
		'Hebr'		=>'Hebr', 		//'Послание апостола Павла к Евреям',					
		'Евреям'		=>'Hebr', 							
		'Евр'			=>'Hebr', 							
		'Apok'		=>'Apok',		//'Откровение Иоанна Богослова (Апокалипсис)'				
		'Откр'		=>'Apok',					
		'Отк'			=>'Apok',					
		'Апок'		=>'Apok'
	);				


	$biblerefs_bookTitle = array(			// Полные названия Книг Священного Писания
		// Ветхий Завет
		// Пятикнижие Моисея
		'Gen' 		=>'Бытие', 
		'Ex' 			=>'Исход', 
		'Lev' 		=>'Левит', 
		'Num' 		=>'Числа', 
		'Deut' 		=>'Второзаконие',
		// «Пророки» (Невиим) 
		'Nav' 		=>'Книга Иисуса Навина',
		'Judg'		=>'Книга Судей Израилевых', 
		'Rth' 		=>'Книга Руфи',
		'1Sam' 		=>'Первая книга Царств', 
		'2Sam' 		=>'Вторая книга Царств', 
		'1King'	 	=>'Третья книга Царств', 
		'2King' 		=>'Четвёртая книга Царств',
		'1Chron' 	=>'Первая книга Паралипоменон', 
		'2Chron' 	=>'Вторая книга Паралипоменон', 
		'Ezr' 		=>'Первая книга Ездры', 
		'Nehem' 		=>'Книга Неемии', 
		'Est' 		=>'Есфирь',  
		// «Писания» (Ктувим)
		'Job' 		=>'Книга Иова',
		'Ps' 			=>'Псалтирь', 
		'Prov' 		=>'Притчи Соломона', 
		'Eccl' 		=>'Книга Екклезиаста, или Проповедника', 
		'Song' 		=>'Песнь песней Соломона',
		'Is' 			=>'Книга пророка Исайи', 
		'Jer' 		=>'Книга пророка Иеремии',
		'Lam' 		=>'Книга Плач Иеремии', 
		'Ezek'	 	=>'Книга пророка Иезекииля',
		'Dan' 		=>'Книга пророка Даниила', 
		// Двенадцать малых пророков 
		'Hos' 		=>'Книга пророка Осии', 
		'Joel'	 	=>'Книга пророка Иоиля',
		'Am' 			=>'Книга пророка Амоса', 
		'Avd' 		=>'Книга пророка Авдия', 
		'Jona' 		=>'Книга пророка Ионы',
		'Mic' 		=>'Книга пророка Михея', 
		'Naum' 		=>'Книга пророка Наума',
		'Habak' 		=>'Книга пророка Аввакума', 
		'Sofon' 		=>'Книга пророка Софонии', 
		'Hag' 		=>'Книга пророка Аггея', 
		'Zah' 		=>'Книга пророка Захарии',
		'Mal' 		=>'Книга пророка Малахии',
		// Новый Завет
		// Евангилие
		'Mt' 			=>'От Матфея святое благовествование',
		'Mk' 			=>'От Марка святое благовествование', 
		'Lk' 			=>'От Луки святое благовествование', 
		'Jn' 			=>'От Иоанна святое благовествование', 
		// Деяния и послания Апостолов
		'Act' 		=>'Деяния святых апостолов', 
		'Jac' 		=>'Послание Иакова', 
		'1Pet'	 	=>'Первое послание Петра', 
		'2Pet'	 	=>'Второе послание Петра',	
		'1Jn' 		=>'Первое послание Иоанна', 
		'2Jn' 		=>'Второе послание Иоанна', 
		'3Jn' 		=>'Третье послание Иоанна',
		'Juda'	 	=>'Послание Иуды', 
		// Послания апостола Павла
		'Rom' 		=>'Послание к Римлянам', 	
		'1Cor' 		=>'Первое послание к Коринфянам', 
		'2Cor' 		=>'Второе послание к Коринфянам',
		'Gal'	 		=>'Послание к Галатам', 
		'Eph' 		=>'Послание к Ефесянам', 
		'Phil' 		=>'Послание к Филиппийцам', 
		'Col' 		=>'Послание к Колоссянам',
		'1Thes' 		=>'Первое послание к Фессалоникийцам (Солунянам)',
		'2Thes' 		=>'Второе послание к Фессалоникийцам (Солунянам)',  
		'1Tim' 		=>'Первое послание к Тимофею', 
		'2Tim'	 	=>'Второе послание к Тимофею',
		'Tit' 		=>'Послание к Титу', 
		'Phlm'	 	=>'Послание к Филимону', 
		'Hebr'	 	=>'Послание к Евреям', 
		'Apok' 		=>'Откровение ап. Иоанна Богослова'
		);

	$biblerefs_shortTitle = array(		// Стандартные обозначение книг Священного Писания
		// Ветхий Завет
		// Пятикнижие Моисея															
		'Gen'			=>"Быт.", 
		'Ex'			=>"Исх.", 
		'Lev'			=>"Лев.",
		'Num'			=>"Чис.",
		'Deut'		=>"Втор.",
		// «Пророки» (Невиим) 
		'Nav'			=>"Нав.",
		'Judg'		=>"Суд.",
		'Rth'			=>"Руф.",
		'1Sam'		=>"1Цар.",
		'2Sam'		=>"2Цар.",
		'1King'		=>"3Цар.",
		'2King'		=>"4Цар.",
		'1Chron'		=>"1Пар.",
		'2Chron'		=>"2Пар.",
		'Ezr'			=>"1Езд.",
		'Nehem'		=>"Неем.",
		'Est'			=>"Есф.",
		// «Писания» (Ктувим)
		'Job'			=>"Иов.",
		'Ps'			=>"Пс.",
		'Prov'		=>"Прит.", 
		'Eccl'		=>"Еккл.",
		'Song'		=>"Песн.",
		'Is'			=>"Ис.",
		'Jer'			=>"Иер.",
		'Lam'			=>"Плч.",
		'Ezek'		=>"Иез.",
		'Dan'			=>"Дан.",	
		// Двенадцать малых пророков 
		'Hos'			=>"Ос.",
		'Joel'		=>"Иоил.",
		'Am'			=>"Ам.",
		'Avd'			=>"Авд.",
		'Jona'		=>"Ион.",
		'Mic'			=>"Мих.",
		'Naum'		=>"Наум.",
		'Habak'		=>"Авв.",
		'Sofon'		=>"Соф.",
		'Hag'			=>"Аг.",
		'Zah'			=>"Зах.",
		'Mal'			=>"Мал.",
		// Новый Завет
		// Евангилие
		'Mt'			=>"Мф.",
		'Mk'			=>"Мк.",
		'Lk'			=>"Лк.",
		'Jn'			=>"Ин.",
		// Деяния и послания Апостолов
		'Act'			=>"Деян.",
		'Jac'			=>"Иак.",
		'1Pet'		=>"1Пет.",
		'2Pet'		=>"2Пет.",
		'1Jn'			=>"1Ин.", 
		'2Jn'			=>"2Ин.",
		'3Jn'			=>"3Ин.",
		'Juda'		=>"Иуд.",
		// Послания апостола Павла
		'Rom'			=>"Рим.",
		'1Cor'		=>"1Кор.",
		'2Cor'		=>"2Кор.",
		'Gal'			=>"Гал.",
		'Eph'			=>"Еф.",
		'Phil'		=>"Флп.",
		'Col'			=>"Кол.",
		'1Thes'		=>"1Фес.",
		'2Thes'		=>"2Фес.",
		'1Tim'		=>"1Тим.",
		'2Tim'		=>"2Тим.",
		'Tit'			=>"Тит.",
		'Phlm'		=>"Флм.",
		'Hebr'		=>"Евр.",
		'Apok'		=>"Отк.");

	$biblerefs_bookFile = array(							// Таблица названий файлов книг
		// Ветхий Завет
		// Пятикнижие Моисея
		'Gen'	 		=>'nrt/gen',							//'Книга Бытия', 
		'Ex'	 		=>'nrt/ex',							//'Книга Исход', 
		'Lev'	 		=>'nrt/lev',							//'Книга Левит', 
		'Num'	 		=>'nrt/num',							//'Книга Числа', 
		'Deut'	 	=>'nrt/deu',							//'Второзаконие',
		// «Пророки» (Невиим) 
		'Nav'	 		=>'nrt/nav',							//'Книга Иисуса Навина',
		'Judg'		=>'nrt/sud',							//'Книга Судей Израилевых', 
		'Rth'	 		=>'nrt/ruf',							//'Книга Руфь',
		'1Sam'	 	=>'nrt/king1',							//'Первая книга Царств (Первая книга Самуила)', 
		'2Sam'	 	=>'nrt/king2',							//'Вторая книга Царств (Вторая книга Самуила)', 
		'1King' 		=>'nrt/king3',							//'Третья книга Царств (Первая книга Царей)', 
		'2King' 		=>'nrt/king4',							//'Четвёртая книга Царств (Вторая книга Царей)',
		'1Chron' 	=>'nrt/para1',							//'Первая книга Паралипоменон (Первая книга Хроник, Первая Летопись)', 
		'2Chron' 	=>'nrt/para2',							//'Вторая книга Паралипоменон (Вторая книга Хроник, Вторая Летопись)', 
		'Ezr'	 		=>'nrt/ezr1',							//'Книга Ездры (Первая книга Ездры)', 
		'Nehem' 		=>'nrt/nee',							//'Книга Неемии', 
		'Est'	 		=>'nrt/esf',							//'Книга Есфири',  
		// «Писания» (Ктувим)
		'Job'	 		=>'nrt/iov',							//'Книга Иова',
		'Ps' 			=>'nrt/ps',								//'Псалтирь', 
		'Prov'	 	=>'nrt/prov',							//'Книга Притчей Соломоновых', 
		'Eccl'	 	=>'nrt/eccl',							//'Книга Екклезиаста, или Проповедника', 
		'Song'	 	=>'nrt/song',							//'Песнь песней Соломона',
		'Is' 			=>'nrt/isa',							//'Книга пророка Исайи', 
		'Jer' 		=>'nrt/jer',							//'Книга пророка Иеремии',
		'Lam' 		=>'nrt/lam',							//'Книга Плач Иеремии', 
		'Ezek'	 	=>'nrt/eze',							//'Книга пророка Иезекииля',
		'Dan' 		=>'nrt/dan',							//'Книга пророка Даниила', 
		// Двенадцать малых пророков 
		'Hos' 		=>'nrt/hos',							//'Книга пророка Осии', 
		'Joel'	 	=>'nrt/joe',							//'Книга пророка Иоиля',
		'Am' 			=>'nrt/am',								//'Книга пророка Амоса', 
		'Avd' 		=>'nrt/avd',							//'Книга пророка Авдия', 
		'Jona'	 	=>'nrt/jona',							//'Книга пророка Ионы',
		'Mic' 		=>'nrt/mih',							//'Книга пророка Михея', 
		'Naum' 		=>'nrt/nau',							//'Книга пророка Наума',
		'Habak' 		=>'nrt/avv',							//'Книга пророка Аввакума', 
		'Sofon' 		=>'nrt/sof',							//'Книга пророка Софонии', 
		'Hag' 		=>'nrt/agg',							//'Книга пророка Аггея', 
		'Zah' 		=>'nrt/zah',							//'Книга пророка Захарии',
		'Mal' 		=>'nrt/mal',							//'Книга пророка Малахии',
		// Новый Завет
		// Евангилие
		'Mt' 			=>'nrt/mf',								//'Евангелие от Матфея',
		'Mk' 			=>'nrt/mk',								//'Евангелие от Марка', 
		'Lk' 			=>'nrt/lk',								//'Евангелие от Луки', 
		'Jn' 			=>'nrt/jn',								//'Евангелие от Иоанна', 
		// Деяния и послания Апостолов
		'Act' 		=>'nrt/act',							//'Деяния святых Апостолов', 
		'Jac'	 		=>'nrt/jak',							//'Послание Иакова', 
		'1Pet'	 	=>'nrt/pe1',							//'Первое послание Петра', 
		'2Pet'	 	=>'nrt/pe2',							//'Второе послание Петра',	
		'1Jn'	 		=>'nrt/jn1',							//'Первое послание Иоанна', 
		'2Jn'	 		=>'nrt/jn2',							//'Второе послание Иоанна', 
		'3Jn'	 		=>'nrt/jn3',							//'Третье послание Иоанна',
		'Juda'	 	=>'nrt/jud',							//'Послание Иуды', 
		// Послания апостола Павла
		'Rom' 		=>'nrt/rom',							//'Послание апостола Павла к Римлянам', 
		'1Cor'	 	=>'nrt/co1',							//'Первое послание апостола Павла к Коринфянам', 
		'2Cor'	 	=>'nrt/co2',							//'Второе послание апостола Павла к Коринфянам',
		'Gal' 		=>'nrt/gal',							//'Послание апостола Павла к Галатам', 
		'Eph' 		=>'nrt/eph',							//'Послание апостола Павла к Ефесянам', 
		'Phil'	 	=>'nrt/flp',							//'Послание апостола Павла к Филиппийцам', 
		'Col' 		=>'nrt/col',							//'Послание апостола Павла к Колоссянам',
		'1Thes' 		=>'nrt/fe1',							//'Первое послание апостола Павла к Фессалоникийцам (Солунянам)',
		'2Thes' 		=>'nrt/fe2',							//'Второе послание апостола Павла к Фессалоникийцам (Солунянам)',  
		'1Tim' 		=>'nrt/ti1',							//'Первое послание апостола Павла к Тимофею', 
		'2Tim' 		=>'nrt/ti2',							//'Второе послание апостола Павла к Тимофею',
		'Tit' 		=>'nrt/tit',							//'Послание апостола Павла к Титу', 
		'Phlm'	 	=>'nrt/flm',							//'Послание апостола Павла к Филимону', 
		'Hebr'	 	=>'nrt/heb',							//'Послание апостола Павла к Евреям', 
		'Apok'	 	=>'nrt/rev'								//'Откровение Иоанна Богослова (Апокалипсис)'
	);							
