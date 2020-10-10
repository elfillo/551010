<?php
	/*
	Template Name: Дизайн интерьера
	*/
?>
<?php
	$draw = new \Constructor\Constructor(carbon_get_post_meta($post->ID, 'container'));
?>
<?php get_header(); ?>
<?php $draw->page();?>
<?php get_footer()?>