<?php

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'di_firstSlider');
	add_action('carbon_fields_register_fields', 'di_benefits');
	add_action('carbon_fields_register_fields', 'di_steps');
	add_action('carbon_fields_register_fields', 'di_partners');
	add_action('carbon_fields_register_fields', 'di_sale_banner');
	add_action('carbon_fields_register_fields', 'page_constructor');

	add_action('carbon_fields_register_fields', 'reviews_type');
	add_action('carbon_fields_register_fields', 'theme_setting');
	add_action('carbon_fields_register_fields', 'repair_report');

	function reviews_type()
	{
		Container::make('post_meta', 'Отзыв')
			->show_on_post_type('review')
			->add_fields(array(
				Field::make('rich_text', 'review-body', 'Текст отзыва'),
				Field::make('text', 'review-name', 'Имя')->set_width(50),
				Field::make('text', 'review-date', 'Дата')->set_width(50),
			));
	}

	function di_firstSlider()
	{
		$id = get_page_data('low-level-build')->ID;

		Container::make('post_meta', 'Первый слайдер')
			->where('post_id', '=', $id)
			->add_fields(array(
				Field::make('complex', 'di-first_slider', 'Слайдер')
					->add_fields('di-first_slider_list', 'Слайд', array(
						Field::make('image', 'di-first_slider_list--img', 'Картинка')->set_value_type('url')->set_width(30),
						Field::make('rich_text', 'di-first_slider_list--desc', 'Текст')->set_width(70)
					))
			));
	}

	function di_benefits()
	{
		$id = get_page_data('low-level-build')->ID;

		Container::make('post_meta', 'Примемущества')
			->where('post_id', '=', $id)
			->add_fields(array(
				Field::make('text', 'di_benefits--title', 'Заголовок'),
				Field::make('rich_text', 'di_benefits--sub_title', 'Подзаголовок'),
				Field::make('complex', 'di_benefits', 'Бонус')
					->add_fields('di_benefits-list', 'Бонус', array(
						Field::make('image', 'di_benefits-list--img', 'Иконка')->set_value_type('url')->set_width(30),
						Field::make('rich_text', 'di_benefits-list--desc', 'Описание')->set_width(70),
					))
			));
	}

	function di_steps()
	{
		$id = get_page_data('low-level-build')->ID;

		Container::make('post_meta', 'Этапы работ')
			->where('post_id', '=', $id)
			->add_fields(array(
				Field::make('text', 'di_steps--title', 'Заголовок'),
				Field::make('complex', 'di_steps', 'Этапы')
					->add_fields('di_steps-list', 'Этап', array(
						Field::make('image', 'di_steps-list--img', 'Иконка')->set_value_type('url'),
						Field::make('text', 'di_steps-list--title', 'Заголовок'),
						Field::make('rich_text', 'di_steps-list--desc', 'Описание'),
						Field::make('text', 'di_steps-list--time', 'Время')->set_width(50),
						Field::make('text', 'di_steps-list--price', 'Цена')->set_width(50),
					))
			));
	}

	function theme_setting()
	{
		Container::make('theme_options', 'Общий контент')
			->set_page_file('theme-options')
			->add_tab('Партнеры', array(
				Field::make('media_gallery', 'partner-list', 'Галерея'),
			))
			->add_tab('Header scripts', array(
				Field::make('header_scripts', 'crb_header_scripts', __('Header Scripts'))
			))
			->add_tab('Footer scripts', array(
					Field::make('footer_scripts', 'crb_footer_scripts', __('Footer Scripts'))
				)
			);
	}


	function di_partners()
	{
		$id = get_page_data('low-level-build')->ID;

		Container::make('post_meta', 'Партнеры')
			->where('post_id', '=', $id)
			->add_fields(array(
				Field::make('media_gallery', 'di_partners--gallery', 'Партнеры'),
			));
	}

	function di_sale_banner()
	{
		$id = get_page_data('low-level-build')->ID;

		Container::make('post_meta', 'Рекламный баннер')
			->where('post_id', '=', $id)
			->add_fields(array(
				Field::make('image', 'di_sale_banner', 'Баннер')->set_value_type('url'),
			));
	}

	function repair_report()
	{
		Container::make('post_meta', 'Отчет о ремонте')
			->show_on_template('portfolio-single.php')
			->set_priority('high')
			->add_fields(array(
				Field::make('rich_text', 'repair-report', 'Отчет о ремонте'),
				Field::make('text', 'repair-price', 'Стоимость ремонта'),
				Field::make('file', 'repair-pdf', 'PDF')->set_value_type('url'),
			));
	}

	function page_constructor()
	{
		$pagesData = get_pages([
			'post_status' => 'publish',
			'sort_column' => 'post_title'
		]);

		$pages = [];
		$pageLinks = [];

		foreach ($pagesData as $page) {
			$pages[$page->ID] = [
				'name' => $page->post_title,
				'link' => get_permalink($page),
			];
			$pageLinks[get_permalink($page)] = $page->post_title;
		}

		\Carbon_Fields\Container::make('post_meta', 'Конструктор страницы')
			->show_on_post_type('page')
			->add_fields([
				Field::make('complex', 'container', 'Контейнер')
					->add_fields(array(
						/*выбор размера контейнера*/
						Field::make('radio', 'container-wrapper', 'Выбор размера')->set_options(
							['regular' => 'Стандартный', 'large' => 'Большой', 'full' => 'Во весь экран']
						)->set_width(25),

						/*выбор цвета контейнера*/
						Field::make('radio', 'container-wrapper-color', 'Выбор цвета блока')->set_options(
							['regular' => 'Прозрачный', 'grey' => 'Серый', 'custom' => 'Выборе цвета...']
						)->set_width(25)->set_conditional_logic(array(
							'relation' => 'OR',
							[
								'field' => 'container-wrapper',
								'value' => ['large'],
								'compare' => 'IN',
							]
						)),

						/*выбор цвета контейнера*/
						Field::make('color', 'container-wrapper-custom-color', 'Выбор цвета')
							->set_width(25)->set_conditional_logic(array(
								'relation' => 'OR',
								[
									'field' => 'container-wrapper-color',
									'value' => ['custom'],
									'compare' => 'IN',
								]
							)),

						/*выбор позиционирования картинки, если выбран большой контейнер*/
						Field::make('radio', 'container-wrapper-image', 'Выбор картинки')->set_options(
							['none' => 'Нет', 'left' => 'Слева', 'right' => 'Справа']
						)->set_width(25)->set_conditional_logic(array(
							'relation' => 'OR',
							[
								'field' => 'container-wrapper',
								'value' => ['large'],
								'compare' => 'IN',
							]
						)),

						/*выбор картинки, если выбрана такая опция*/
						Field::make('image', 'container-outside-image', 'Картинка')->set_value_type('url')->set_width(25)
							->set_conditional_logic(array(
								'relation' => 'OR',
								[
									'field' => 'container-wrapper-image',
									'value' => ['right', 'left'],
									'compare' => 'IN',
								]
							)),

						/*выбор блоков для контента контейнера*/
						Field::make('complex', 'block', 'Блок')
							/*Заголовок*/
							->add_fields('block-title', 'Заголовок', array(
								Field::make('text', 'block-title--item', 'Заголовок')
							))
							/*Подзаголовок*/
							->add_fields('block-sub-title', 'Подзаголовок', array(
								Field::make('rich_text', 'block-sub-title-item', 'Подзаголовок'),
							))
							/*Текстовый блок*/
							->add_fields('block-text', 'Текстовый блок', array(
								Field::make('rich_text', 'block-text--item', 'Текстовый блок'),
								Field::make('radio', 'block-text-columns', 'Колличество колонок')->set_options([1 => '1 колонка', 2 => '2 колонки'])
							))
							/*Цитата*/
							->add_fields('block-quote', 'Цитата', array(
								Field::make('rich_text', 'block-quote--item', 'Цитата'),
							))
							/*Список*/
							->add_fields('block-list', 'Список', array(
								Field::make('radio', 'block-list-type', 'Колличество колонок')->set_options(
									['numeric' => 'Нумерованный', 'bulleted' => 'Точки']
								),
								Field::make('complex', 'block-list-content', 'Список')
									->add_fields(array(
										Field::make('text', 'block-list--item', 'Пункт списка'),
									)),
							))
							/*Аккордион*/
							->add_fields('block-accord', 'Аккордион', array(
								Field::make('complex', 'block-accord--content', 'Блок выпадающего списка')
									->add_fields(array(
										Field::make('text', 'block-accord-row--title', 'Заголовок'),
										Field::make('complex', 'block-accord-row', 'Строки')
											->add_fields(array(
												Field::make('text', 'block-accord-row--text', 'Основной текст')->set_width(70),
												Field::make('text', 'block-accord-row--text-right', 'Текст справа')->set_width(30),
											)),
									)),
							))
							/*Цены*/
							->add_fields('block-price', 'Цены', array(
								Field::make('complex', 'block-price--content', 'Блок выпадающего списка')
									->add_fields(array(
										Field::make('text', 'block-price-row--title', 'Заголовок'),
										Field::make('rich_text', 'block-price-row--price', 'Цены'),
									)),
							))
							/*Баннер*/
							->add_fields('block-banner', 'Баннер', array(
								Field::make('text', 'block-banner--text', 'Текст'),
								Field::make('text', 'block-banner--button-text', 'Текст на кнопке')->set_width(50),
								Field::make('image', 'block-banner--text--background', 'Картинка')->set_value_type('url')->set_width(50)
							))
							/*Список блоков с картинками*/
							->add_fields('block-list-with-image', 'Список блоков с картинками', array(
								Field::make('complex', 'block-list-with-blocks', 'Блок с картинкой')
									->add_fields([
										Field::make('image', 'block-list-with-blocks-image', 'Картинка')->set_value_type('url')->set_width(50),
										Field::make('text', 'block-list-with-blocks--title', 'Заголовок')->set_width(50),
										Field::make('radio', 'block-list-with-blocks-image-type', 'Типа картинки')->set_options(
											['default' => 'Обычная картинка', 'icon' => 'Иконка на синем фоне']
										),
										Field::make('rich_text', 'block-list-with-blocks--subtitle', 'Подзаголовоик'),
										Field::make('complex', 'block-list-with-blocks--price', 'Цена')
											->add_fields(array(
												Field::make('text', 'block-list-with-blocks--price-item', 'Цена (строка)')->set_width(20)
											)),
										Field::make('radio', 'block-list-with-blocks--btn_select', 'Выбор функционала кнопки')
											->set_options([
												'link' => 'Ссылка',
												'modal' => 'Модальное окно'
											]),
										Field::make('text', 'block-list-with-blocks--btn_text', 'Текст на кнопке')->set_width(50),
										Field::make('text', 'block-list-with-blocks--btn_link', 'Ссылка')->set_width(50)
											->set_conditional_logic(array(
												'relation' => 'and',
												[
													'field' => 'block-list-with-blocks--btn_select',
													'value' => ['link'],
													'compare' => 'IN',
												]
											)),
									])
							))
							/*Кнопка*/
							->add_fields('block-button', 'Кнопка', array(
								Field::make('radio', 'block-button--btn_select', 'Выбор функционала кнопки')
									->set_options([
										'link' => 'Ссылка',
										'modal' => 'Модальное окно'
									]),
								Field::make('text', 'block-button--btn_text', 'Текст на кнопке')->set_width(50),
								//Field::make( 'text', 'block-button--btn_link', 'Ссылка' )->set_width(50)
								Field::make('select', 'block-button--btn_link', 'Ссылка')
									->add_options($pageLinks)
									->set_width(50)
									->set_conditional_logic(array(
										'relation' => 'and',
										[
											'field' => 'block-button--btn_select',
											'value' => ['link'],
											'compare' => 'IN',
										]
									)),
							))
							/*Таблица*/
							->add_fields('block-table', 'Таблица', array(
								Field::make('complex', 'block-table--row', 'Строка')
									->add_fields(array(
										Field::make('text', 'block-table--cell-1', '')->set_width(20),
										Field::make('text', 'block-table--cell-2', '')->set_width(20),
										Field::make('text', 'block-table--cell-3', '')->set_width(20),
										Field::make('text', 'block-table--cell-4', '')->set_width(20),
										Field::make('text', 'block-table--cell-5', '')->set_width(20),
									)),
							))
							/*Заголовок + Текст + Картинка*/
							->add_fields('block-text-image', 'Заголовок + текст + картинка', array(
								Field::make('radio', 'block-text-image--img-position', 'Расположение картинки')
									->set_options([
										'right' => 'Справа',
										'left' => 'Слева'
									]),
								Field::make('image', 'block-text-image-img', 'Картинка')->set_value_type('url')->set_width(50),
								Field::make('text', 'block-text-image-title', 'Заголовок')->set_width(50),
								Field::make('rich_text', 'block-text-image-text', 'Текст'),
							))
							/*1 картинка по центру*/
							->add_fields('block-one-image', '1 картинка по центру', array(
								Field::make('image', 'block-one-image-1', 'Картинка')->set_value_type('url'),
							))
							/*Две картинки*/
							->add_fields('block-two-image', '2 картинки', array(
								Field::make('image', 'block-two-image-1', 'Картинка')->set_value_type('url')->set_width(50),
								Field::make('image', 'block-two-image-2', 'Картинка')->set_value_type('url')->set_width(50),
							))
							/*Галлерея*/
							->add_fields('block-custom-gallery', 'Галлерея', array(
								Field::make('media_gallery', 'block-custom-gallery--content', ''),
							))
							/*Серые блоки*/
							->add_fields('block-grey-blocks', 'Серые блоки', array(
								Field::make('complex', 'block-grey-blocks-list', '')
									->add_fields(array(
										Field::make('text', 'block-grey-block', 'Текст'),
									)),
							))
							/*Статичные блоки*/

							/*Форма обратной связи*/
							->add_fields('block-callback-form', 'Блок "Форма обратной связи"', array(
								Field::make('checkbox', 'block-callback-form--show', 'Показать форму обратной связи')
									->set_option_value('yes')
							))
							/*Отзывы клиентов*/
							->add_fields('block-review', 'Блок "Отзывы"', array(
								Field::make('checkbox', 'block-review--show', 'Показать блок с отзывами')
									->set_option_value('yes')
							))
							/*Магазины-партнёры*/
							->add_fields('block-partners', 'Блок "Партнеры"', array(
								Field::make('checkbox', 'block-partners--show', 'Показать блок "магазины-партнеры"')
									->set_option_value('yes')
							))
							/*Блок "У вас возникли вопросы?"*/
							->add_fields('block-questions', 'Блок "У вас возникли вопросы?"', array(
								Field::make('checkbox', 'block-questions--show', 'Показать блок "У вас возникли вопросы?"')
									->set_option_value('yes')
							))
							/*Фотогалерея работ*/
							->add_fields('block-gallery', 'Блок "Фотогалерея работ"', array(
								Field::make('checkbox', 'block-gallery--show', 'Показать блок "Фотогалерея работ"')
									->set_option_value('yes')
							))
							/*Контакты*/
							->add_fields('block-contacts', 'Блок "Контакты"', array(
								Field::make('checkbox', 'block-contacts--show', 'Показать блок "Контакты"')
									->set_option_value('yes')
							))
							/*Стоимость работ по дизайну интерьеров*/
							->add_fields('block-interior-design-price', 'Блок "Стоимость работ по дизайну интерьеров"', array(
								Field::make('checkbox', 'block-interior-design-price--show', 'Показать блок "Стоимость работ по дизайну интерьеров"')
									->set_option_value('yes')
							))
							/*Статичный блок рассрочка*/
							->add_fields('block-credit-static', 'Блок "Беспроцентная рассрочка"', array(
								Field::make('checkbox', 'block-credit-static--show', 'Показать блок "Беспроцентная рассрочка"')
									->set_option_value('yes')
							))
							/*Уровень ремонта квартир*/
							->add_fields('block-flat-repair-level', 'Блок "Уровень ремонта квартир"', array(
								Field::make('checkbox', 'block-flat-repair-level--show', 'Показать блок "Уровень ремонта квартир"')
									->set_option_value('yes')
							))
							/*Хлебные крошки*/
							->add_fields('block-breadcrumbs', 'Блок "Хлебные крошки"', array(
								Field::make('checkbox', 'block-breadcrumbs--show', 'Показать блок "Хлебные крошки"')
									->set_option_value('yes')
							))
							/*Почему выбирают именно нас*/
							->add_fields('block-why-choose-us', 'Блок "Почему выбирают именно нас"', array(
								Field::make('checkbox', 'block-why-choose-us--show', 'Показать блок "Почему выбирают именно нас"')
									->set_option_value('yes')
							))
							/*этапы работ*/
							->add_fields('block-work-steps', 'Блок "Этапы работы', array(
								Field::make('checkbox', 'block-work-steps--show', 'Показать блок "Этапы работы"')
									->set_option_value('yes')
							))
					))
			]);

	}

?>