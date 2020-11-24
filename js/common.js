"use strict";
$(document).ready(function(){
    $('.show_all').click(function(){
        var list = this.parentNode.children[3];
        $(list).toggleClass('show_full_list');
        var shortView = $(list).hasClass('show_full_list');
        if(!shortView){
            $(this).text('Смотреть весь список');
        }else{
            $(this).text('Свернуть');
        }
    }); 
});
//open mobile menu
$(document).ready(function(){
    var showMenu = false;
    var menu = $('.mobile-menu ul');
    var transitionTime = '0.5s';
    var heightAnimateTime = 500;
    $('.burger').click(function(){
        showMenu = !showMenu;
        if(showMenu){
            $(menu).css({
                'overflow':'visible',
                'padding-bottom':'50px'
            });
            autoHeightAnimate(menu, heightAnimateTime);
            $('.burger span:nth-child(2)').css({
                'display':'none'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'rotate(45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':transitionTime
            });
            $('.burger span:nth-child(3)').css({
                'transform':'rotate(-45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':transitionTime
            });
        }else{
            $(menu).css({
                'overflow':'hidden',
                'padding-bottom':'0'
            });
            autoHeightAnimate(menu, heightAnimateTime);
            $('.burger span:nth-child(2)').css({
                'display':'block'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'none',
                'position':'static',
                'transition':transitionTime
            
            });
            $('.burger span:nth-child(3)').css({
                'transform':'none',
                'position':'static',
                'transition':transitionTime
            });
        }
    });
});

// стрелка вверх



$(document).ready(function(){   
    var scrollElem = document.getElementById("upstairs");
    $(window).scroll(function () {
   
    if ($(this).scrollTop() > 0) {  
        scrollElem.style.opacity = "1";
    } else {
        scrollElem.style.opacity = "0";
    }
    });

    $('#upstairs').click(function(){
        $('html').animate({scrollTop:0},1500);
        $('body').animate({scrollTop:0},1500);
    });
});


//выделение активной ссылки
$(function () {
    $(".header_nav_list li a").each(function () {
        window.location.href == this.href && $(this).addClass("active");
    })
});
$(function () {
    $(".side_nav_list li a").each(function () {
        window.location.href == this.href && $(this).addClass("active_side_nave");
    })
});
$(function () {
    $(".side_nav_list .sub-menu li a").each(function () {
        window.location.href == this.href && $(this).addClass("active_side_nave")
    })
});

$(function () {
    $(".header_nav--design li a").each(function () {
        window.location.href == this.href && $(this).parent().addClass("active_design");
    })
});

//hide modal window form
$(document).ready(function(){   
    $('.modal_show').click(function(){
        $('.modal_wrapper').css({'display':'flex'});
    });
    $('.modal_close').click(function(){
        $('.modal_wrapper').css({'display':'none'});
    });
});

//stick menu
$(function(){
     $(window).scroll(function() {
         if($(this).scrollTop() >= 110) {
            $('.header_nav').addClass('stickytop');
            $('.header_nav__mobile_list').addClass('stickytop_mobile_menu');
         }
         else{
            $('.header_nav').removeClass('stickytop');
            $('.header_nav__mobile_list').removeClass('stickytop_mobile_menu');
         }
     });
});
//stick advertising
$(document).ready(function(){
    if($(".advertising")[0] != undefined){
        var baner = $(".advertising").offset().top;
        var h = $(".advertising").height();
        var gallery = $(".photo_gallery").offset().top;
        var bottomOffSet = gallery - h;
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            if(scrollTop >= baner && bottomOffSet >= scrollTop){
                $(".advertising").addClass('banner_stckytop');
            }else{
                $(".advertising").removeClass('banner_stckytop');
            }
        });
    }
});

jQuery(document).ready(function($) {
    $('.oneHeight').matchHeight();
});

/*либа для высоты блоков*/
/**
 * jquery-match-height master by @liabru
 * http://brm.io/jquery-match-height/
 * License: MIT
 */

