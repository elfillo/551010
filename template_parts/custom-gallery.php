<div class="custom-gallery">
		<?php foreach ($data['block-custom-gallery--content'] as $item):?>
			<div class="item"><img src="<?php echo wp_get_attachment_url($item)?>" alt="#"></div>
		<?php endforeach;?>
</div>