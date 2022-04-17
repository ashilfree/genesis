<!-- jquery js -->
<script src="{{ asset('assets/core/js/vendor/jquery-3.2.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/core/js/bootstrap.min.js') }}"></script>
<!-- carousel js -->
<script src="{{ asset('assets/core/js/owl.carousel.min.js') }}"></script>
<!-- counterup js -->
<script src="{{ asset('assets/core/js/jquery.counterup.min.js') }}"></script>
<!-- waypoints js -->
<script src="{{ asset('assets/core/js/waypoints.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/core/js/wow.js') }}"></script>
<!-- imagesloaded js -->
<script src="{{ asset('assets/core/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- venobox js -->
<script src="{{ asset('assets/core/js/venobox.js') }}"></script>
<!-- ajax mail js -->
<script src="{{ asset('assets/core/js/ajax-mail.js') }}"></script>
<!--  animated-text js -->
<script src="{{ asset('assets/core/js/animated-text.js') }}"></script>
<!-- venobox min js -->
<script src="{{ asset('assets/core/js/venobox.min.js') }}"></script>
<!-- isotope js -->
<script src="{{ asset('assets/core/js/isotope.pkgd.min.js') }}"></script>
<!-- jquery nivo slider pack js -->
<script src="{{ asset('assets/core/js/jquery.nivo.slider.pack.js') }}"></script>
<!-- jquery meanmenu js -->
<script src="{{ asset('assets/core/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/core/js/popper.min.js') }}"></script>
<!-- jquery scrollup js -->
<script src="{{ asset('assets/core/js/jquery.scrollUp.js') }}"></script>
<!-- slick js -->
<script src="{{ asset('assets/core/js/theme.js') }}"></script>
<!-- slick js -->
<script src="{{ asset('assets/core/js/slick.js') }}"></script>
<!-- slick js -->
<script src="{{ asset('assets/core/js/slick.min.js') }}"></script>
<!-- jquery js -->
<script src="{{ asset('assets/core/js/jquery.barfiller.js') }}"></script>
<!-- jquery js -->
@switch($page_name)
    @case('home')
    <script>
        $(document).ready(function(){
            $('#bar1').barfiller({ duration: 7000 });
            $('#bar2').barfiller({ duration: 7000 });
            $('#bar3').barfiller({ duration: 7000 });
        });
    </script>
        @break

    @case('about')
    <script>
        $(document).ready(function(){
            $('#bar3').barfiller({ duration: 7000 });
            $('#bar4').barfiller({ duration: 7000 });});
    </script>
        @break

    @default
    <script>console.log('No custom script available.')</script>
@endswitch
<!--faq jquery-->
<script>
    (function($) {
        $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

        $('.accordion a').click(function(j) {
            var dropDown = $(this).closest('li').find('p');

            $(this).closest('.accordion').find('p').not(dropDown).slideUp();

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.accordion').find('a.active').removeClass('active');
                $(this).addClass('active');
            }

            dropDown.stop(false, true).slideToggle();

            j.preventDefault();
        });
    })(jQuery);
</script>
<!--jave script -->
<script>
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    $('.go-top').on('click', function () {
        $("html, body").animate({
            scrollTop: "0"
        }, 1200);
    });
</script>
<!--jave script -->
<script>
    "use strict";
    jQuery(document).ready(function (o) {
        0 < o(".offset-side-bar").length &&
        o(".offset-side-bar").on("click", function (e) {
            e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
        }),
        0 < o(".close-side-widget").length &&
        o(".close-side-widget").on("click", function (e) {
            e.preventDefault(), o(".cart-group").removeClass("isActive");
        }),
        0 < o(".navSidebar-button").length &&
        o(".navSidebar-button").on("click", function (e) {
            e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
        }),
        0 < o(".close-side-widget").length &&
        o(".close-side-widget").on("click", function (e) {
            e.preventDefault(), o(".info-group").removeClass("isActive");
        }),
            o("body").on("click", function (e) {
                o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
            }),
            o(".xs-sidebar-widget").on("click", function (e) {
                e.stopPropagation();
            }),
        0 < o(".xs-modal-popup").length &&
        o(".xs-modal-popup").magnificPopup({
            type: "inline",
            fixedContentPos: !2,
            fixedBgPos: !0,
            overflowY: "auto",
            closeBtnInside: !2,
            callbacks: {
                beforeOpen: function () {
                    this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
                },
            },
        });
    });
</script>
