<?php
	/*
	 * Выводит галлереи на основе обложек постов "Наши работы"
	 * */
	$project_gallery  = get_posts([
		'numberposts' => -1,
		'post_status' => 'publish',
		'post_type' => 'page',
		'post_parent' => '16'
	]);

	$link = get_permalink(get_page_data('portfolio'));
?>
<div class="project-gallery">
	<div class="project-gallery__title title">Фотогалерея наших работ:</div>
	<div class="project-gallery__content">
		<div class="swiper-container project-gallery__list">
			<div class="swiper-wrapper">
				<?php foreach ($project_gallery as $photo):?>
					<div class="swiper-slide">
						<div class="project-gallery__item">
							<div class="project-gallery__img">
								<a href="<?php echo get_permalink($photo)?>"><?php echo get_the_post_thumbnail($photo)?></a>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<a href="<?php echo $link?>" class="project-gallery__button button button_yellow">Перейти в галерею</a>
</div>
