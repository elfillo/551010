<?php
	$cell = 0;
	$content = $data['block-table--row'];

	foreach ($content as $key => $row){
		unset($row['_type']);
		$content[$key] = array_filter($row);
	}

	foreach ($content as $r){
		unset($r['_type']);
		$cellCount = count(array_filter($r));
		$cell = $cellCount > $cell ? $cellCount : $cell;
	}
?>
<table>
	<?php foreach ($content as $row):?>
		<tr>
		<?php foreach ($row as $cell):?>
			<td><?php echo $cell?></td>
		<?php endforeach;?>
		</tr>
	<?php endforeach;?>
</table>