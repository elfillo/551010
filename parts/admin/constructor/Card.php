<?php

	namespace Constructor;


	class Card
	{
		public static function draw($cardData)
		{
			$card = '<div class="card oneHeight">';

			if(!empty($cardData['block-list-with-blocks-image'])){
				$card .= self::image($cardData['block-list-with-blocks-image']);
			};

			if(!empty($cardData['block-list-with-blocks--title'])){
				$card .= self::title($cardData['block-list-with-blocks--title']);
			};

			if(!empty($cardData['block-list-with-blocks--subtitle'])){
				$card .= self::subtitle($cardData['block-list-with-blocks--subtitle']);
			};

			if(!empty($cardData['block-list-with-blocks--price'])){
				$card .= self::price($cardData['block-list-with-blocks--price']);
			};

			if(!empty($cardData['block-list-with-blocks--btn_text'])){
				$keyText = 'block-list-with-blocks--btn_text';
				$keyType = 'block-list-with-blocks--btn_select';
				$keyLink = 'block-list-with-blocks--btn_link';
				$card .= self::button($cardData[$keyText], $cardData[$keyType], $cardData[$keyLink]);
			};

			$card .= '</div>';

			return $card;
		}

		public static function image($url)
		{
			return '<div class="card__img card__img-big"><img src="'.$url.'" alt="#"></div>';
		}

		public static function title($title)
		{
			return '<div class="card__title">'.$title.'</div>';
		}

		public static function subtitle($subtitle)
		{
			return '<div class="card__sub-title">'.$subtitle.'</div>';
		}

		public static function price($priceArray)
		{
			$priceBlocks = '';
			$key = 'block-list-with-blocks--price-item';

			foreach ($priceArray as $price){
				$priceBlocks .= self::title($price[$key]);
			}

			return $priceBlocks;
		}

		public static function button($text, $type, $link = null)
		{
			return '<a href="'.$link.'" class="card__button button button_yellow">'.$text.'</a>';
		}
	}