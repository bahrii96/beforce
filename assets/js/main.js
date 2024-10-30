(function ($) {
    $(document).ready(function () {
        // When the user scrolls the page, execute myFunction

        window.onscroll = function () {
            myFunction();
        };
        var header = document.querySelector('header');
        var sticky = header.offsetTop;
        function myFunction() {
            if (window.pageYOffset > 30) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        }

        $('#accordion').accordion({
            header: '> div > h3',
            heightStyle: 'content',
            collapsible: true,
        });

        // $(document).on('touchstart', function (e) {
        //     if (!$(e.target).closest('nav').length && !$(e.target).hasClass('menu-toggle')) {
        //         $('.header .menu-toggle, .header nav').removeClass('is-active');
        //         $('body').removeClass('is-active');
        //     }
        // });

        $('.header .menu-toggle, .header nav ').click(function (e) {
            $('.header .menu-toggle, .header nav').toggleClass('is-active');
            $('body').toggleClass('is-active');
        });

        $('.header nav ul li.menu-item-has-children .icon').click(function () {
            const listItem = $(this).parent('li');
            $(this).toggleClass('rotate');
            listItem.toggleClass('is-active');
            if ($(this).hasClass('rotate')) {
                $(this).next().addClass('toggled');
            } else {
                $(this).next().removeClass('toggled');
            }
        });
        $('.header nav ul li.menu-item a').click(function () {
            $('.header .menu-toggle, .header nav').toggleClass('is-active');
            $('body').toggleClass('is-active');
        });

			 var swiper = new Swiper('.collection-block__swiper', {
                 slidesPerView: 1.3,
                 spaceBetween: 8,

                 breakpoints: {
                     767: {
                         slidesPerView: 4,
                         spaceBetween: 16,
                     },
                     1300: {
                         slidesPerView: 5,
                         spaceBetween: 16,
                     },
                 },
                 speed: 1000,
                //  autoplay: {
                //      delay: 3000,
                //  },
                 loop: true,
             });

			
        var swiper = new Swiper('.product-block__swiper', {
            slidesPerView: 1.3,
            spaceBetween: 8,

            breakpoints: {
                767: {
                    slidesPerView: 2.6,
                    spaceBetween: 16,
                },
                1300: {
                    slidesPerView: 3.6,
                    spaceBetween: 16,
                },
            },
            speed: 1000,
            autoplay: {
                delay: 1500,
            },
            loop: true,
        });

        var swiper = new Swiper('.mySwiper2', {
            slidesPerView: 1,
            spaceBetween: 32,

            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },
            speed: 2000,
            autoplay: {
                delay: 5000,
            },
            loop: true,
        });

        $('[data-fancybox]').fancybox({
            loop: false, // Вимкнути циклічне перемикання
            touch: false,
        });
    });
})(jQuery);

document.addEventListener(
    'wpcf7mailsent',
    function (event) {
        window.location.href = '/success'; // URL сторінки, на яку хочете зробити редирект
    },
    false,
);



