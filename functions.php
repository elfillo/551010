<?php 
//styles
function enqueue_styles(){  
    wp_enqueue_style('main', get_template_directory_uri() .'/css/main.css', null, false);
    wp_enqueue_style('adaptive', get_template_directory_uri() .'/css/adaptive.css', null, false);
    wp_enqueue_style('swiper', get_template_directory_uri() .'/css/swiper.css', null, false);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
//scripts
function enqueue_script(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery-3.2.1.min.js', null, true);
    wp_enqueue_script('common_js', get_template_directory_uri() .'/js/common.js', array('jquery'), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() .'/js/swiper.min.js', array('jquery'), null, true);
    wp_enqueue_script('swiper_main', get_template_directory_uri() .'/js/swiper-main.js', array('jquery', 'swiper'), null, true);
    wp_enqueue_script('map', get_template_directory_uri() .'/js/map.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_script');
//header_menu
register_nav_menu('Header', 'HeaderMenu');
//foter
register_nav_menu('Footer', 'FooterMenu');
//mobile menu
register_nav_menu('Mobile', 'MobileMenu');
//service
register_nav_menu('Service', 'ServiceMenu');
//add thumbnails
add_theme_support( 'post-thumbnails' );


include 'parts/admin/helpers.php';
include 'parts/admin/custom_fields.php';

//shortcode 
add_shortcode( 'stages_of_work', 'stages_of_work_func' );
function stages_of_work_func(){
	return '<div class="icons_wrapper">
        <div class="icon">
            <div class="icon_img"><img src="'.get_template_directory_uri().'/img/icons/stages_of_work/1.png" alt="#"></div>
            <div class="icon_text">Вы звоните нам или оставляете заявку</div>
        </div>
        <div class="icon">
            <div class="icon_img"><img src="'.get_template_directory_uri().'/img/icons/stages_of_work/2.png" alt="#"></div>
            <div class="icon_text">Договариваемся о бесплатном выезде нашего специалиста в удобное для Вас время</div>
        </div>
        <div class="icon">
            <div class="icon_img"><img src="'.get_template_directory_uri().'/img/icons/stages_of_work/3.png" alt="#"></div>
            <div class="icon_text">Перед выездом наш мастер связывается с Вами, подтверждая встречу</div>
        </div>
        <div class="icon">
            <div class="icon_img"><img src="'.get_template_directory_uri().'/img/icons/stages_of_work/4.png" alt="#"></div>
            <div class="icon_text">Доставляем матералы</div>
        </div>
        <div class="icon">
            <div class="icon_img"><img src="'.get_template_directory_uri().'/img/icons/stages_of_work/5.png" alt="#"></div>
            <div class="icon_text">Согласовываются условия и подписывается договор</div>
        </div>
        <div class="icon">
            <div class="icon_img"><img src="'.get_template_directory_uri().'/img/icons/stages_of_work/6.png" alt="#"></div>
            <div class="icon_text">Составляется ориентировочная смета на работы и черновые материалы</div>
        </div>
        <div class="icon">
            <div class="icon_img"><img src="'.get_template_directory_uri().'/img/icons/stages_of_work/7.png" alt="#"></div>
            <div class="icon_text">Наши мастера выполняются работы</div>
        </div>
        <div class="icon">
            <div class="icon_img"><img src="'.get_template_directory_uri().'/img/icons/stages_of_work/8.png" alt="#"></div>
            <div class="icon_text">Вы оплачиваете работы поэтапно, по факту их выполнения</div>
        </div>
        <div class="icon">
            <div class="icon_img"><img src="'.get_template_directory_uri().'/img/icons/stages_of_work/9.png" alt="#"></div>
            <div class="icon_text">Ваш ремонт окончен качественно и в срок</div>
        </div>
    </div>';
 }
?>