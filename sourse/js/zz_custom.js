(function($) {
    $(document).ready(function(){
        $('.b-map').height($('.b-map__content').outerHeight());

        $('.b-map__open').click(function(){
            $(this).animate({
                top: "-100%"
            }, 600, function(){
                $('.b-map__content').animate({
                    top: 0
                }, 600);
            });
            return false;
        });

        //tel-mask
        $(".b-form__text_tel").mask("(999) 999-9999");

        //placeholder
        $('.b-form__text').placeholder();

        if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 119) {
                    $('.b-header').addClass('fixed');
                } else {
                    $('.b-header').removeClass('fixed');
                }
                onScroll();
            });
        } else {
            $('.b-header').css('position', 'absolute');
        }

        //animaaion scroll
        var headheight= $('.b-header__menu').outerHeight();
        function scrollto_c(elem){
            $('html, body').animate({
                scrollTop: $(elem).offset().top - headheight - 5
            }, 500);
        }
        $('.anim-scroll').click(function(){
            scrollto_c($(this).attr('href'));
            return false;
        });

        //active mebu link
        function onScroll(event){
            var scrollPos = $(document).scrollTop()+200;
            $('.b-header__menu-list a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('.b-menu__list a').removeClass("active");
                    currLink.addClass("active");
                }
                else{
                    currLink.removeClass("active");
                }
            });
        }

        //popup
        $('.open-popup').colorbox({
            inline:true,
            close: "",
            //fixed: true,
        });
        $('.b-accessories__popup').colorbox({
            inline:true,
            close: "",
            //fixed: true,
            onOpen: function(){
                var item = $(this).closest('.b-accessories__item');
                var itemTitle = $('.b-accessories__title', item).html();
                $('#prod-type').val(itemTitle);
                $('.item-type').html(itemTitle);
            }
        });
        $('.wpcf7-response-output').click(function(){
            if($(this).hasClass('wpcf7-mail-sent-ok')){
                $.colorbox.close()
            } else {
                $(this).hide('fast');
            }
        });
    });

    $(window).load(function() {
        $('.b-reviews__slider').flexslider({
            directionNav: false,
            animation: "slide",
            slideshow: false
        });
    });
}(jQuery));