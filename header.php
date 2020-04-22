<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icons/favikonochka.png" type="image/png">
    <title>551010</title>
    <?php wp_head(); ?>

    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = 'https://551010.ru/spasibo/';
        }, false );
    </script>
    <script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<!-- <div class="container"> -->
    <header class="header">
        <div class="container"> 
            <div class="header-top">
                <div class="logo_wrapper">
                    <div class="logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/logo_new.png" alt="Логотип">
                        </a>
                    </div>
                    <div class="info">
                        БЕСПЛАТНЫЙ <br>
                        <span class="modal_show">выезд замерщика</span>
                    </div>
                    <div class="info">
                        Режим работы:<br>
                        <span>Пн.-Вс. с 10:00 по 21:00</span>
                    </div>
                </div>
                <div class="phone">+7 (3952) <span>55-10-10</span></div>
            </div>
        </div>
        <nav class="header_nav">
            <div class="container"> 
            <?php wp_nav_menu(array('theme_location'=>'Header', 'menu_class'=>'header_nav_list') );?>  
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </div>
        </nav>
        <?php wp_nav_menu(array('theme_location'=>'Mobile', 'menu_class'=>'header_nav__mobile_list') );?>
        <div id="upstairs">              
        </div>
    </header>
<!-- </div> -->
<?php echo do_shortcode('[contact-form-7 id="334" title="Всплывающая форма"]')?>
