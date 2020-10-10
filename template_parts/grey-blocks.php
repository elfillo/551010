<?php
	$list = $data['block-grey-blocks-list'];
	$key = 'block-grey-block';
	$size = count($list) > 3 ? 'big' : '';
?>
<div class="grey-block-list">
	<?php foreach ($list as $item):?>
		<div class="block <?php echo $size?>"><?php echo $item[$key]?></div>
	<?php endforeach;?>
</div>