<?php 
/*
Template Name: Шаблон спасибо
*/
?>
<?php get_header(); ?>
    <div class="container">
        <?php get_template_part('template_parts/causes_min'); ?>
        <div class="container_page">
            <div class="side_nav">
                <?php wp_nav_menu(array('theme_location'=>'Service', 'menu_class'=>'side_nav_list') );?>
                <div class="advertising">
                    <div class="side_nav__sale modal_show">
                        <img src="<?php echo get_template_directory_uri() ?>/img/maket_new_1.jpg" alt="Подарок">
                    </div>
                    <div class="side_nav__consultation">
                        <span>
                            Бесплатная консультация
                        </span>
                        <span>
                            <a href="tel:+73952551010">+7 (3952) 55-10-10</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="page_content thanks_block">
                <?php get_template_part('template_parts/breadcrumbs'); ?>
                <?php
                    // if ( have_posts() ){
                    //     while ( have_posts() ){ the_post();
                    //         echo the_content();
                    //     }
                    // } else {
                    //     echo wpautop( 'Постов для вывода не найдено.' );
                    // }
                ?>
            <h3>Спасибо за Ваше сообщение, мы свяжемся с Вами в ближайшее время</h3>
            <a class="a__thanks" href="/" style="color: #b51529">Вернуться на главную</a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>