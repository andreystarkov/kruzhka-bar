<? include "engine/template/header.php" ?>

 	<div id="iview">    

        <div data-iview:image="images/slides/1.jpg">
           <div class="iview-caption caption1" data-x="40" data-y="260" 
            data-speed="600" data-transition="wipeTop">Добро пожаловать</div>
                
            <div class="iview-caption caption1" data-x="40" data-y="330" 
            data-speed="600" data-transition="wipeTop">на сайт ресторана «Кружка»</div>
        </div>

        <div data-iview:image="images/slides/3.jpg">
	          <div class="iview-caption caption2" data-x="40" data-y="260" 
            data-speed="600" data-transition="wipeBottom">Вы можете ознакомится с панорамой<br>
			ресторана в разделе <a href="int.php">«Интерьер»</a>.</div>

		</div>

        <div data-iview:image="images/b-slides/2.jpg">
		    <div class="iview-caption caption" data-x="40" data-y="170" 
            data-speed="600" data-transition="fade">Планируете торжество?</div>
			
	          <div class="iview-caption caption" data-x="40" data-y="245" 
            data-speed="600" data-transition="wipeBottom" style="font-size: 24px"> Hаш <a href="int.php">банкетный зал</a> к Вашим услугам!</div>

		</div>
    </div>

    <div id="content-main" class="content-block">   
    	<p>Ресторан «Кружка» &mdash; это уютная  обстановка, превосходное пиво и конечно же 
		изумительная кухня, которые не оставят Вас равнодушными. Фирменные блюда 
		удивят своим изысканным вкусом и оригинальной рецептурой приготовления.</p>

    	<p>Наш ресторан прекрасно подходит, как для деловых обедов с партнерами, 
		проведения корпоративных вечеринок, банкетов, свадеб, так и просто приятному 
		времяпрепровождению в кругу близких друзей.</p>  

	<!--	<div class="button-group">
			<div class="button">Карта проезда <i class="icon-search button-icon"></i></div>
			<div class="button" style="width: 250px;">Контактная информация <i class="icon-phone-sign button-icon"></i></div>
		</div> -->

		<div class="button-group">
			<div class="link-container"><a id="btn-map" href="#">Карта проезда</a> <i class="icon-search"></i></div>
			<div class="link-container"><a href="#map">Контактная информация</a> <i class="icon-phone"></i></div>
			<div class="link-container"><a id="btn-int" href="#map">Расположение столов</a> <i class="icon-sitemap"></i></div>
		</div>

		<div class="barrel"></div>

    </div>

<? include "engine/template/footer.php" ?>