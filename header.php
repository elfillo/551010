<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icons/favikonochka.png" type="image/png">
    <title>551010</title>
	<?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container container_regular">
        <div class="header-top">
            <a href="/" class="logo"></a>
            <div class="call-back-wrapper">
                <a href="tel:+73952551010" class="phone">+7(3952) 55-10-10</a>
                <div class="button call-back-modal" data-title="Для заказа сметы - заполните поля">Заказать смету проекта</div>
            </div>
        </div>
    </div>
    <nav class="header_nav header_nav--design">
        <div class="container container_regular">
			<?php wp_nav_menu(array('theme_location'=>'Header', 'menu_class'=>'header_nav_list') );?>
        </div>
    </nav>
    <div class="mobile-menu">
	    <?php wp_nav_menu(array('theme_location'=>'Mobile') );?>
        <div class="burger"><span></span><span></span><span></span></div>
    </div>
    <div id="upstairs">
    </div>
</header>
<?php echo do_shortcode('[contact-form-7 id="334" title="Всплывающая форма"]')?>
<?php include 'template_parts/modal/call-back.php'?>