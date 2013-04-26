<? include "engine/template/header.php" ?>

    <style>
        a.mnu { border-bottom: 2px dotted rgba(255,255,255,0.6) !important; }
    </style>

    <div class="content-block menu-block">   

        <ul class="tabs">
            <li><a href="#beer">Пиво</a></li>
            <li><a href="#salat">Алкогольные напитки</a></li>
            <li><a href="#hot-z">Горячие закуски</a></li>
            <li><a href="#z_cold">Холодные закуски</a></li>
            <li><a href="#hot">Горячие блюда</a></li>
            <li><a href="#pasta">Десерты</a></li>  
            <li><a href="#garnir">Безалкогольные напитки </a></li>
            <li><a href="#sous">Кальяны</a></li>                                       
        </ul>

        <div class="tab_container">
            <div class="tab_content nano" id="z_cold">
                <div class="content">
                    <? get_menu("all"); ?> 
                </div>
            </div>
        </div> 
    </div>

<? include "engine/template/footer.php" ?>