;(function(factory) { // eslint-disable-line no-extra-semi
    'use strict';
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof module !== 'undefined' && module.exports) {
        // CommonJS
        module.exports = factory(require('jquery'));
    } else {
        // Global
        factory(jQuery);
    }
})(function($) {
    /*
    *  internal
    */

    var _previousResizeWidth = -1,
        _updateTimeout = -1;

    /*
    *  _parse
    *  value parse utility function
    */

    var _parse = function(value) {
        // parse value and convert NaN to 0
        return parseFloat(value) || 0;
    };

    /*
    *  _rows
    *  utility function returns array of jQuery selections representing each row
    *  (as displayed after float wrapping applied by browser)
    */

    var _rows = function(elements) {
        var tolerance = 1,
            $elements = $(elements),
            lastTop = null,
            rows = [];

        // group elements by their top position
        $elements.each(function(){
            var $that = $(this),
                top = $that.offset().top - _parse($that.css('margin-top')),
                lastRow = rows.length > 0 ? rows[rows.length - 1] : null;

            if (lastRow === null) {
                // first item on the row, so just push it
                rows.push($that);
            } else {
                // if the row top is the same, add to the row group
                if (Math.floor(Math.abs(lastTop - top)) <= tolerance) {
                    rows[rows.length - 1] = lastRow.add($that);
                } else {
                    // otherwise start a new row group
                    rows.push($that);
                }
            }

            // keep track of the last row top
            lastTop = top;
        });

        return rows;
    };

    /*
    *  _parseOptions
    *  handle plugin options
    */

    var _parseOptions = function(options) {
        var opts = {
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        };

        if (typeof options === 'object') {
            return $.extend(opts, options);
        }

        if (typeof options === 'boolean') {
            opts.byRow = options;
        } else if (options === 'remove') {
            opts.remove = true;
        }

        return opts;
    };

    /*
    *  matchHeight
    *  plugin definition
    */

    var matchHeight = $.fn.matchHeight = function(options) {
        var opts = _parseOptions(options);

        // handle remove
        if (opts.remove) {
            var that = this;

            // remove fixed height from all selected elements
            this.css(opts.property, '');

            // remove selected elements from all groups
            $.each(matchHeight._groups, function(key, group) {
                group.elements = group.elements.not(that);
            });

            // TODO: cleanup empty groups

            return this;
        }

        if (this.length <= 1 && !opts.target) {
            return this;
        }

        // keep track of this group so we can re-apply later on load and resize events
        matchHeight._groups.push({
            elements: this,
            options: opts
        });

        // match each element's height to the tallest element in the selection
        matchHeight._apply(this, opts);

        return this;
    };

    /*
    *  plugin global options
    */

    matchHeight.version = 'master';
    matchHeight._groups = [];
    matchHeight._throttle = 80;
    matchHeight._maintainScroll = false;
    matchHeight._beforeUpdate = null;
    matchHeight._afterUpdate = null;
    matchHeight._rows = _rows;
    matchHeight._parse = _parse;
    matchHeight._parseOptions = _parseOptions;

    /*
    *  matchHeight._apply
    *  apply matchHeight to given elements
    */

    matchHeight._apply = function(elements, options) {
        var opts = _parseOptions(options),
            $elements = $(elements),
            rows = [$elements];

        // take note of scroll position
        var scrollTop = $(window).scrollTop(),
            htmlHeight = $('html').outerHeight(true);

        // get hidden parents
        var $hiddenParents = $elements.parents().filter(':hidden');

        // cache the original inline style
        $hiddenParents.each(function() {
            var $that = $(this);
            $that.data('style-cache', $that.attr('style'));
        });

        // temporarily must force hidden parents visible
        $hiddenParents.css('display', 'block');

        // get rows if using byRow, otherwise assume one row
        if (opts.byRow && !opts.target) {

            // must first force an arbitrary equal height so floating elements break evenly
            $elements.each(function() {
                var $that = $(this),
                    display = $that.css('display');

                // temporarily force a usable display value
                if (display !== 'inline-block' && display !== 'flex' && display !== 'inline-flex') {
                    display = 'block';
                }

                // cache the original inline style
                $that.data('style-cache', $that.attr('style'));

                $that.css({
                    'display': display,
                    'padding-top': '0',
                    'padding-bottom': '0',
                    'margin-top': '0',
                    'margin-bottom': '0',
                    'border-top-width': '0',
                    'border-bottom-width': '0',
                    'height': '100px',
                    'overflow': 'hidden'
                });
            });

            // get the array of rows (based on element top position)
            rows = _rows($elements);

            // revert original inline styles
            $elements.each(function() {
                var $that = $(this);
                $that.attr('style', $that.data('style-cache') || '');
            });
        }

        $.each(rows, function(key, row) {
            var $row = $(row),
                targetHeight = 0;

            if (!opts.target) {
                // skip apply to rows with only one item
                if (opts.byRow && $row.length <= 1) {
                    $row.css(opts.property, '');
                    return;
                }

                // iterate the row and find the max height
                $row.each(function(){
                    var $that = $(this),
                        style = $that.attr('style'),
                        display = $that.css('display');

                    // temporarily force a usable display value
                    if (display !== 'inline-block' && display !== 'flex' && display !== 'inline-flex') {
                        display = 'block';
                    }

                    // ensure we get the correct actual height (and not a previously set height value)
                    var css = { 'display': display };
                    css[opts.property] = '';
                    $that.css(css);

                    // find the max height (including padding, but not margin)
                    if ($that.outerHeight(false) > targetHeight) {
                        targetHeight = $that.outerHeight(false);
                    }

                    // revert styles
                    if (style) {
                        $that.attr('style', style);
                    } else {
                        $that.css('display', '');
                    }
                });
            } else {
                // if target set, use the height of the target element
                targetHeight = opts.target.outerHeight(false);
            }

            // iterate the row and apply the height to all elements
            $row.each(function(){
                var $that = $(this),
                    verticalPadding = 0;

                // don't apply to a target
                if (opts.target && $that.is(opts.target)) {
                    return;
                }

                // handle padding and border correctly (required when not using border-box)
                if ($that.css('box-sizing') !== 'border-box') {
                    verticalPadding += _parse($that.css('border-top-width')) + _parse($that.css('border-bottom-width'));
                    verticalPadding += _parse($that.css('padding-top')) + _parse($that.css('padding-bottom'));
                }

                // set the height (accounting for padding and border)
                $that.css(opts.property, (targetHeight - verticalPadding) + 'px');
            });
        });

        // revert hidden parents
        $hiddenParents.each(function() {
            var $that = $(this);
            $that.attr('style', $that.data('style-cache') || null);
        });

        // restore scroll position if enabled
        if (matchHeight._maintainScroll) {
            $(window).scrollTop((scrollTop / htmlHeight) * $('html').outerHeight(true));
        }

        return this;
    };

    /*
    *  matchHeight._applyDataApi
    *  applies matchHeight to all elements with a data-match-height attribute
    */

    matchHeight._applyDataApi = function() {
        var groups = {};

        // generate groups by their groupId set by elements using data-match-height
        $('[data-match-height], [data-mh]').each(function() {
            var $this = $(this),
                groupId = $this.attr('data-mh') || $this.attr('data-match-height');

            if (groupId in groups) {
                groups[groupId] = groups[groupId].add($this);
            } else {
                groups[groupId] = $this;
            }
        });

        // apply matchHeight to each group
        $.each(groups, function() {
            this.matchHeight(true);
        });
    };

    /*
    *  matchHeight._update
    *  updates matchHeight on all current groups with their correct options
    */

    var _update = function(event) {
        if (matchHeight._beforeUpdate) {
            matchHeight._beforeUpdate(event, matchHeight._groups);
        }

        $.each(matchHeight._groups, function() {
            matchHeight._apply(this.elements, this.options);
        });

        if (matchHeight._afterUpdate) {
            matchHeight._afterUpdate(event, matchHeight._groups);
        }
    };

    matchHeight._update = function(throttle, event) {
        // prevent update if fired from a resize event
        // where the viewport width hasn't actually changed
        // fixes an event looping bug in IE8
        if (event && event.type === 'resize') {
            var windowWidth = $(window).width();
            if (windowWidth === _previousResizeWidth) {
                return;
            }
            _previousResizeWidth = windowWidth;
        }

        // throttle updates
        if (!throttle) {
            _update(event);
        } else if (_updateTimeout === -1) {
            _updateTimeout = setTimeout(function() {
                _update(event);
                _updateTimeout = -1;
            }, matchHeight._throttle);
        }
    };

    /*
    *  bind events
    */

    // apply on DOM ready event
    $(matchHeight._applyDataApi);

    // use on or bind where supported
    var on = $.fn.on ? 'on' : 'bind';

    // update heights on load and resize events
    $(window)[on]('load', function(event) {
        matchHeight._update(false, event);
    });

    // throttled update heights on resize events
    $(window)[on]('resize orientationchange', function(event) {
        matchHeight._update(true, event);
    });

});
/*либа для высоты блоков*/

