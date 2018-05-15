<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</div>
</div>
</div>
</div>

<div class="clb"></div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "horizontal_multilevel",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "section",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_THEME" => "site",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>
            </div>
            <div class="col-lg-3">
                Колонка 2
            </div>
            <div class="col-lg-3">
                Колонка 3
            </div>
            <div class="col-lg-3">
                Колонка 4
            </div>
        </div>
    </div>
</div>

</body>
</html>