<? include "engine/backend.php" ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>Бар-ресторан «Кружка»</title>

        <!--      

                        __/\ \__/\ \         /\_ \                            
             __  __  __/\_\ \ ,_\ \ \___     \//\ \     ___   __  __     __   
            /\ \/\ \/\ \/\ \ \ \/\ \  _ `\     \ \ \   / __`\/\ \/\ \  /'__`\ 
            \ \ \_/ \_/ \ \ \ \ \_\ \ \ \ \     \_\ \_/\ \L\ \ \ \_/ |/\  __/ 
             \ \___x___/'\ \_\ \__\\ \_\ \_\    /\____\ \____/\ \___/ \ \____\
              \/__//__/   \/_/\/__/ \/_/\/_/    \/____/\/___/  \/__/   \/____/

              im@andreystarkov.ru

        -->

        <meta charset="utf-8">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/loader.css">
        <link rel="stylesheet" href="css/root.css">
        <link rel="stylesheet" href="css/iview.css" media="screen" />
        <link rel="stylesheet" href="css/ac.css" media="screen" />
        <link rel="stylesheet" href="css/tooltipster.css" media="screen" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nanoscroller.css"> 
		
		<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=oc2aCjzZ_p7qgdfNc3EwJD9JG38dEiHC&width=980&height=400&id=ymap-main"></script>
    
        <link type='text/css' href='css/modal.css' rel='stylesheet' media='screen' />

        <!-- IE6 "fix" for the close png image -->
        <!--[if lt IE 7]>
        <link type='text/css' href='css/modal_ie.css' rel='stylesheet' media='screen' />
        <![endif]-->

        <!--[if IE 7]>
          <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
        <![endif]-->       

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">
                Вы используете <strong>устаревший</strong> браузер. Пожалуйста, <a href="http://browsehappy.com/">установите один из современных браузеров</a>.
                Советую установить <a href="http://www.google.com/intl/ru/chrome/browser/">Google Chrome</a>. Гарантирую, вы получите истинное удовольствие 
                от работы с передовыми веб-технологиями.
            </p>
        <![endif]-->

        <div class="workspace">
			<div class="nav-header">
                <div class="nav-panel">
                    <a href="index.php" class="to-main tooltip-top" title="Перейти на главную страницу"></a>
					
                    <div class="bell">
                        <div class="base"></div>
                        <div class="ding-dong"></div>
                    </div>

	<div class="nav-menu">
	
		<a href="int.php" class="int<?if(strstr($_SERVER['REQUEST_URI'], "int.php") ){ ?> active"<? } else { ?> tooltip-bottom" 
		title="Обзор зала ресторана на 360 градусов"<? } ?>>Интерьер ресторана</a>
		
		<div class="div d5"></div>
		
		<a href="menu.php" class="int<?if(strstr($_SERVER['REQUEST_URI'], "menu.php") ){ ?> active"<? } else { ?> tooltip-bottom" 
		title="В меню ресторана &mdash; лучшие сорта светлого и<br> темного пива и уникальные закуски."<? } ?>>Меню</a>
		
		<div class="div d6"></div>
		
		<a href="banket.php" class="int<?if(strstr($_SERVER['REQUEST_URI'], "banket.php") ){ ?> active"<? } else { ?> tooltip-bottom" 
		title="Наш просторный и уютный банкетный зал<br> ждет Вас и Ваших гостей."<? } ?>>Банкетный зал</a>
	
	</div>
					
					<div class="address">
					<a href="#" class="btn-map tooltip-bottom" title="Посмотреть карту проезда">ул. Чичерина 20</a>
					</div>
                </div>
			</div>