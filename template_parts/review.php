<?php
	$reviews = get_posts([
		'numberposts' => -1,
		'post_status' => 'publish',
		'post_type' => 'review',
	]);
?>
<div class="review-list">
	<?php foreach ($reviews as $review): ?>
		<?php
		$content = carbon_get_post_meta($review->ID, 'review-body');
		$name = carbon_get_post_meta($review->ID, 'review-name');
		$date = carbon_get_post_meta($review->ID, 'review-date');
		?>
      <div class="review-row">
          <div class="text"><?php echo $content?></div>
          <div class="info"><?php echo $name?> <?php echo $date?></div>
      </div>
	<?php endforeach; ?>
</div>

