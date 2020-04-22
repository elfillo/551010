<?php
  $post = $wp_query->post;
 
  if (in_category('repairs')) { //slug  категории
      include(TEMPLATEPATH.'/single-repairs.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>