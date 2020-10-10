<?php
	/*
	Template Name: Новый дизайн
	*/
?>
<?php
	$our_service = [
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Сантехнические услуги', 'sub-title' =>'Устраняем засоры и протечки'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Ремонт и отделка квартир', 'sub-title' =>'Ремонт класса “Эконом”'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Ремонт и отделка котеджей', 'sub-title' =>'от 5000 руб./кв.м.'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Ремонт и отделка таунхаусов', 'sub-title' =>'от 6000 руб./кв.м.'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Дизайн интерьера', 'sub-title' =>'Lorem ipsum dolor sit amet,'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Электромонтажные работы', 'sub-title' =>'Lorem ipsum dolor sit amet,'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Сварочные работы', 'sub-title' =>'Lorem ipsum dolor sit amet,'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Монтаж систем водоснабжения', 'sub-title' =>'Lorem ipsum dolor sit amet,'],
	];
	$whyWe = [
		['img' => 'img/new/why_we/1.png', 'title' => 'Добросовестный подрядчик', 'sub-title' =>'7 лет безупречной репутации'],
		['img' => 'img/new/why_we/2.png', 'title' => 'Официальная деятельность', 'sub-title' =>'Допуск СРО на ремонтные работы'],
		['img' => 'img/new/why_we/3.png', 'title' => 'Все расчеты по факту', 'sub-title' =>'Никаких авансовых выплат'],
		['img' => 'img/new/why_we/4.png', 'title' => 'Без непредвиденных расходов', 'sub-title' =>'Составляется детализированная смета'],
		['img' => 'img/new/why_we/5.png', 'title' => 'Постоянный состав бригад', 'sub-title' =>'29 профессиональных мастеров'],
		['img' => 'img/new/why_we/6.png', 'title' => '3 года гарантии', 'sub-title' =>'Претензии устраняются за наш счёт'],
		['img' => 'img/new/why_we/7.png', 'title' => 'Экономия на отделке до 20%', 'sub-title' =>'Материалы закупаются у надёжных оптовиков'],
		['img' => 'img/new/why_we/8.png', 'title' => 'Минимум вашего времени и усилий', 'sub-title' =>'Выберем, закупим и доставим отделочные материалы'],
		['img' => 'img/new/why_we/9.png', 'title' => 'Реальные сроки', 'sub-title' =>'По заранее утверждённому плану работ'],
		['img' => 'img/new/why_we/10.png', 'title' => ' Самые смелые решения', 'sub-title' =>'Дизайнеры компании Строй Сити продумают до мелочей'],
		['img' => 'img/new/why_we/11.png', 'title' => 'Воплощаем мечты', 'sub-title' =>'Мы готовы воплотить в жизнь все задумки клиента'],
		['img' => 'img/new/why_we/12.png', 'title' => 'Нас рекомендуют', 'sub-title' =>'Каждый третий заказчик приходит к нам по рекомендации'],
	];

	$repairLevel = [
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Ремонт класса "Эконом"', 'sub-title' =>'Демонтаж помещения <br/> Шпаклевка потолков, стен <br/> Покраска потолков, стен <br/> Удаление обоев и наклейка новых', 'price' => '1 900'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Ремонт класса "Комфорт"', 'sub-title' =>'Демонтажные и монтажные работы <br/> Полная замена электропроводки <br/> Замена труб водоснабжения <br/> + Дизайн-проект в подарок', 'price' => '3 500'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Ремонт класса "Эконом"', 'sub-title' =>'Демонтажные и монтажные работы <br/> Полная замена электропроводки <br/> Замена труб водоснабжения <br/> + Дизайн-проект в подарок', 'price' => '1 900'],
		['img' => 'img/new/card_img_placeholder.png', 'title' => 'Ремонт класса "Эконом"', 'sub-title' =>'Демонтажные и монтажные работы <br/> Полная замена электропроводки <br/> Замена труб водоснабжения <br/> + Дизайн-проект в подарок', 'price' => '1 900'],
    ];

	$project_gallery = new WP_Query(array(
			'post_type' => 'page',
			'post_parent' => '16'
		)
	);

	$partners = [
	        'img/new/partners/1.png',
            'img/new/partners/2.png',
            'img/new/partners/3.png',
            'img/new/partners/4.png',
            'img/new/partners/5.png',
    ];

	$review = [
	  ['text' => 'Хотим поблагодарить компанию «СтройСити» за качественный ремонт санузла, и выразить особую благодарность прорабу Дмитрию за организацию процесса. Сделали ремонт за 10 дней под ключ с установкой и подключением унитаза, душевой кабины, раковины и стиральной машинки. Рекомендую бригаду Дмитрия как настоящих профессионалов. Спасибо.', 'author' => 'Даниил Дёмин', 'date' => '22.02.2019г'],
	  ['text' => 'Хотим поблагодарить компанию «СтройСити»', 'author' => 'Даниил Дёмин', 'date' => '22.02.2019г'],
	  ['text' => 'Хотим поблагодарить компанию «СтройСити» за качественный ремонт санузла, и выразить особую благодарность прорабу Дмитрию за организацию процесса. Сделали ремонт за 10 дней под ключ с установкой и подключением унитаза, душевой кабины, раковины и стиральной машинки. Рекомендую бригаду Дмитрия как настоящих профессионалов. Спасибо.', 'author' => 'Даниил Дёмин', 'date' => '22.02.2019г'],
	  ['text' => 'Хотим поблагодарить компанию «СтройСити» за качественный ремонт санузла, и выразить особую благодарность прорабу Дмитрию за организацию процесса. Сделали ремонт за 10 дней под ключ с установкой и подключением унитаза, душевой кабины, раковины и стиральной машинки. Рекомендую бригаду Дмитрия как настоящих профессионалов. Спасибо.', 'author' => 'Даниил Дёмин', 'date' => '22.02.2019г'],
	  ['text' => 'Хотим поблагодарить компанию «СтройСити» за качественный ремонт санузла, и выразить особую благодарность прорабу Дмитрию за организацию процесса. Сделали ремонт за 10 дней под ключ с установкой и подключением унитаза, душевой кабины, раковины и стиральной машинки. Рекомендую бригаду Дмитрия как настоящих профессионалов. Спасибо.', 'author' => 'Даниил Дёмин', 'date' => '22.02.2019г'],
    ];
