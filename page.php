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
            <div class="page_content">
                <?php get_template_part('template_parts/breadcrumbs'); ?>
                <?php
                    if ( have_posts() ){
                        while ( have_posts() ){ the_post();
                            echo the_content();
                        }
                    } else {
                        echo wpautop( 'Постов для вывода не найдено.' );
                    }
                ?>
                <?php get_template_part('template_parts/partners'); ?>
                <?php echo do_shortcode('[contact-form-7 id="6" title="Главная форма"]')?>
            </div>
        </div>
    </div>
    <?php get_template_part('template_parts/photo_gallery'); ?>
<?php get_footer(); ?>