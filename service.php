<?php
	/*
	Template Name: Услуга
	*/
?>
<?php
	$id = $post->ID;
	$content = carbon_get_post_meta($post->ID, 'container');
	$draw = new \Constructor\Constructor($content);
?>
<?php get_header(); ?>
	<section class="section">
		<div class="container container_regular">
			<div class="breadcrumb">
				<?php echo do_shortcode('[breadcrumbs]')?>
			</div>
		</div>
	</section>
<?php $draw->page();?>
<?php get_footer(); ?>