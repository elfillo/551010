<?php get_header(); ?>
    <?php 
    $stati_children = new WP_Query(array(
        'post_type' => 'page',
        'post_parent' => get_the_ID()
        )
    );
    ?>
    <div class="container">
        <div class="container_page">
            <div class="side_nav">
                <?php wp_nav_menu(array('theme_location'=>'Service', 'menu_class'=>'side_nav_list') );?>
                <div class="side_nav__sale">
                    <img src="<?php echo get_template_directory_uri() ?>/img/maket.jpg" alt="Подарок">
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
            <div class="page_content page_nashi_raboty">
                <?php get_template_part('template_parts/breadcrumbs'); ?>
                <?php if($stati_children->have_posts()) : while($stati_children->have_posts()): $stati_children->the_post();?>
                        <h2><?php the_title()?></h2>
                        <p><?php the_excerpt()?></p>
                        <div class="work_img"><?php the_post_thumbnail()?></div>
                        <p><a href="<?php the_permalink()?>">Подробнее</a></p>
                <?php endwhile; endif; ?>
                <?php get_template_part('template_parts/partners'); ?>
                <?php echo do_shortcode('[contact-form-7 id="6" title="Главная форма"]')?>
            </div>
        </div>
    </div>
    <?php get_template_part('template_parts/photo_gallery'); ?>
<?php get_footer(); ?>