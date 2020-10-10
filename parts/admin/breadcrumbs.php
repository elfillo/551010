<?php
	function breadcrumbs(){
		$content = '';
		global $post;
		$crumbs = [];
		if($_SERVER['REQUEST_URI'] != '/'){
			$crumbs[] = ['title' => 'Главная', 'link' => '/'];
			if($post->post_parent === 0){
				$crumbs[] = [
					'title' => 	$post->post_title,
					'link'  => get_permalink($post)
				];
			}else{
				checkParents($crumbs, $post->post_parent);
			}
		}

		foreach ($crumbs as $key => $crumb){
			$sep = ' / ';

			if($key === (count($crumbs) - 1)){
				$content .= '<span>'.$crumb['title'].'</a>';
			}else{
				$content .= '<a href="'.$crumb['link'].'">'.$crumb['title'].'</a>'.$sep;
			}
		}

		return $content;
	}

	function checkParents(&$crumbs, $id){
		$post = get_post($id);

		$crumbs[] = [
			'title' => 	$post->post_title,
			'link'  => get_permalink($post)
		];

		if($post->post_parent === 0){
			global $post;
			$current_page = $post;
			$crumbs[] = [
				'title' => 	$current_page->post_title,
			];
		}else{
			checkParents($crumbs, $post->post_parent);
		}
	}

	add_shortcode("breadcrumbs", "breadcrumbs");
?>
