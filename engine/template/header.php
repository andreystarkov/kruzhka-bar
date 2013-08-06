<? include "engine/backend.php" ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>Бар-ресторан «Кружка»</title>

        <!--

                              /\ \
             __  __  __     __\ \ \____    ____    ___     __     _____      __    ____
            /\ \/\ \/\ \  /'__`\ \ '__`\  /',__\  /'___\ /'__`\  /\ '__`\  /'__`\ /',__\
            \ \ \_/ \_/ \/\  __/\ \ \L\ \/\__, `\/\ \__//\ \L\.\_\ \ \L\ \/\  __//\__, `\
             \ \___x___/'\ \____\\ \_,__/\/\____/\ \____\ \__/.\_\\ \ ,__/\ \____\/\____/
              \/__//__/   \/____/ \/___/  \/___/  \/____/\/__/\/_/ \ \ \/  \/____/\/___/
                                                                    \ \_\
              im@andreystarkov.ru
              webscapes.ru
        -->

        <meta charset="utf-8">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/loader.css">
        <link rel="stylesheet" href="css/root.css">
        <link rel="stylesheet" href="css/iview.css" media="screen" />
        <link rel="stylesheet" href="css/ac.css" media="screen" />
        <link rel="stylesheet" href="css/tooltipster.css" media="screen" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nanoscroller.css">

        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/jquery-migrate-1.1.1.min.js"></script>

	    <script src="js/libs.pack.js"></script>
        <script src="js/panorama.js"></script>
        <script src="js/nano.js"></script>
        <script src="js/buzz.js"></script>
        <script src="js/ac.js"></script>
        <script src="js/transit.js"></script>
        <script src="js/modal.js"></script>
        <script src="js/textshadow.js"></script>
        <script src="js/tooltipster.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/engine.js"></script>
        <script src="js/loader.js"></script>
        <script src="js/init.js"></script>

		<script type="text/javascript" charset="utf-8" src="http://api-maps.yandex.ru/services/constructor/1.0/js/?sid=oc2aCjzZ_p7qgdfNc3EwJD9JG38dEiHC&amp;width=980&amp;height=400&amp;id=ymap-main"></script>

        <script type="text/javascript" charset="utf-8"
        src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=3nrYKqc70ZCZNMeW6duZT99BMMafl4yc&amp;width=980&amp;height=400&amp;id=ymap-main-b"></script>

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
                    		title="Панорамный обзор интерьера ресторана."<? } ?>>Интерьер ресторана</a>

                    		<div class="div d5"></div>

                    		<a href="menu.php" class="int<?if(strstr($_SERVER['REQUEST_URI'], "menu.php") ){ ?> active"<? } else { ?> tooltip-bottom"
                    		title="В меню ресторана &mdash; лучшие сорта светлого и<br> темного пива и уникальные закуски."<? } ?>>Меню</a>

                    		<div class="div d6"></div>

                    		<a href="banket.php" class="int<?if(strstr($_SERVER['REQUEST_URI'], "banket.php") ){ ?> active"<? } else { ?> tooltip-bottom"
                    		title="Расположенный по соседству с рестораном,<br> уютный и просторный банкетный зал<br> ждет Вас и Ваших гостей."<? } ?>>Банкетный зал</a>

                    	</div>

					<div class="address">
					<a href="#" class="btn-map tooltip-bottom" title="Посмотреть карту проезда">ул. Чичерина 20</a>
					</div>
                </div>
			</div>