/*убирает кнопку отправить, если не стоит согласение*/

$('.form__group input[type="checkbox"]').on('change', function () {
   let form = $(this).closest('.form');
   let btn = $(form).find('.button');
   let checked = $(this).prop("checked");

   if(checked === false){
       $(btn).prop('disabled', true);
       $(btn).addClass('button-disabled');
   }else{
       $(btn).prop('disabled', false);
       $(btn).removeClass('button-disabled');
   }

});

$('.accord-item__title').click(function () {
    let arrow = $(this).find('.accord-item__arrow');
    let content = $(this).closest('.accord-item').find('.accord-item__content');
    $(this).closest('.accord-item').toggleClass('accord-item_active');
    $(arrow).toggleClass('accord-item__arrow_up');
    autoHeightAnimate(content, 500);
});

function autoHeightAnimate(element, time) {
    var curHeight = element.height();
    let needleHeight = curHeight > 0 ? 0 : 'auto';

    var autoHeight = element.css('height', needleHeight).outerHeight();
    element.height(curHeight);
    element.stop().animate({ height: autoHeight }, parseInt(time));
}

var mapScript = $.getScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
$.when(mapScript)
    .done(function () {

        ymaps.ready(init)
        function init() {

            var newMarkerCollection = new ymaps.GeoObjectCollection();
            var markerCollectio = [];
            var center = [52.310714, 104.236796];

            var myMap = new ymaps.Map("newMap", {
                center: center,
                zoom: 14,
                controls: []
            });

            myMap.behaviors.disable('scrollZoom');

            var placemark = setPlacemark(center);

            markerCollectio.push(placemark);
            newMarkerCollection.add(placemark);
            myMap.geoObjects.add(newMarkerCollection);

            setMapCenter(myMap, newMarkerCollection)
        }

        function setPlacemark(coords) {
            var placemark = new ymaps.Placemark(coords, {}, {
                iconLayout: 'default#image',
                iconImageHref: '/wp-content/themes/551010/img/icons/mapIcon.png',
                iconImageSize: [38, 38],
            });

            return placemark;
        }

        function setMapCenter(map, collection) {
            var centerAndZoom = ymaps.util.bounds.getCenterAndZoom(
                collection.getBounds(),
                map.container.getSize(),
                map.options.get('projection')
            );

            map.setCenter(centerAndZoom.center, 16);
        }
    })


