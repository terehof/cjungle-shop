<!doctype html>
<html>
<head>
    <?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.2.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-scrolltofixed-min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.scrollUp.js"></script>

    <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css"/>

    <!-- Зависимости страницы shop.html -->
    <script src="<?=SITE_TEMPLATE_PATH?>/shop/js/slick.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/shop/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/shop/js/shop_script.js"></script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/shop/css/slick.css"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/shop/css/magnific-popup.css"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/shop/css/shop_style.css"/>
    <!-- //Зависимости страницы shop.html -->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrapper">
    <div class="main">
		<header id="header" class="scroll-to-fixed-fixed">
            <a class="logo" id="logo" href="#">
                <span class="image"></span>
<!--                <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/logo.png" alt=""/>-->
            </a>
            <a href="#" class="header-num">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "inctel",
						"COMPONENT_TEMPLATE" => ".default",
						"EDIT_TEMPLATE" => ""
					)
				);?>
				
			</a>
            <button class="download_btn header-order-btn" href="#header-order-form">Сделать заказ</button>
        </header>
        <div id="header-order-form" class="white-popup mfp-with-anim mfp-hide">
            <div class="order-form__row">
                <div class="order-form__row__col order-form__row__col_image form">
                    <div class="form">
                        <form method="post" action="" class="order-form-send">
                            <input name="name" style="height:28px" type="text" maxlength="30" placeholder="Имя*" pattern="[A-Za-zА-Яа-яЁё]{2,30}" required>
							<input name="phone" style="height:28px" type="text" maxlength="12" placeholder="Телефон*"  required>
							<input name="email" style="height:28px" type="text" maxlength="30" placeholder="E-mail*" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
							<textarea name="message" maxlength="500" maxlength="10" placeholder="Название модели и количество*"></textarea>
                            <button class="download_btn" type="submit" style="margin-bottom: 20px;">Отправить</button>
                        </form>
						
                    </div>
                </div>

            </div>
        </div>
		<div class="content shop">

        