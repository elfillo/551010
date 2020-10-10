<?php
	$partners = carbon_get_theme_option('partner-list');
?>
<div class="partners">
	<div class="partners__title title">Магазины-партнёры</div>
	<div class="partners__content">
		<div class="swiper-container partners__list">
			<div class="swiper-wrapper">
				<?php foreach ($partners as $partner):?>
					<div class="swiper-slide">
						<div class="partners__item"><img src="<?php echo wp_get_attachment_url($partner)?>" alt="#"></div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>
