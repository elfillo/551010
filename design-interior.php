<?php
	/*
	Template Name: Дизайн интерьера
	*/
?>
<?php
    $first_slider = carbon_get_post_meta($post->ID, 'di-first_slider');
    $benefits_title = carbon_get_post_meta($post->ID, 'di_benefits--title');
    $benefits_subTitle = carbon_get_post_meta($post->ID, 'di_benefits--sub_title');
    $benefits_list = carbon_get_post_meta($post->ID, 'di_benefits');
	$steps_title = carbon_get_post_meta($post->ID, 'di_steps--title');
	$steps_list = carbon_get_post_meta($post->ID, 'di_steps');

	$partners = carbon_get_post_meta($post->ID, 'di_partners--gallery');
	$gallery = carbon_get_post_meta($post->ID, 'di_gallery');
	$sale_banner = carbon_get_post_meta($post->ID, 'di_sale_banner');
?>
<?php get_header('design')?>
	<div class="container design-interior">
		<section class="first-slider">
            <!-- Swiper -->
            <div class="swiper-container design-interior--first">
                <div class="swiper-wrapper">
                    <?php foreach ($first_slider as $item):?>
                    <div class="swiper-slide">
                        <div class="item">
                            <div class="box box_img"><img src="<?php echo $item['di-first_slider_list--img']?>" alt="#"></div>
                            <div class="box box_text">
                                <div class="title"><?php echo $item['di-first_slider_list--desc']?></div>
                                <div class="btn modal_show"><div class="button">Заказать</div></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; unset($first_slider, $item)?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next design-interior--first-ar design-interior--first-ar_next"></div>
                <div class="swiper-button-prev design-interior--first-ar design-interior--first-ar_prev"></div>
            </div>
        </section>
        <section class="double-text">
            <div class="content">
                <div class="box">Малоэтажного строительство в Иркутске создает доступную и комфортную альтернативу для привычных стесненных условий проживания в многоквартирных домах мегаполиса. Малоэтажные здания создают свободу и пространство для своей жизни, обеспечивая несомненные преимущества и для романтиков, и для полностью рациональных людей.</div>
                <div class="separator"></div>
                <div class="box">Малоэтажное строительство – объединяет комплекс услуг по строительству и обустройству отдельных домов и коттеджей, предусмотрев весь набор необходимых коммуникаций, которые стали нам приВычны в обычной квартире. Всё чаще дома оборудуются приВычной городской инфраструктурой, чтобы предусмотреть всё необходимое для проживания и комфорта.</div>
            </div>
        </section>
        <section class="banner-with-btn">
            <div class="title">Наша компания предлагает все виды ремонта квартир в рассрочку без переплат!</div>
            <div class="text">Возможен подбор всех видов строительных материалов, как для черновой, так и для чистовой отделки, а также сантехнические, электромонтажные, отделочные материалы, санфаянс и многое другое.</div>
            <div class="btn modal_show"><div class="button">Заказать</div></div>
        </section>
        <section class="benefits">
            <div class="title"><?php echo $benefits_title?></div>
            <div class="sub_title"><?php echo $benefits_subTitle?></div>
            <div class="list">
                <?php foreach ($benefits_list as $item):?>
                <div class="item">
                    <div class="icon"><img src="<?php echo $item['di_benefits-list--img']?>" alt="#"></div>
                    <div class="text"><?php echo $item['di_benefits-list--desc']?></div>
                </div>
                <?php endforeach;?>
            </div>
        </section>
        <section class="steps">
            <div class="title"><?php echo $steps_title?></div>
            <!-- Swiper -->
            <div class="swiper-container design-interior--steps">
                <div class="swiper-wrapper">
					<?php foreach ($steps_list as $item):?>
                      <div class="swiper-slide">
                          <div class="item oneHeight">
                              <div class="icon"><div class="img"><img src="<?php echo $item['di_steps-list--img']?>" alt="#"></div></div>
                              <div class="title"><?php echo $item['di_steps-list--title']?></div>
                              <div class="text"><?php echo $item['di_steps-list--desc']?></div>
                              <div class="other time">
                                  <?php echo $item['di_steps-list--time'] != '' ? 'Время: '.$item['di_steps-list--time'] : ''?>
                              </div>
                              <div class="other price">
	                              <?php echo $item['di_steps-list--time'] != '' ? 'Цена: '.$item['di_steps-list--price'] : ''?>
                              </div>
                          </div>
                      </div>
					<?php endforeach; unset($steps_list, $item)?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next design-interior--steps-ar design-interior--steps-ar_next"></div>
                <div class="swiper-button-prev design-interior--steps-ar design-interior--steps-ar_prev"></div>
            </div>
        </section>
        <section class="banner-with-btn">
            <div class="icon"><img src="<?php get_uri('img/house@1X.png')?>" alt="#"></div>
            <div class="title">Мы поможем воплотить Ваш проект в жизнь!</div>
            <div class="text">Основное преимущество в работе с нашими специалистами – гарантия индивидуального, внимательного отношения к каждому заказчику и проекту. При этом стоимость услуг мы не индексировали – остается на прежнем уровне. Уже сейчас мы готовы ответить на возникшие вопросы и согласовать детали сотрудничества для уверенности в оптимальном проекте, соответствующем индивидуальным требованиям заказчика</div>
            <div class="btn modal_show"><div class="button">Заказать</div></div>
        </section>
        <section class="double-text">
            <div class="title">Наша компания предлагает все виды ремонта квартир в рассрочку без переплат!</div>
            <div class="content">
                <div class="box">Малоэтажного строительство в Иркутске создает доступную и комфортную альтернативу для привычных стесненных условий проживания в многоквартирных домах мегаполиса. Малоэтажные здания создают свободу и пространство для своей жизни, обеспечивая несомненные преимущества и для романтиков, и для полностью рациональных людей.</div>
                <div class="separator"></div>
                <div class="box"><div class="img"><img src="<?php get_uri('img/double_text_img.png')?>" alt="#"></div></div>
            </div>
        </section>
        <section class="partners">
            <div class="title">Магазины-партнеры</div>
            <div class="list">
                <?php foreach ($partners as $partner):?>
                    <?php $img = wp_get_attachment_url($partner)?>
                    <div class="item"><img src="<?php echo $img?>" alt="#"></div>
                <?php endforeach;?>
            </div>
        </section>
        <section class="sale_banner">
            <img src="<?php echo $sale_banner?>" alt="#">
        </section>
        <section class="form">
            <?php echo do_shortcode('[contact-form-7 id="575" title="Дизайн интерьера"]')?>
            <div class="btn"><div class="button show_form">Далее</div></div>
        </section>
	</div>
    <div class="design-interior">
        <section class="gallery">
            <div class="title">Фотогалерея наших работ:</div>
            <?php echo apply_filters('the_content', $post->post_content)?>
        </section>
    </div>
    <script>
        $('.show_form').click(function () {
            $btn = $('.show_form');
            let btn_text = $btn.text();

            btn_text === 'Далее' ? $btn.text('Назад') : $btn.text('Далее');

            $('.select_block').toggle('hide');
            $('.form_block').toggle('hide');
        });
    </script>
<?php get_footer()?>