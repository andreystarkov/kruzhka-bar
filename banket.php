<? include "engine/template/header.php" ?>

<style>

    .box-holder {
        width: 1140px;
        height: 470px;
        position: relative;
        margin: 0 auto;
    }

    .box-holder .controls {

        position: absolute;
        z-index: 6666;
        right: 10px;
        top: 25px;
        width: 315px;

        height: 45px;
        float: left;
    }

    .controls .bt {
        font-size: 18px;
        float: left;
        margin-left: 10px; border-radius: 5px;  padding: 8px 14px;  position: relative;
        text-decoration: none;
        color: #33302c; cursor: pointer;
        box-shadow: inset 0 0 12px rgba(73,64,55,0.4), 0 2px 0 rgba(73,64,55,0.3);
         background:rgba(217, 203, 176, 0.7);
    }

    .controls i { margin-right: 5px; text-shadow: 0 0 3px rgba(0,0,0,0.3); }

    .box-view {
        display: none;
    }

</style>

<script>
</script>
    <div class="box-holder">

            <div class="controls">
                <div class="bt tooltip" title="Переключиться на круговую<br>панораму банкетного зала." id="btn-pan"><i class="icon-film"></i> Панорама</div>
                <div class="bt tooltip" title="Рассмотреть детали интерьера<br>в виде фотогалереи." id="btn-view"><i class="icon-camera-retro"></i> Фотографии</div>
            </div>

            <div class="box-pan">
            <div id="pan">
                <img src="images/pan-banket-lighter.jpg" class="panorama" width="6675" height="465" />
            </div>
            </div>

            <div class="box-view">
                <div id="iview">

                    <div data-iview:image="images/b-slides/1.jpg">


                    </div>

                    <div data-iview:image="images/b-slides/2.jpg">

                       <div class="iview-caption caption" data-x="50" data-y="50"
                        data-speed="600" data-transition="wipeBottom">Свадьбы</div>

                        <div class="iview-caption caption" data-x="205" data-y="50"
                        data-speed="600" data-transition="wipeTop">Банкеты</div>

                        <div class="iview-caption caption" data-x="90" data-y="120"
                        data-speed="600" data-transition="wipeTop">Корпоративы</div>

                        <div class="iview-caption caption" data-x="120" data-y="190"
                        data-speed="600" data-transition="wipeTop">110 мест</div>
                    </div>

                    <div data-iview:image="images/b-slides/3.jpg">

                       <div class="iview-caption caption" data-x="50" data-y="60"
                        data-speed="600" data-transition="wipeBottom">Банкетный зал</div>

                        <div class="iview-caption caption" data-x="50" data-y="140"
                        data-speed="600" data-transition="wipeTop">улица Чичерина 20</div>


                    </div>

                    <div data-iview:image="images/b-slides/4.jpg">


                       <div class="iview-caption caption" data-x="50" data-y="50"
                        data-speed="600" data-transition="wipeBottom">Свадьбы</div>

                        <div class="iview-caption caption" data-x="205" data-y="50"
                        data-speed="600" data-transition="wipeTop">Банкеты</div>

                        <div class="iview-caption caption" data-x="90" data-y="120"
                        data-speed="600" data-transition="wipeTop">Корпоративы</div>

                        <div class="iview-caption caption" data-x="120" data-y="190"
                        data-speed="600" data-transition="wipeTop">110 мест</div>

                    </div>


                    <div data-iview:image="images/b-slides/5.jpg"></div>
                    <div data-iview:image="images/b-slides/6.jpg"></div>
                    <div data-iview:image="images/b-slides/7.jpg"></div>
                </div>
            </div>
        </div>
                <div id="content-main" class="content-block" style="height: 210px">
                    <p>Опыт и профессионализм сотрудников нашей банкетной службы, помогут Вам спланировать торжество, и осуществить все Ваши идеи.
                        Мы гарантируем высокий уровень обслуживания, в сочетании с изобилием на Ваших столах.</p>

                    <p>Банкетный зал расположен по соседству с рестораном «Кружка».</p>

                    <div class="button-group">
                        <div class="link-container"><a class="btn-map-b" href="#">Карта проезда</a> <i class="icon-search"></i></div>

                    </div>

                </div>

<? include "engine/template/footer.php" ?>