(function ($) {
    'use strict';

    //window load 
    $(window).load(function () {
        var masthead = $('#masthead');
        var headerHeight = $('#logo').outerHeight(true);
        //stick footer 
        stickyFooter();

        $(window).on('resize',_.throttle(function () {
            headerHeight = parseInt(masthead.outerHeight(true));
            //stick footer
            stickyFooter();
        }, 100));

        //menu
        masthead.affix({
            offset: {
                top: headerHeight + 60
            }
        });

        masthead.on('affix.bs.affix', function() {
            if (!masthead.hasClass('affix')){
                masthead.addClass('affix animated slideInDown');
            }
        });

        masthead.on('affixed-top.bs.affix', function() {
            masthead.removeClass('affix animated slideInDown');
        });


        //make footer stick to bottom
        function stickyFooter() {
            if (!$('.home').length) {
                //skip home page of this rule
                var footerHeight = $('.site-footer').height();
                $('#content').css('paddingBottom', (footerHeight > 80 ? footerHeight : 80));
            }

        }
    });

    $(document).ready(function () {

        // count up settings
        var options = {
            useEasing: true,
            useGrouping: true,
            separator: '',
            decimal: '',
            prefix: '',
            suffix: '',
        }

        if ($('.ztl-widget-numbers').length > 0) {
            // strat count up when div containg numbers is at the bottom of viewport        
            $('.ztl-widget-numbers').each(function () {
                var currentElm = $(this).attr('id');
                new Waypoint.Inview({
                    element: $('#' + currentElm)[0],
                    enter: function (direction) {
                        var elmWrpId = this.element.id;
                        if ($('#' + elmWrpId).data('count_up') == '0') {

                            $('#' + elmWrpId).data('count_up', '1');

                            $('#' + elmWrpId + ' .ztl-widget-number').each(function () {
                                var elmId = $(this).attr('id');
                                var elmNumber = $(this).data("value_no");
                                var elmInstance = new CountUp(elmId, 0, elmNumber, 0, 4, options);
                                elmInstance.start();
                            });
                        }
                    },
                });
            });
        }

        //init the pretty photo
        $("a[data-rel^='prettyPhoto']").prettyPhoto({social_tools: false});


        //fix background attachment issue for IOS
        if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
            $('.ztl-parallax-container').css('background-attachment', 'scroll');
        }



        //great looking logo on retina screens
        $('img').not('.logo-img').attr('data-no-retina', '');


        //make nice comments form 
        if ($('#commentform').length > 0) {
            $("#commentform label").each(function () {
                var item;
                var labelName;
                item = $(this).attr('for');
                labelName = $(this).text();
                if ($('#' + item).length > 0) {
                    $('#' + item).attr("placeholder", labelName);
                    $('#' + item).addClass('ztl-input');
                }
            });
        }

        $('#comments :submit').addClass('ztl-button');

        //Smooth scroll to top
        $(window).scroll(function () {
            if ($(this).scrollTop() > 400) {
                $('.ztl-scroll-top').fadeIn();
            } else {
                $('.ztl-scroll-top').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.ztl-scroll-top').on('click', function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });

        //Show/hide placeholder on focus
        $('input, textarea').each(function(){
            $(this).data('holder', $(this).attr('placeholder'));
        });

        $('input, textarea').focusin(function () {
            $(this).attr('placeholder', '');
        });
        $('input, textarea').focusout(function () {
            $(this).attr('placeholder', $(this).data('holder'));
        });

    });

}(jQuery));

