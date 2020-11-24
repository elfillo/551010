<?php
	$repairLevel = [
		[
			'img' => 'img/new/flat_repair_1.png',
			'title' => 'Ремонт класса "Эконом"',
			'id'    => 'repairLowLevel',
			'sub-title' =>'
				Демонтаж помещения <br/> 
				Шпаклевка потолков, стен <br/> 
				Покраска потолков, стен <br/> 
				Удаление обоев и наклейка новых',
			'price' => ['1 900', '1 500']
		],
		[
			'img' => 'img/new/flat_repair_2.png',
			'title' => 'Ремонт класса "Комфорт"',
			'id'    => 'repairComfortLevel',
			'sub-title' =>'
					Демонтажные и монтажные работы <br/> 
					Полная замена электропроводки <br/> 
					Замена труб водоснабжения <br/> 
					+ Дизайн-проект в подарок',
			'price' => ['3 500', '2 900']
		],
		[
			'img' => 'img/new/flat_repair_3.png',
			'title' => 'Ремонт класса "Люкс"',
			'id'    => 'repairLuxLevel',
			'sub-title' =>'
                Разработка инженерных проектов
                Демонтажные и монтажные работы  <br/>
                Устройство вентиляции <br/> 
                + Дизайн-проект в подарок 
				',
			'price' => ['6 900', '5 800']
		],
		[
			'img' => 'img/new/flat_repair_4.png',
			'title' => 'Элитный ремонт',
			'id'    => 'repairEliteLevel',
			'sub-title' =>'
					Разработка инженерных проектов <br/>
                    Демонтажные и монтажные работы <br/>
                    Устройство вентиляции <br/>
                    + Дизайн-проект в подарок',
			'price' => ['12 000']
		],
	];

	$repairLowLevel = [
	  'id'    => 'repairLowLevel',
	  'title' => 'Ремонт класса "Эконом"',
      'text'  => 'Самый и быстрый бюджетный вид ремонта. В него входят шпаклевочные работы, окрашивание поверхности стены и потолка. Поклейка обоев, установка розеток и выключателей также входит в стоимость работ. Происходит замена сантехники, укладывается ламинат или линолеум, а также монтируются двери',
      'plan'  => [
            'Демонтаж помещения',
            'Шпаклевка потолков, стен',
            'Покраска потолков, стен',
            'Удаление обоев и наклейка новых',
            'Замена розеток, выключателей',
            'Замена сантехники',
            'Укладка ламината, линолеума',
            'Устройство карнизов, плинтусов',
            'Замена дверей',
      ],
      'price' => [
              'Стоимость всех работ за квадратный метр' => '1 500 руб./кв.м.',
              'Стоимость материалов за квадратный метр' => '+ 1 000 руб./кв.м.'
      ],
    ];
	$repairComfortLevel = [
	    'id'    => 'repairComfortLevel',
		'title' => 'Ремонт класса «Комфорт»',
		'text'  => 'Эта ступень предполагает капитальный ремонт, включающий монтаж систем инженерии (электричество и сантехника). Здесь предполагается выравнивание всех поверхностей (стены, потолки и пол) с применением бюджетных материалов. Используемые материалы: обои, ламинат, плитка, краска и т.д. Зачастую, дизайн-проект не используется.',
		'plan'  => [
			'Дизайн-проект в подарок',
            'Демонтажные и монтажные работы',
            'Полная замена электропроводки',
            'Замена труб водоснабжения',
            'Выравнивание пола (стяжка)',
            'Монтаж межкомнатных перегородок',
            'Выравнивание стен и потолков',
            'Шпаклевка стен и потолков',
            'Укладка плитки, мозаики',
            'Укладка ламината, линолеума, паркетной доски',
            'Покраска потолка, устройство натяжного потолка',
            'Поклейка обоев',
            'Уборка квартиры',
		],
		'price' => [
			'Стоимость всех работ за квадратный метр' => '2 900 руб./кв.м.',
			'Стоимость материалов за квадратный метр' => '+ 2 000 руб./кв.м.'
		],
	];
	$repairLuxLevel = [
	    'id'    => 'repairLuxLevel',
		'title' => 'Ремонт класса "Люкс"',
		'text'  => 'Выполняется по оригинальному дизайн-проекту. Выравнивание всех поверхностей происходит под нулевой уровень.  Используются материалы более высокого качества и применяются современные технологии. В качестве материалов мы используем декоративную штукатурку, многокомпонентную краску, паркетную или массивную доску, многоуровневые потолки из гипса.',
		'plan'  => [
			'Дизайн-проект в подарок',
            'Разработка инженерных проектов',
            'Демонтажные и монтажные работы',
            'Устройство вентиляции',
            'Устройство слаботочной системы',
            'Полная замена электропроводки',
            'Замена труб водоснабжения, отопления',
            'Установка кондиционеров',
            'Выравнивание пола (стяжка)',
            'Выравнивание стен и потолков',
            'Монтаж многоуровневых потолочных конструкций',
            'Шпаклевка стен и потолков',
            'Укладка керамогранита, плитки, мозаики',
            'Монтаж гипсовых изделий',
            'Устройств декоративной штукатурки',
            'Укладка художественного паркета',
            'Покраска стен и потолка',
            'Уборка квартиры',
		],
		'price' => [
			'Стоимость всех работ за квадратный метр' => '5 800 руб./кв.м.',
			'Стоимость материалов за квадратный метр' => '+ 4 000 руб./кв.м.'
		],
	];
	$repairEliteLevel = [
	    'id'    => 'repairEliteLevel',
		'title' => 'Элитный ремонт',
		'text'  => 'Выполняется по детализированному дизайну под присмотром автора. Здесь идет подборка материалов мебели. Применяются дорогие технологии и материалы эксклюзивного класса. Используем венецианскую штукатурку под имитацию отделки мрамором или малахитом, штучного художественного паркета, витражей, кованных изделий, лепнины из гипса и т.д.',
		'plan'  => [
			'Дизайн-проект в подарок',
            'Разработка инженерных проектов',
            'Демонтажные и монтажные работы',
            'Устройство вентиляции',
            'Устройство слаботочной системы',
            'Полная замена электропроводки',
            'Замена труб водоснабжения, отопления',
            'Установка кондиционеров',
            'Выравнивание пола (стяжка)',
            'Выравнивание стен и потолков',
            'Монтаж многоуровневых потолочных конструкций',
            'Шпаклевка стен и потолков',
            'Укладка керамогранита, плитки, мозаики',
            'Монтаж гипсовых изделий',
            'Устройств декоративной штукатурки',
            'Укладка художественного паркета',
            'Покраска стен и потолка',
            'Уборка квартиры',
		],
		'price' => [
			'Стоимость всех работ за квадратный метр' => '12 000 руб./кв.м.',
			'Стоимость материалов за квадратный метр' => '+ 6 000 руб./кв.м.'
		],
	];

	$modals = [$repairLowLevel, $repairComfortLevel, $repairLuxLevel, $repairEliteLevel];
