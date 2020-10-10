<?php
	$reviews = get_posts([
		'numberposts' => -1,
		'post_status' => 'publish',
		'post_type' => 'review',
	]);
?>
<div class="swiper-container review-slider">
	<div class="swiper-wrapper">
		<?php foreach ($reviews as $review):?>
			<?php
				$content = carbon_get_post_meta($review->ID, 'review-body');
				$name = carbon_get_post_meta($review->ID, 'review-name');
				$date = carbon_get_post_meta($review->ID, 'review-date');
			?>
			<div class="swiper-slide">
				<div class="quote">
					<div class="quote__dash"></div>
					<div class="quote__content oneHeight"><?php echo $content?></div>
					<div class="quote__dash"></div>
					<div class="quote__author">
						<span><?php echo $name?></span>, <?php echo $date?>
					</div>
				</div>
			</div>
		<?php endforeach;?>
	</div>
	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
</div>

