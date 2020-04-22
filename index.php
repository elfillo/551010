<?php get_header(); ?>
    <?php get_template_part('template_parts/causes'); ?>
    <div class="container">
        <?php get_template_part('template_parts/banners_section'); ?>
        <div class="page_content" style="width: 100%">
        <?php
            if ( have_posts() ){
                while ( have_posts() ){ the_post();
                    echo the_content();
                }
            } else {
                echo wpautop( 'Постов для вывода не найдено.' );
            }
        ?>
        </div>
        <?php get_template_part('template_parts/partners'); ?>
        <?php get_template_part('template_parts/why_we'); ?>
        <?php get_template_part('template_parts/allin_works'); ?>
        <?php get_template_part('template_parts/repairs_type'); ?>
        <?php get_template_part('template_parts/services'); ?>
        <?php get_template_part('template_parts/apartment_repairs_type'); ?>
        <?php get_template_part('template_parts/have_questions'); ?>
        <div class="page_content" style="width: 100%">
            <p style="padding-top: 10px">
                Ремонт квартир недорого в Иркутске от компании «СтройСити» широко известен заказчикам за счет комплексных, надежных решений, гарантирующих баланс красоты и надежности на годы интенсивной эксплуатации. Миссия компании – сделать мир вокруг вас безопаснее и красивее. В своей работе специалисты компании «СтройСити» следуют во время выполнения каждого проекта – услуга ремонт квартир недорого в Иркутске делает современное качество доступнее, с гарантией индивидуального отношения к поставленным задачам. Главной целью компании становится не сиюминутная выгода, а инвестиции в качество проектов и свою репутацию. Подтверждением такого отношения становятся свыше 260 успешно выполненных проектов, начиная с 2010-го года.
            </p>
            <p>
                Компания продолжает стабильное развитие, инвестируя в качество услуг. За годы успешной работы заказчики смогли на практике убедиться в качестве профессиональных решений, в которых учтена каждая деталь. Специалисты «СтройСити» гарантируют индивидуальный подход к каждому проекту, внимательно учтут специфику и особенности объекта и требования заказчика, чтобы определиться с оптимальным порядком действий и сметой выполнения заказа. Инвестируйте в качество и надежность профессиональных решений от специалистов, которые несут ответственность за результат.
            </p>
            <span style="font-weight: 700; padding: 10px 0;">Вы можете так же заказать:</span>
            <ul>
                <li>
                    <span class="red">Малоэтажное строительство</span> в Иркутске;                    
                </li>
                <li>
                    <span class="red">Ремонт и отделку помещений</span> (например: ремонт ванной комнаты, ремонт кухни, ремонт лоджий, ремонт прихожей и др.).   
                </li>
            </ul>
        </div>
        <?php get_template_part('template_parts/photo_gallery'); ?>
    </div>    
<?php get_footer(); ?>


