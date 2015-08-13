

$(document).ready(function() {

    var sections = $('.main-section')
        , nav = $('nav')
        , nav_height = nav.outerHeight();

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();

        sections.each(function() {
            var top = $(this).offset().top -100,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('li').removeClass('active');
                sections.removeClass('active');

                $(this).addClass('active');
                nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');
            }
        });
    });

    nav.find('a').on('click', function () {
        console.log('clicked');
        var $el = $(this)
            , id = $el.attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top - 50
        }, 2000, 'easeInOutExpo');

        return false;
    });

    $(function() {
        $( "#datepicker" ).datepicker();
    });


});

