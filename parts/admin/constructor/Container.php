<?php

	namespace Constructor;


	class Container
	{
		public static function color($section)
		{
			$class = '';

			if($section['container-wrapper-color'] === 'grey'){
				$class .= 'container_gray';
			}

			return $class;
		}

		public static function image($section)
		{
			$img = '';
			$imgPosition = $section['container-wrapper-image'];
			$imgUrl = $section['container-outside-image'];
			if(!empty($imgUrl))
			{
				$img .= '
								<div class="outside-img outside-img_'.$imgPosition.' outside-img_ver-center">
									<img src="'.$imgUrl.'" alt="#">
								</div>
				';
			}
			return $img;
		}
	}