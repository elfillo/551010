<?php
	$columns = $data['block-text-columns'] == 2 ? 'text-column_2' : '';
	$text = $data['block-text--item'];
?>
<div class="column_text">
	<div class="column_text__content">
		<div class="text text-column <?php echo $columns?>"><?php echo $text?></div>
	</div>
</div>
