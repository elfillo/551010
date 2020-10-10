<?php

	namespace Constructor;


	class Constructor
	{
		private $content;
		public function __construct($content)
		{
			$this->content = $content;
		}

		public function page()
		{
			$content = $this->content;

			$page = '';

			foreach ($content as $section){
				$page .= $this->section($section);
			}
			echo $page;
		}

		public function section($section)
		{
			$block = '';
			if(!empty($section['container-wrapper'])){
				$block .= $this->container($section);
			}

			return $block;
		}

		public function container($section)
		{
			$size = $section['container-wrapper'];

			$container  = '<section class="section">';

			if($size === 'large'){
				$container .= '<div class="container container_1920 '.Container::color($section).' relative">';
				$container .= Container::image($section);
				$container .= $this->innerContainer($section);
				$container .= '</div>';
			}else if($size === 'full'){
				$container .= $this->innerContainer($section, true);
			}else{
				$container .= $this->innerContainer($section);
			}

			$container .= '</section>';

			return $container;
		}

		public function innerContainer($section, $full = false)
		{
			$block = $this->block($section['block']);
			$class = $full ? '' : 'container_regular';
			return '<div class="container '.$class.'">'.$block.'</div>';
		}

		public function block($block)
		{
			$content = '';
			foreach ($block as $item){
				if($item['_type'] === 'block-title'){
					$content .= Block::title($item);
				}
				if($item['_type'] === 'block-quote'){
					$content .= Block::quote($item);
				}

				if($item['_type'] === 'block-button'){
					$content .= Block::button($item);
				}


				if($item['_type'] === 'block-sub-title'){
					$content .= Block::subtitle($item);
				}

				if($item['_type'] === 'block-text'){
					$content .= Block::text($item);
				}

				if($item['_type'] === 'block-list'){
					$content .= Block::blockList($item);
				}

				if($item['_type'] === 'block-accord'){
					$content .= Block::accordion($item);
				}

				if($item['_type'] === 'block-list-with-image'){
					$content .= Block::listCards($item);
				}

				if($item['_type'] === 'block-banner'){
					$content .= Block::banner($item);
				}

				if($item['_type'] === 'block-callback-form'){
					$content .= Block::callbackForm($item);
				}

				if($item['_type'] === 'block-review'){
					$content .= Block::review($item);
				}

				if($item['_type'] === 'block-partners'){
					$content .= Block::partners($item);
				}

				if($item['_type'] === 'block-questions'){
					$content .= Block::questions($item);
				}

				if($item['_type'] === 'block-gallery'){
					$content .= Block::gallery($item);
				}

				if($item['_type'] === 'block-contacts'){
					$content .= Block::contacts($item);
				}

				if($item['_type'] === 'block-interior-design-price'){
					$content .= Block::interiorDesignPrice($item);
				}

				if($item['_type'] === 'block-credit-static'){
					$content .= Block::creditStatic($item);
				}

				if($item['_type'] === 'block-flat-repair-level'){
					$content .= Block::flatRepairLevel($item);
				}

				if($item['_type'] === 'block-breadcrumbs'){
					$content .= Block::breadcrumbs($item);
				}

				if($item['_type'] === 'block-table'){
					$content .= Block::table($item);
				}

				if($item['_type'] === 'block-text-image'){
					$content .= Block::textImageBlock($item);
				}

				if($item['_type'] === 'block-one-image'){
					$content .= Block::oneImageBlock($item);
				}

				if($item['_type'] === 'block-two-image'){
					$content .= Block::twoImageBlock($item);
				}

				if($item['_type'] === 'block-custom-gallery'){
					$content .= Block::customGalleryBlock($item);
				}

				if($item['_type'] === 'block-grey-blocks'){
					$content .= Block::greyBlockList($item);
				}

				if($item['_type'] === 'block-why-choose-us'){
					$content .= Block::whyChooseUs($item);
				}

				if($item['_type'] === 'block-work-steps'){
					$content .= Block::workSteps($item);
				}

				if($item['_type'] === 'block-price'){
					$content .= Block::priceList($item);
				}
			}
			return $content;
		}
	}