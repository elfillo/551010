<?php
	$type = $data['block-list-type'] === 'numeric' ? 'numeric' : 'dotted';
	$list = '';
	foreach ($data['block-list-content'] as $row){
		$list .= '<li>'.$row['block-list--item'].'</li>';
	}
?>
<?php if($type === 'numeric'):?>
	<ol class="list-numeric"><?php echo $list?></ol>
<?php else:?>
	<ul class="list-dotted list-dotted_yellow"><?php echo $list?></ul>
<?php endif;?>
