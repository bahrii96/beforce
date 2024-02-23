(function ($) {
    $(document).ready(function () {
        // When the user scrolls the page, execute myFunction

        $('.grid-image').fancybox({
            buttons: ['zoom', 'slideShow', 'fullScreen', 'thumbs', 'close'],
            loop: true,
        });
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

        function showImagesForActiveAccordion() {
            var activeAccordionId = $('#accordion h3.ui-state-active').data('accordion-id');

            // Знімаємо активний клас з усіх елементів
            $('.services-block__image-box [data-accordion-id]').removeClass('active');

            // Додаємо активний клас лише для потрібних елементів
            $('.services-block__image-box [data-accordion-id="' + activeAccordionId + '"]').addClass('active');
        }

        $('#accordion').accordion({
            header: '> div > h3',
            heightStyle: 'content',
            activate: function (event, ui) {
                showImagesForActiveAccordion();
            },
        });

        showImagesForActiveAccordion();

        $('.services-block__item:has(.ui-state-active)').addClass('active');

        $('.services-block__item').on('click', function () {
            // Видаляємо клас 'active' у всіх елементів
            $('.services-block__item').removeClass('active');

            if ($(this).find('.ui-state-active').length) {
                $(this).addClass('active');
            }
        });
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 1.6,
            spaceBetween: 8,
            // centeredSlides: true,

            breakpoints: {
                767: {
                    slidesPerView: 4.2,
                    spaceBetween: 20,
                },
            },
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },
            autoplay: {
                delay: 5000,
            },
            loop: true,
        });

        $(document).on('touchstart', function (e) {
            if (!$(e.target).closest('nav').length && !$(e.target).hasClass('menu-toggle')) {
                $('.header .menu-toggle, .header nav').removeClass('is-active');
                $('body').removeClass('is-active');
            }
        });

        $('.header .menu-toggle, .header nav .close').click(function (e) {
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

        $('.header .side-bar-toggle').click(function (e) {
            $('body').addClass('fixed');
            $('body .side-bar').addClass('show');
        });

        $('body .side-bar .close-sidebar').click(function (e) {
            $('body').removeClass('fixed');
            $('body .side-bar').removeClass('show');
        });
    });
})(jQuery);

document.addEventListener(
    'wpcf7mailsent',
    function (event) {
        // Закриваємо попередній попап перед відкриттям нового
        $.fancybox.getInstance().close();

        // Відкриваємо новий попап
        $.fancybox.open({
            src: '#popup-answer',
            type: 'inline',
            opts: {
                afterClose: function () {
                    // Викликається після закриття другого попапа
                    // Додайте код, який ви хочете виконати після закриття другого попапа
                },
            },
        });
    },
    false,
);