/*модалка для формы обратной связи*/
$('.call-back-modal').click(function () {
    let title = $(this).attr('data-title');
    let title_block = $('#call-back-form').find('.form__title.title');


    if(title !== undefined){
        $(title_block).text(title);
    }else{
        $(title_block).text('Заполните форму обратной связи, чтобы оформить обратный звонок!');
    }

   $('.modal-call-back').css({'display':'flex'});
});

$(document).click(function (event) {
    if ($(event.target).is('.modal_wrapper')) {
        $('.modal_wrapper').css({'display':'none'});
    }
});

$(document).ready(function () {
   let ol = $('ol.list-numeric');
   let ul = $('ul.list-dotted');
   ol.map((k, item) => {
       let oneHeight = 0;
       let li = $(item).find('li');
       li.map((k, i) => {
           let itemHeight = $(i).height();
           if(itemHeight > oneHeight) oneHeight = itemHeight;
       });

       li.map((k, i) => {
           $(i).css({'height' : oneHeight});
       });
   });

    ul.map((k, item) => {
        let oneHeight = 0;
        let li = $(item).find('li');
        li.map((k, i) => {
            let itemHeight = $(i).height();
            if(itemHeight > oneHeight) oneHeight = itemHeight;
        });

        li.map((k, i) => {
            $(i).css({'height' : oneHeight});
        });
    });
});