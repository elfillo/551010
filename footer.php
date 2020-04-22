    <footer class="footer">
        <div class="footer__content">
            <div class="container">
                <div class="footer_logo">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/logo_new.png" alt="">
                    </a>
                </div>
                <div class="footer_menu">
                <?php wp_nav_menu(array('theme_location'=>'Footer', 'menu_class'=>'footer_menu__list') );?>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                    <span>© 2018 Ремонт квартир и коттеджей в Иркутске</span>
                    <span><a href="https://is.gd/RTdkaK">г. Иркутск, ул. Трактовая 4/3</a></span>
                    <span>Телефон: <a href="tel:+73952551010">+7 (3952) 55-10-10</a></span>
                    <span><a href="privacy-policy">Политика конфиденциальности</a></span>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGO73JZuXDz8xt_zvygl0FreR9cfQ9THE&callback=initMap"></script>
    <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

           ym(41299234, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/41299234" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87707059-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-87707059-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
    (function(){ var widget_id = '30ppeZvEcq';var d=document;var w=window;function l(){
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
    s.src = '//code.jivosite.com/script/widget/'+widget_id
        ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
    if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
    else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
