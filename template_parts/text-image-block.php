<?php
	$title = $data['block-text-image-title'];
	$text = $data['block-text-image-text'];
	$img = $data['block-text-image-img'];
	$imgPosition = $data['block-text-image--img-position'];
?>
<div class="text-image-block <?php echo $imgPosition === 'left' ? 'reverse' : ''?>">
	<div class="text <?php echo $imgPosition === 'left' ? 'right' : ''?>">
		<div class="title-c"><?php echo $title?></div>
		<div class="content"><?php echo $text?></div>
	</div>
	<div class="image"><img src="<?php echo $img?>" alt="#"></div>
</div>