?>
<div class="list-cards">
	<div class="list-cards__title title">Уровень ремонта квартиры</div>
	<div class="list-cards__list">
		<?php foreach ($repairLevel as $item):?>
			<div class="card">
				<div class="card__img card__img-big"><img src="<?php get_uri($item['img'])?>" alt="<?php echo $item['title']?>"></div>
				<div class="card__title"><?php echo $item['title']?></div>
				<div class="card__sub-title"><?php echo $item['sub-title']?></div>
				<?php foreach ($item['price'] as $p):?>
					<div class="card__title">от <?php echo $p?> руб./кв.м.</div>
				<?php endforeach;?>
				<div class="card__button button button_yellow" onclick="openRepairModal(<?php echo $item['id']?>)">Полный план работ</div>
			</div>
		<?php endforeach;?>
	</div>
</div>
<?php foreach ($modals as $modal):?>
<div class="modal_wrapper modal-flat-repair-level" id="<?php echo $modal['id']?>">
    <div class="modal">
        <div class="title"><?php echo $modal['title']?></div>
        <div class="text"><?php echo $modal['text']?></div>
        <div class="list">
            <div class="list__title">Полный план работ</div>
            <div class="list__list">
                <ul>
                    <?php foreach ($modal['plan'] as $item):?>
                        <li><?php echo $item?></li>
                    <?php unset($item); endforeach;?>
                </ul>
            </div>
        </div>
        <div class="price">
	        <?php foreach ($modal['price'] as $name => $price):?>
                <div class="item">
                    <div class="name"><?php echo $name?></div>
                    <div class="count"><?php echo $price?></div>
                </div>
		    <?php unset($item); endforeach;?>
        </div>
        <div class="close">
            <div class="button button_yellow" onclick="closeRepairModal()">Назад</div>
        </div>
    </div>
</div>
<?php endforeach;?>
<script>
    function openRepairModal(modal) {
        $(modal).css({'display':'flex'});
    }
    function closeRepairModal() {
        let self = event.target;
        let modal = $(self).closest('.modal_wrapper');
        $(modal).css({'display':'none'});
    }
</script>