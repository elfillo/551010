<?php
	/*
	Template Name: Спасибо
	*/
?>
<?php
	$id = $post->ID;
	$content = carbon_get_post_meta($post->ID, 'container');
	$draw = new \Constructor\Constructor($content);
?>
<?php get_header(); ?>
<?php $draw->page();?>
<?php get_footer(); ?>
