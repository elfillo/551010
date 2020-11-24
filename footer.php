    <footer class="footer">
        <div class="container container_regular">
            <div class="header-row">
                <div class="logo"><img src="<?php get_uri('img/icons/logo_footer.svg')?>" alt="Логотип"></div>
                <div class="title">Ремонт квартир в Иркутске</div>
            </div>
            <div class="body-row">
                <div class="info">
                    <div>г. Иркутск,</div>
                    <div>ул. Трактовая 4/3</div>
                    <div>тел.: +7 (3952) 55-10-10</div>
                </div>
                <div class="navigation">
	                <?php wp_nav_menu(array('theme_location'=>'Footer', 'menu_class'=>'footer-menu', 'container_class' => 'footer-menu-container') );?>
                </div>
            </div>
            <div class="copyright-row">© 2018 Ремонт квартир и коттеджей в Иркутске</div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
