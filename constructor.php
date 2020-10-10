<?php
	/*
	Template Name: Конструктор
	*/
?>
<?php

	use Constructor\Constructor;

	$page = new Constructor(carbon_get_post_meta($post->ID, 'container'));
?>
<?php get_header('design') ?>
<?php
	$page->page();
?>
<?php get_footer() ?>