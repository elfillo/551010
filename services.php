<?php
	/*
	Template Name: Услуги
	*/
?>
<?php
	$id = $post->ID;
	$content = carbon_get_post_meta($post->ID, 'container');
	$draw = new \Constructor\Constructor($content);
    $lowLevelBuildLink = get_permalink(get_page_data('low-level-build'));
    $interiorDesignLink = get_permalink(get_page_data('interior-design'));
?>
<?php get_header(); ?>
<section class="section">
	<div class="container container_regular">
		<div class="title"></div>

		<div class="service-card-link-wrapper">

			<div class="service-card-link service-card-link--mono">
				<div class="icon" style='background: url("<?php get_uri("img/icons/service/build.png")?>")'></div>
				<div class="text">
					<div class="title">Малоэтажное строительство</div>
					<a href="<?php echo $lowLevelBuildLink?>" class="button button_yellow">Перейти</a>
				</div>
			</div>

			<div class="service-card-link service-card-link--mono">
				<div class="icon" style='background: url("<?php get_uri("img/icons/service/design.png")?>")'></div>
				<div class="text">
					<div class="title">Дизайн интерьера</div>
					<a href="<?php echo $interiorDesignLink?>" class="button button_yellow">Перейти</a>
				</div>
			</div>

			<div class="service-card-link">
				<div class="icon" style='background: url("<?php get_uri("img/icons/service/repair.png")?>")'></div>
				<div class="text">
					<div class="title">Ремонт и отделка</div>
					<div class="links">
						<?php wp_nav_menu(array('theme_location'=>'service-repair', 'menu_class'=>'', 'container_class' => '') );?>
					</div>
				</div>
			</div>

			<div class="service-card-link">
				<div class="icon" style='background: url("<?php get_uri("img/icons/service/san.png")?>")'></div>
				<div class="text">
					<div class="title">Сантехника</div>
					<div class="links">
						<?php wp_nav_menu(array('theme_location'=>'service-san', 'menu_class'=>'', 'container_class' => '') );?>
					</div>
				</div>
			</div>

			<div class="service-card-link service-card-link--mono">
				<div class="icon" style='background: url("<?php get_uri("img/icons/service/el.png")?>")'></div>
				<div class="text">
					<div class="title" style="word-break: break-word">Электромонтажные работы</div>
					<a href="/elektromontazhnye-raboty/" class="button button_yellow">Перейти</a>
				</div>
			</div>

		</div>

	</div>
</section>
<?php get_footer(); ?>


