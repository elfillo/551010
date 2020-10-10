<?php
	$content = $data['block-price--content'];

	function parsePrice($priceData){
		$price = [];
		foreach (explode('*-*', $priceData) as $key => $item){
			if(!empty($item)){
				list($name, $money) = explode('|', $item);
				$price[$key] = ['label' => $name, 'money' => $money];
			}
		}
		return $price;
	}
?>
<div class="accord-list">
	<?php foreach ($content as $item):?>
		<div class="accord-item">
			<div class="accord-item__title">
				<span><?php echo $item['block-price-row--title']?></span>
				<span class="accord-item__arrow"></span>
			</div>

			<div class="accord-item__content">
				<?php foreach (parsePrice($item['block-price-row--price']) as $row):?>
					<div class="accord-item__row">
						<span><?php echo $row['label']?></span>
						<span><?php echo $row['money']?> руб.</span>
					</div>
				<?php endforeach;?>
			</div>

		</div>
	<?php endforeach;?>
</div>