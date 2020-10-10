<?php
	$cards = $data['block-list-with-blocks'];
?>
<div class="list-cards__list">
	<?php foreach ($cards as $card):?>
		<?php
			$img      = $card['block-list-with-blocks-image'];
			$imgType  = $card['block-list-with-blocks-image-type'];
			$title    = $card['block-list-with-blocks--title'];
			$subtitle = $card['block-list-with-blocks--subtitle'];
			$prices   = $card['block-list-with-blocks--price'];
			$priceKey = 'block-list-with-blocks--price-item';

			$btnText  = $card['block-list-with-blocks--btn_text'];
			$btnType  = $card['block-list-with-blocks--btn_select'];
			$btnLink  = $card['block-list-with-blocks--btn_link'];

		?>
		<div class="card">
			<div class="card__img <?php echo $imgType === 'icon' ? 'card__img_whyWe' : 'card__img-big'?>">
                <img src="<?php echo $img?>" alt="<?php echo $title?>">
            </div>
			<div class="card__title"><?php echo $title?></div>
			<div class="card__sub-title"><?php echo $subtitle?></div>
			<?php foreach ($prices as $price):?>
				<div class="card__title"><?php echo $price[$priceKey]?></div>
			<?php endforeach;?>
            <?php if(!empty($btnText)):?>
			<a href="<?php echo $btnLink?>" class="card__button button button_yellow"><?php echo $btnText?></a>
            <?php endif;?>
		</div>
	<?php endforeach;?>
</div>
