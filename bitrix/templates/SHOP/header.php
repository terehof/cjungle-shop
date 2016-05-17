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
            <a class="logo" id="logo" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""/></a>
            <a href="tel:+79025253440" class="header-num">+7 (902) 525-34-40</a>
            <button class="download_btn header-order-btn" href="#header-order-form">Сделать заказ</button>
        </header>
        <div id="header-order-form" class="white-popup mfp-with-anim mfp-hide">
            <div class="order-form__row">
                <div class="order-form__row__col order-form__row__col_image form">
                    <div class="form">
                        <form id="order-form-send">
                            <input style="height:28px; margin-top: 30px;" type="text" maxlength="30" placeholder="Имя*" pattern="[A-Za-zА-Яа-яЁё]{2,30}" required>
                            <input style="height:28px" type="text" maxlength="12" placeholder="Телефон* ( +70000000000 )" pattern="^\+[0-9]{11}" required>
                            <input style="height:28px" type="text" maxlength="30" placeholder="E-mail*" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            <textarea maxlength="500" maxlength="10" placeholder="Название моделаи и количество*"></textarea>
                            <button class="download_btn" type="submit" style="margin-bottom: 20px;">Отправить</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
		<div class="content shop">

        