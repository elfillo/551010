<?php
	$type = $data['block-button--btn_select'];
	$link  = $data['block-button--btn_link'];
	$text  = $data['block-button--btn_text'];
?>
<?php if($type === 'link'):?>
	<a href="<?php echo $link?>" class="button m-a"><?php echo $text?></a>
<?php endif;?>

<?php if($type === 'modal'):?>
	<div class="button m-a call-back-modal"><?php echo $text?></div>
<?php endif;?>
