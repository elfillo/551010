<?php

	namespace Constructor;

	class Block
	{
		public static function title($data)
		{
			return includePart('title', $data);
		}

		public static function subtitle($data)
		{
			return includePart('subtitle', $data);
		}

		public static function text($data)
		{
			return includePart('text', $data);
		}

		public static function quote($data)
		{
			return includePart('quote', $data);
		}

		public static function button($data)
		{
			return includePart('button', $data);
		}

		public static function blockList($data)
		{
			return includePart('block-list', $data);
		}


		public static function accordion($data)
		{
			return includePart('accordion', $data);
		}


		public static function listCards($data)
		{
			return includePart('list-cards', $data);
		}

		public static function banner($data)
		{
			return includePart('banner', $data);
		}

		public static function callbackForm($data)
		{
			if(!empty($data['block-callback-form--show'])){
				return includePart('callback-form', $data);
			}
			return '';
		}

		public static function review($data)
		{
			if(!empty($data['block-review--show'])){
				return includePart('review', $data);
			}
			return '';
		}

		public static function partners($data)
		{
			if(!empty($data['block-partners--show'])){
				return includePart('partners', $data);
			}
			return '';
		}

		public static function questions($data)
		{
			if(!empty($data['block-questions--show'])){
				return includePart('questions');
			}
			return '';
		}

		public static function gallery($data)
		{
			if(!empty($data['block-gallery--show'])){
				return includePart('gallery');
			}
			return '';
		}

		public static function contacts($data)
		{
			if(!empty($data['block-contacts--show'])){
				return includePart('contacts');
			}
			return '';
		}

		public static function interiorDesignPrice($data)
		{
			if(!empty($data['block-interior-design-price--show'])){
				return includeStaticPart('interior-design-price');
			}
			return '';
		}

		public static function creditStatic($data)
		{
			if(!empty($data['block-credit-static--show'])){
				return includeStaticPart('credit-static');
			}
			return '';
		}

		public static function flatRepairLevel($data)
		{
			if(!empty($data['block-flat-repair-level--show'])){
				return includePart('flat-repair-level');
			}
			return '';
		}

		public static function breadcrumbs($data)
		{
			if(!empty($data['block-breadcrumbs--show'])){
				return includePart('breadcrumbs');
			}
			return '';
		}

		public static function table($data)
		{
			return includePart('table', $data);
		}

		public static function textImageBlock($data)
		{
			return includePart('text-image-block', $data);
		}


		public static function oneImageBlock($data)
		{
			return includePart('one-image', $data);
		}

		public static function twoImageBlock($data)
		{
			return includePart('two-image', $data);
		}

		public static function customGalleryBlock($data)
		{
			return includePart('custom-gallery', $data);
		}

		public static function greyBlockList($data)
		{
			return includePart('grey-blocks', $data);
		}


		public static function whyChooseUs($data)
		{
			if(!empty($data['block-why-choose-us--show'])){
				return includeStaticPart('why-choose-us');
			}
			return '';
		}

		public static function workSteps($data)
		{
			if(!empty($data['block-work-steps--show'])){
				return includeStaticPart('work-steps');
			}
			return '';
		}

		public static function priceList($data)
		{
			return includePart('price-list', $data);
		}
	}