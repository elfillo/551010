<?php
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	//add_action( 'carbon_fields_register_fields', 'courses_type' );
	//add_action( 'carbon_fields_register_fields', 'reviews_type' );
	//add_action( 'carbon_fields_register_fields', 'combo_type' );
	//add_action( 'carbon_fields_register_fields', 'about_docs' );
	//add_action( 'carbon_fields_register_fields', 'index_benefits' );

	add_action( 'carbon_fields_register_fields', 'di_firstSlider' );
	add_action( 'carbon_fields_register_fields', 'di_benefits' );
	add_action( 'carbon_fields_register_fields', 'di_steps' );
	add_action( 'carbon_fields_register_fields', 'di_partners' );
	add_action( 'carbon_fields_register_fields', 'di_sale_banner' );

	function courses_type(){
		$courses_types = get_posts([
			'post_type' => 'courses_types',
			'numberposts' => -1,
			'orderby' => 'title',
			'order'       => 'ASC',
		]);

		$teachers = get_posts([
			'post_type' => 'teachers',
			'numberposts' => -1,
		]);

		$courses_list = [];
		$teacher_list = [];


		foreach ($courses_types as $item){
			$courses_list[$item->ID] = $item->post_title;
		}
		unset($item);

		foreach ($teachers as $item){
			$teacher_list[$item->ID] = $item->post_title;
		}
		unset($item);

		Container::make('post_meta', 'Подробности курса (часы / стоимость)')
			->show_on_post_type('courses')
			->add_tab( 'Груповые занятия', array(
				Field::make( 'text', 'group_price', 'Стоимость (без скидки)' ),
				Field::make( 'text', 'group_price-sale', 'Стоимость (со скидкой)' ),
				Field::make( 'text', 'group_time_count', 'Колличество часов (ак/часа)' ),
				Field::make( 'date', 'group_date-start', 'Дата начала' ),
			) )
			->add_tab( 'Персональное занятия', array(
				Field::make( 'text', 'personal_price', 'Стоимость (без скидки)' ),
				Field::make( 'text', 'personal_price-sale', 'Стоимость (со скидкой)' ),
				Field::make( 'text', 'personal_time_count', 'Колличество часов (ак/часа)' ),
				Field::make( 'date', 'personal_date-start', 'Дата начала' ),
			) );

		Container::make( 'post_meta', 'Конструктор страницы' )
			->show_on_post_type( 'courses' )
			->add_fields( array(
				Field::make( 'text', 'preview-sub-title', 'Подзаголовок для карточки' ),
				Field::make('select', 'courses_type', 'Направление курса')
					->add_options($courses_list),
				Field::make( 'complex', 'course-constructor', 'Блоки' )
					->add_fields( 'simple_title', 'Заголовок', array(
						Field::make( 'text', 'simple_title-item', 'Заголовок' )
					) )
					->add_fields( 'simple_article', 'Абзац', array(
						Field::make( 'rich_text', 'simple_article-item', 'Абзац' ),
					) )
					->add_fields( 'simple_img', 'Картинка', array(
						Field::make( 'image', 'simple_img-item', 'Картинка' )->set_value_type( 'url' ),
					) )
					->add_fields( 'simple_list', 'Список', array(
						Field::make( 'complex', 'simple_list-item', 'Нумерованный список' )
							->add_fields(array(
								Field::make( 'rich_text', 'simple_list-item--content', 'Текст описания' ),
							)),
					) )
					->add_fields( 'simple_accord', 'Аккордион', array(
						Field::make( 'complex', 'simple_accord-item', 'Аккордион' )
							->add_fields(array(
								Field::make( 'text', 'simple_accord-item--title', 'Заголовок' ),
								Field::make( 'rich_text', 'simple_accord-item--content', 'Текст внутри' ),
							)),
					) )
					->add_fields( 'simple_teachers', 'Преподаватели', array(
						Field::make('multiselect', 'simple_teachers-item', 'Преподаватели')
							->add_options($teacher_list),
					) )
					->add_fields( 'simple_form', 'Форма обратной связи', array(
						Field::make('checkbox', 'simple_form-item', 'Показать форму'),
					) )
					->add_fields( 'simple-review', 'Блок с отзывами', array(
						Field::make('checkbox', 'simple-review-item', 'Показывать отзывы'),
					) )
					->add_fields( 'simple_serts', 'Сертификаты', array(
						Field::make( 'complex', 'simple_serts-item', 'Сертификаты' )
							->add_fields(array(
								Field::make( 'image', 'simple_serts-item-img', 'Фото' )->set_value_type( 'url' ),
								Field::make( 'rich_text', 'simple_serts-item-content', 'Описание' ),
							)),
					) )
			) );
	}

	function reviews_type(){

		$courses = get_posts([
			'post_type' => 'courses',
			'numberposts' => -1,
			'orderby' => 'title',
			'order'       => 'ASC',
		]);
		$courses_list = [];

		foreach ($courses as $item){
			$courses_list[$item->ID] = $item->post_title;
		}
		unset($item);

		Container::make( 'post_meta', 'Курсы' )
			->show_on_post_type( 'review' )
			->add_fields( array(
				Field::make('select', 'course_item', 'Отзыв для курса: ')
					->add_options($courses_list)
			));
	}

	function combo_type(){
		$courses = get_posts([
			'post_type' => 'courses',
			'numberposts' => -1,
			'orderby' => 'title',
			'order'       => 'ASC',
		]);
		$courses_list = [];

		foreach ($courses as $item){
			$courses_list[$item->ID] = $item->post_title;
		}
		unset($item);

		Container::make( 'post_meta', 'Курсы' )
			->show_on_post_type( 'courses_combo' )
			->add_fields( array(
				Field::make('multiselect', 'course_list', 'Курсы')
					->add_options($courses_list),
				Field::make( 'text', 'combo-price', 'Общая стоимость' ),
				Field::make( 'text', 'combo-price--sale', 'Общая стоимость (со скидкой)' ),
			));
	}

	function about_docs(){

		$id = get_page_data('about')->ID;

		Container::make( 'post_meta', 'Документы' )
			->where( 'post_id', '=', $id )
			->add_fields( array(
				Field::make('text', 'about_docs_title', 'Заголовок перед документами'),
				Field::make( 'complex', 'about_docs', 'Документы' )
					->add_fields( 'simple_about_docs', 'Документы', array(
						Field::make( 'text', 'about_docs-item--name', 'Название' ),
						Field::make( 'file', 'about_docs-item--doc', 'Документ' )->set_value_type( 'url' )
					) )
			));
	}

	function di_firstSlider(){
		$id = get_page_data('design-interior')->ID;

		Container::make( 'post_meta', 'Первый слайдер' )
			->where( 'post_id', '=', $id )
			->add_fields( array(
				Field::make( 'complex', 'di-first_slider', 'Слайдер' )
					->add_fields( 'di-first_slider_list', 'Слайд', array(
						Field::make( 'image', 'di-first_slider_list--img', 'Картинка' )->set_value_type( 'url' )->set_width( 30 ),
						Field::make( 'rich_text', 'di-first_slider_list--desc', 'Текст' )->set_width( 70 )
					) )
			));
	}

	function di_benefits(){
		$id = get_page_data('design-interior')->ID;

		Container::make( 'post_meta', 'Примемущества' )
			->where( 'post_id', '=', $id )
			->add_fields( array(
				Field::make( 'text', 'di_benefits--title', 'Заголовок' ),
				Field::make( 'rich_text', 'di_benefits--sub_title', 'Подзаголовок' ),
				Field::make( 'complex', 'di_benefits', 'Бонус' )
					->add_fields( 'di_benefits-list', 'Бонус', array(
						Field::make( 'image', 'di_benefits-list--img', 'Иконка' )->set_value_type( 'url' )->set_width( 30 ),
						Field::make( 'rich_text', 'di_benefits-list--desc', 'Описание' )->set_width( 70 ),
					) )
			));
	}

	function di_steps(){
		$id = get_page_data('design-interior')->ID;

		Container::make( 'post_meta', 'Этапы работ' )
			->where( 'post_id', '=', $id )
			->add_fields( array(
				Field::make( 'text', 'di_steps--title', 'Заголовок' ),
				Field::make( 'complex', 'di_steps', 'Этапы' )
					->add_fields( 'di_steps-list', 'Этап', array(
						Field::make( 'image', 'di_steps-list--img', 'Иконка' )->set_value_type( 'url' ),
						Field::make( 'text', 'di_steps-list--title', 'Заголовок' ),
						Field::make( 'rich_text', 'di_steps-list--desc', 'Описание' ),
						Field::make( 'text', 'di_steps-list--time', 'Время' )->set_width( 50 ),
						Field::make( 'text', 'di_steps-list--price', 'Цена' )->set_width( 50 ),
					) )
			));
	}

	function di_partners(){
		$id = get_page_data('design-interior')->ID;

		Container::make( 'post_meta', 'Партнеры' )
			->where( 'post_id', '=', $id )
			->add_fields( array(
				Field::make( 'media_gallery', 'di_partners--gallery', 'Партнеры' ),
			));
	}

	function di_sale_banner(){
		$id = get_page_data('design-interior')->ID;

		Container::make( 'post_meta', 'Рекламный баннер' )
			->where( 'post_id', '=', $id )
			->add_fields( array(
				Field::make( 'image', 'di_sale_banner', 'Баннер' )->set_value_type( 'url' ),
			));
	}
?>