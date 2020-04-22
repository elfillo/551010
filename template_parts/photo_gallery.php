<?php
$stati_children = new WP_Query(array(
    'post_type' => 'page',
    'post_parent' => '16'
    )
);
?>

<div class="photo_gallery">
    <div class="photo_gallery__title">Фотогалерея наших работ</div>

    <div class="photo_gallery__items">
            <div class="swiper-container photo_gallery_container">
                <div class="swiper-wrapper">
                    <?php if($stati_children->have_posts()):while($stati_children->have_posts()): $stati_children->the_post();?>
                    <div class="swiper-slide">
                            <div class="photo_gallery__item">
                                <div class="item_img">
                                    <a href="<?php the_permalink()?>">
                                        <?php the_post_thumbnail(array()); ?>
                                    </a>
                                </div>
                                <div class="item_place"><?php the_title();?></div>
                                <a href="<?php the_permalink()?>">
                                    <div class="item_detail">
                                        смотреть ремонт
                                    </div>
                                </a>
                                <!-- <div class="item_area">Площадь: 72 м. кв.</div> -->
                            </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>   
            </div>                   
    </div>
</div>