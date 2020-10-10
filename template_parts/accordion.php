<?php
	$content = $data['block-accord--content'];
?>
<div class="accord-list">
	<?php foreach ($content as $item):?>
		<div class="accord-item">
			<div class="accord-item__title">
				<span><?php echo $item['block-accord-row--title']?></span>
				<span class="accord-item__arrow"></span>
			</div>

			<div class="accord-item__content">
				<?php foreach ($item['block-accord-row'] as $row):?>
					<div class="accord-item__row">
						<span><?php echo $row['block-accord-row--text']?></span>
                        <span><?php echo $row['block-accord-row--text-right']?></span>
					</div>
				<?php endforeach;?>
			</div>

		</div>
	<?php endforeach;?>
</div>
