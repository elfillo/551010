<?php
	/*
	Template Name: Наши работы
	*/
?>
<?php
	$id = $post->ID;
	$content = carbon_get_post_meta($post->ID, 'container');
	$draw = new \Constructor\Constructor($content);
?>
<?php get_header(); ?>
<?php
	$portfolio = get_posts([
		'numberposts' => -1,
		'post_status' => 'publish',
		'post_type' => 'page',
		'post_parent' => '16'
	]);
?>
<section class="section">
	<div class="container container_regular">
		<div class="list-cards">
			<div class="list-cards__title title">Наши работы</div>
			<div class="list-cards__list">
				<?php foreach ($portfolio as $item):?>
					<div class="card card-portfolio oneHeight">
						<div class="card__img card__img-big"><?php echo get_the_post_thumbnail($item)?></div>
						<div class="card__title"><?php echo $item->post_title?></div>
						<div class="card__sub-title"><?php echo carbon_get_post_meta($item->ID, 'repair-report')?></div>
                        <div class="card__title"><?php echo carbon_get_post_meta($item->ID, 'repair-price')?></div>
						<a href="<?php echo get_permalink($item)?>" class="card__button button button_yellow">Подробнее</a>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</section>
<?php $draw->page();?>
<?php get_footer(); ?>