?>
<?php get_header('design')?>
	<section class="section">
		<div class="container container_regular">
			<div class="banner">
				<div class="banner__title">
					СТРОЙ СИТИ -
					Ваш проводник
					в мире ремонта!
				</div>
				<div class="banner__button button button_yellow">Хочу ремонт!</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container container_1920 container_gray relative">
			<div class="outside-img outside-img_left outside-img_ver-center">
				<img src="<?php get_uri('img/new/outside_img-1.png')?>" alt="#">
			</div>
			<div class="container container_regular">
				<div class="list-cards">
					<div class="list-cards__title title">Наши услуги</div>
					<div class="list-cards__list">
						<?php foreach ($our_service as $item):?>
						<div class="card">
							<div class="card__img card__img-big"><img src="<?php get_uri($item['img'])?>" alt="<?php echo $item['title']?>"></div>
							<div class="card__title"><?php echo $item['title']?></div>
							<div class="card__sub-title"><?php echo $item['sub-title']?></div>
						</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container container_regular">
			<div class="column_text">
				<div class="column_text__title title">Ремонт квартир в Иркутске</div>
				<div class="column_text__content">
					<div class="text text-column text-column_2">
						С необходимостью ремонта в квартире рано или поздно сталкивается каждый из нас. И большинство из нас хочет сделать этот ремонт быстро, качественно, недорого и без особых усилий. Столкнувшись с данным вопросом, с чего-то необходимо начинать. Как правило, начинать нужно с выбора компании, которая готова взять эти проблемы на свои плечи.
						Как и в любом крупном городе, в Иркутске немало строительных компаний, проводящих евроремонт квартир, офисов и прочих помещений. Среди такого разнообразия несложно и растеряться. Основным из критериев выбора должна быть способность компании выполнить весь комплекс работ, обеспечить ремонт квартиры под ключ.
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container container_regular">
			<div class="quote">
				<div class="quote__dash"></div>
				<div class="quote__content">
					Именно такой является Строй Сити – компания, которая работает с 2010 года и заслужила отличную репутацию на этом рынке в Иркутске.
				</div>
				<div class="quote__dash"></div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container container_regular">
			<div class="list-cards">
				<div class="list-cards__title title">Почему выбирают именно нас</div>
				<div class="list-cards__list">
					<?php foreach ($whyWe as $item):?>
						<div class="card">
							<div class="card__img card__img_whyWe"><img src="<?php get_uri($item['img'])?>" alt="<?php echo $item['title']?>"></div>
							<div class="card__title"><?php echo $item['title']?></div>
							<div class="card__sub-title"><?php echo $item['sub-title']?></div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container container_regular">
			<div class="credit-block">
				<div class="credit-block__title title">Наша компания предлагает все виды ремонта квартир в рассрочку без переплат!</div>
				<div class="credit-block__content">
					<div class="form">
						<div class="form__title title">Заполните форму обратной связи, чтобы оформить обратный звонок!</div>
						<div class="row">
							<div class="col-6">
								<div class="form__input input"><input type="text" placeholder="Введите ваше имя"></div>
							</div>
							<div class="col-6">
								<div class="form__input input"><input type="text" placeholder="Ваш мобильный телефон"></div>
							</div>
						</div>
						<div class="row" style="min-height: 54px">
							<div class="col-10">
								<div class="form__group">
									<input type="checkbox" id="credit-confirm" checked>
									<label for="credit-confirm"><span>Я соглашаюсь</span> с условиями обработки персональных данных</label>
								</div>
							</div>
							<div class="col-2">
								<button class="button button_yellow">Отправить</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="section">
        <div class="container container_1920 container_gray relative">
            <div class="container container_regular">
                <div class="dotted-list">
                    <div class="dotted-list__title title">Что входит в объем работ "под ключ":</div>
                    <div class="dotted-list__content">
                        <ul class="list-dotted list-dotted_yellow">
                            <li>Перепланировка квартир</li>
                            <li>Демонтажные работы</li>
                            <li>Штукатурные и малярные работы</li>
                            <li>Выравнивание стен, полов и потолков</li>
                            <li>Стяжка, укладка теплых полов</li>
                            <li>Сантехнические работы любой сложности</li>
                            <li>Установка ванн, душевых кабин, джакузи</li>
                            <li>Электромонтажные работы любой сложности</li>
                            <li>Замена и установка дверей</li>
                            <li>Правильная шумо- и звукоизоляция</li>
                            <li>Укладка керамической плитки (в т.ч. художественной мозаики)</li>
                            <li>Укладка ламината, паркетной доски</li>
                            <li>Монтаж многоуровневых гипсокартонных потолков</li>
                            <li>Подвесные и натяжные потолки</li>
                            <li>Облицовка декоративным камнем и другие виды работ</li>
                            <li>Остекление и утепление балконов и лоджий</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_regular">
            <div class="list-cards">
                <div class="list-cards__title title">Уровень ремонта квартиры</div>
                <div class="list-cards__list">
					<?php foreach ($repairLevel as $item):?>
                      <div class="card">
                          <div class="card__img card__img-big"><img src="<?php get_uri($item['img'])?>" alt="<?php echo $item['title']?>"></div>
                          <div class="card__title"><?php echo $item['title']?></div>
                          <div class="card__sub-title"><?php echo $item['sub-title']?></div>
                          <div class="card__title">от <?php echo $item['price']?> руб./кв.м.</div>
                          <div class="card__button button button_yellow">Полный план работ</div>
                      </div>
					<?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="project-gallery">
                <div class="project-gallery__title title">Фотогалерея наших работ:</div>
                <div class="project-gallery__content">
                    <div class="swiper-container project-gallery__list">
                        <div class="swiper-wrapper">
                          <?php if($project_gallery->have_posts()):while($project_gallery->have_posts()): $project_gallery->the_post();?>
                          <div class="swiper-slide">
                              <div class="project-gallery__item">
                                  <div class="project-gallery__img">
                                      <a href="<?php the_permalink()?>"><?php the_post_thumbnail(array()); ?></a>
                                  </div>
                              </div>
                          </div>
                          <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
                <div class="project-gallery__button button button_yellow">Перейти в галерею</div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_regular">
            <div class="column_text">
                <div class="column_text__content">
                    <div class="text text-column text-column_2">
                        Ремонт квартир недорого в Иркутске от компании «СтройСити» широко известен заказчикам за счет комплексных, надежных решений, гарантирующих надежность на годы интенсивной эксплуатации. Миссия компании – сделать мир вокруг вас безопаснее и красивее.
                        В своей работе специалисты компании «СтройСити» следуют во время выполнения каждого проекта – услуга ремонт квартир недорого в Иркутске делает современное качество доступнее, с гарантией индивидуального отношения к поставленным задачам.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_regular">
            <div class="quote">
                <div class="quote__dash"></div>
                <div class="quote__content">
                    Главной целью компании являются инвестиции в качество проектов и свою репутацию. Подтверждением такого отношения становятся свыше 260 успешно выполненных проектов, начиная с 2010-го года.
                </div>
                <div class="quote__dash"></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_regular">
            <div class="partners">
                <div class="partners__title title">Магазины-партнёры</div>
                <div class="partners__content">
                    <div class="swiper-container partners__list">
                        <div class="swiper-wrapper">
                            <?php foreach ($partners as $partner):?>
                            <div class="swiper-slide">
                                <div class="partners__item"><img src="<?php get_uri($partner)?>" alt="#"></div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_regular">
            <div class="have-question">
                <div class="have-question__title title">У вас возникли вопросы?</div>
                <div class="have-question__content">
                    <div class="have-question__column">
                        <span>Звоните в любое удобное для вас время по телефону в Иркутске:</span>
                        <div class="have-question__phone"><a href="tel:+73952551010">+7 (3952) 55-10-10</a></div>
                    </div>
                    <div class="have-question__column">
                        <span>или напишите нам через форму обратной связи прямо с сайта:</span>
                        <div class="have-question__button"><div class="button button_yellow">Написать</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_regular">
            <div class="interior-design-price">
                <div class="interior-design-price__title title">Стоимость работ по дизайну интерьеров в Иркутске</div>
                <div class="interior-design-price__content">
                    <div class="content-block">
                        <div class="content-block__title">Стандартный дизайн-проект</div>
                        <div class="content-block__list">
                            <ul class="list-dotted list-dotted_yellow">
                                <li>Обмерный план</li>
                                <li>Планировочное решение с расстановкой мебели (2-3 варианта)</li>
                                <li>Визуализация интерьера к одному из вариантов перепланировки (не более двух эскизов на основные помещения)</li>
                                <li>Подбор материалов</li>
                                <li>Развертки стен с указаниями материалов</li>
                                <li>Спецификация материалов</li>
                            </ul>
                        </div>
                        <div class="content-block__price">800 руб./м2</div>
                        <div class="content-block__button">
                            <div class="button button_yellow">Заказать</div>
                        </div>
                    </div>
                    <div class="content-block">
                        <div class="content-block__title">Расширенный дизайн-проект</div>
                        <div class="content-block__list">
                            <ul class="list-dotted list-dotted_yellow">
                                <li>Обмерный план</li>
                                <li>Планировочное решение с расстановкой мебели (2-3 варианта)</li>
                                <li>Визуализация интерьера к одному из вариантов перепланировки (не более двух эскизов на основные помещения)</li>
                                <li>Подбор материалов</li>
                                <li>Развертки стен с указаниями материалов</li>
                                <li>Спецификация материалов</li>
                                <li>Полный пакет рабочей документации (схемы канализации и водоснабжения, план напольного покрытия, план потолка, схемы электрики, маркировочный план дверных проемов).</li>
                            </ul>
                        </div>
                        <div class="content-block__price">1200 руб./м2</div>
                        <div class="content-block__button">
                            <div class="button button_yellow">Заказать</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_1920 container_gray relative">
            <div class="outside-img outside-img_right outside-img_ver-center">
                <img src="<?php get_uri('img/new/hammer.png')?>" alt="#">
            </div>
            <div class="container container_regular">
                <div class="steps-work">
                    <div class="steps-work__title title">Этапы работы:</div>
                    <div class="steps-work__content">
                        <ol class="list-numeric">
                            <li>Вы звоните нам или оставляете заявку</li>
                            <li>Мы договариваемся о бесплатном выезде нашего специалиста в удобное время</li>
                            <li>Перед выездом наш мастер связывается с Вами, подтверждая встречу</li>
                            <li>Доставляем матералы</li>
                            <li>Согласовываются условия и подписывается договор</li>
                            <li>Составляется ориентировочная смета на работы и черновые материалы</li>
                            <li>Вы оплачиваете работы поэтапно, по факту их выполнения</li>
                            <li>Ваш ремонт окончен качественно и в срок</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_regular">
            <div class="swiper-container review-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($review as $reviewItem):?>
                    <div class="swiper-slide">
                        <div class="quote">
                            <div class="quote__dash"></div>
                            <div class="quote__content oneHeight"><?php echo $reviewItem['text']?></div>
                            <div class="quote__dash"></div>
                            <div class="quote__author">
                                <span><?php echo $reviewItem['author']?></span>, <?php echo $reviewItem['date']?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_regular">
            <div class="price-list">
                <div class="price-list__title title">Цены</div>
                <div class="price-list__content">
                    <div class="accord-list">
                        <div class="accord-item">
                            <div class="accord-item__title"><span>Пол</span><span class="accord-item__arrow"></span></div>
                            <div class="accord-item__content">
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                            </div>
                        </div>
                        <div class="accord-item">
                            <div class="accord-item__title"><span>Стены</span><span class="accord-item__arrow"></span></div>
                            <div class="accord-item__content">
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                            </div>
                        </div>
                        <div class="accord-item">
                            <div class="accord-item__title"><span>Потолок</span><span class="accord-item__arrow"></span></div>
                            <div class="accord-item__content">
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                                <div class="accord-item__row">
                                    <span>Демонтаж ламината</span><span>60 руб./	кв.м</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container container_regular">
            <div class="contacts">
                <div class="contacts__title title">Контакты</div>
                <div class="contacts__content">
                    <div class="contacts__content_text">
                        <div class="title"><span>Строй Сити</span><span class="title-description">Центральный офис</span></div>
                        <div class="info">
                            <div class="address">119002, Иркутск, ул. Трактовая, 4/3</div>
                            <div class="phone"><a href="tel:+73952551010">+7 (3952) 55-10-10</a></div>
                            <div class="email">stroy_city@mail.ru</div>
                        </div>
                    </div>
                    <div class="contacts__content_map" id="newMap"></div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer()?>
