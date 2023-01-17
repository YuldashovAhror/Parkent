"use strict";
var preloader    = $('.preloader'),
    imagesCount  = $('img').length,
    dBody        = $('body'),
    percent      = 100 / imagesCount,
    progress     = 0,
    imgSum       = $('img').length,
    loadedImg    = 0;


for (var i = 0; i < imagesCount; i++) {
    var img_copy        = new Image();
    img_copy.src        = document.images[i].src;
    img_copy.onload     = img_load;
    img_copy.onerror    = img_load;
}

function img_load () {
    progress += percent;
    loadedImg++;
    if (progress >= 100 || loadedImg == imagesCount) {

        setTimeout(function () {
            preloader.delay(100).slideUp('slow');
        }, 5000)
        dBody.css('overflow', '');
    }
}


$(window).on('load', function () {

    $("#switch-check").click(function() {
        if ($("input[type=checkbox]").prop("checked")) {
            $('.switcher__toggle').removeClass('switcher__toggle-on');
            $('.switcher__btn-right').removeClass('active');
            $('.switcher__btn-left').addClass('active');
            $('.wrapper').removeClass('wrapper-black');
            $('.main__dark').removeClass('active')
        } else {
            $('.switcher__toggle').addClass('switcher__toggle-on');
            $('.switcher__btn-right').addClass('active');
            $('.switcher__btn-left').removeClass('active');
            $('.wrapper').addClass('wrapper-black');
            $('.main__dark').addClass('active')
        }
    });

    $('.callback, .popup__btn').click( (event)=> {
        event.preventDefault();
        $('.popup__back').slideDown('200')
        setTimeout(()=> {
            $('.popup').fadeIn('200');
        }, 250)
    });

    $('.news__item-content .news__more').click(function (event) {
        event.preventDefault();
        let newsSrc = $(this).parent().parent().children().find('img').attr('src');
        let newsTitle = $(this).parent().find('.news__title').html();
        let newsDesc = $(this).parent().find('.news__description').html();

        $('.popup__news-title').html(newsTitle);
        $('.popup__news-img').attr('src', newsSrc);
        $('.popup__news-desc').html(newsDesc);

        $('.popup__back').slideDown('200')
        setTimeout(()=> {
            $('.popup__news').fadeIn('200');
        }, 250)
    })

    $('.popup__close').click(()=> {
        $('.popup').fadeOut('200');
        setTimeout(()=> {
            $('.popup__back').slideUp('200');
        }, 250)
    });

    $('.popup__news-close').click(()=> {
        $('.popup__news').fadeOut('200');
        setTimeout(()=> {
            $('.popup__back').slideUp('200');
        }, 250)
    })

    $('.menu__cat').click(function (event) {
        event.preventDefault();
        $(this).parent().toggleClass('active')
        $(this).parent().children('.box__links').slideToggle('200')
    })

    let swiperMain = new Swiper('.main__slider', {
        slidesPerView: 1,
        speed: 800,
        parallax: true,
        loop: true,
        effect: 'fade',
        // autoplay: {
        //     delay: 2000,
        // },
        navigation: {
            prevEl: '.main__slider-prev',
            nextEl: '.main__slider-next',
        },
        pagination: {
            el: ".main__slider-pagination",
        },
    });

    if ($(window).width()>960) {
        function init() {
            if (document.layers) document.captureEvents(Event.MOUSEMOVE);
            document.onmousemove = mousemove;
        }

        function mousemove(event) {
            let mouse_x = 0
            let mouse_y = 0;
            if (document.attachEvent != null) {
                mouse_x = window.event.clientX;
                mouse_y = window.event.clientY;
            } else if (!document.attachEvent && document.addEventListener) {
                mouse_x = event.clientX;
                mouse_y = event.clientY;
            }

            $('.layouts__info').css('top', mouse_y+'px')
            $('.layouts__info').css('left', mouse_x+'px')
        }

        init()
    }


    $('.layouts__genplan-img svg path').mouseenter(function() {
        $('.layouts__info').css({
            opacity: '1',
            visibility: 'visible'
        })

        $('.flat__1').text($(this).data('first'))
        $('.flat__2').text($(this).data('second'))
        $('.flat__3').text($(this).data('third'))
        $('.flat__4').text($(this).data('fourth'))
        $('.flat__5').text($(this).data('fith'))

        if($(this).data('reserved') == 1) {
            $('.layouts__info').addClass('reserved')
        }
    })

    $('.layouts__genplan-img svg path').mouseleave(function() {
        $('.layouts__info').css({
            opacity: '0',
            visibility: 'hidden'
        }).removeClass('reserved')
    })

//=============================FLAT===========================================
    let showFlat = index => {
        $('.flat__filter span').removeClass('active')
        $('.flat__main').css('display', 'none')
        $('.flat__main').removeClass('flat__slider-active')
        $('.flat__main').css('opacity', '0')
        $('.flat__filter span').eq(index).addClass('active')
        $('.flat__main').eq(index).css('display', 'block')
        $('.flat__main').eq(index).addClass('flat__slider-active')
        setTimeout(() => {
            $('.flat__main').eq(index).css('opacity', '1');


            let swiper_list = $("[data-slider-id]");
            $(swiper_list).each(function() {
                let swiper_slider_id = $(this).attr('data-slider-id');
                let swiperFlat = new Swiper('.flat__slider', {
                    slidesPerView: 1,
                    speed: 800,
                    parallax: true,
                    loop: true,
                    effect: 'fade',
                    pagination: {
                        el: '.flat__pagination',
                        clickable: true,
                    },
                    navigation: {
                        prevEl: '.flat__slider-prev',
                        nextEl: '.flat__slider-next',
                    },

                    on: {
                        init: function () {
                            updateClasses(this);
                        },
                        slideChange:function () {
                            updateClasses(this);
                        }
                    }
                });
            });


            function updateClasses({ $el, slides, activeIndex }) {
                $('.flat__list').html('')
                let flatList = slides.eq(activeIndex).find('.flat__slider-list').html();
                let flatSquare = slides.eq(activeIndex).find('.flat__slider-square').html();
                let flatPrice = slides.eq(activeIndex).find('.flat__slider-price').html();
                let flatPlan = slides.eq(activeIndex).find('.flat__slider-plan').html();

                setTimeout(function (){
                    $('.flat__list').html(flatList);
                    $('.flat__square-number').html(flatSquare);
                    $('.flat__price .number').html(flatPrice);
                    $('.flat__plan').html(flatPlan);
                }, 200)
            }
        }, 500)
    }
    showFlat($('.flat__filter span').length - 1)

    $('.flat__filter span').click(function () {
        let index = $(this).index('.flat__filter span')
        showFlat(index)
    })
    // swiperFlat.on('init', function () {
    //
    // });
    // swiperFlat.on('slideChange', function () {
    //
    // });
    //=============================FLAT===========================================

    let swiperInfo = new Swiper('.info__slider', {
        slidesPerView: 1,
        speed: 800,
        parallax: false,
        loop: true,
        effect: 'fade',
        autoplay: {
            delay: 2000,
        },
        navigation: {
            prevEl: '.info__slider-prev',
            nextEl: '.info__slider-next',
        },
    });

    let swiperNews = new Swiper(".news__slider", {
        slidesPerView: 4,
        spaceBetween: 25,
        loop: false,
        navigation: {
            nextEl: ".news__slider-next",
            prevEl: ".news__slider-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 1.1,
                spaceBetween: 16,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 25,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 25,
            },
            1300: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
        },
    });


    $('button.header__btn').click(function (event) {
        event.preventDefault();
        $('.menu').slideToggle();
        $(this).toggleClass('active');
        $('.header').toggleClass('active');
    })

    const animItems = document.querySelectorAll(`.anima-blocks`)
    if (animItems.length > 0) {
        window.addEventListener(`scroll`, animOnScroll)

        function animOnScroll() {
            for (let index = 0; index < animItems.length; index++) {
                const animItem = animItems[index]
                const animItemHeight = animItem.offsetHeight
                const animItemOffSet = offset(animItem).top
                const animStart = 4;
                let animItemPoint = window.innerHeight - animItemHeight / animStart
                if (animItemHeight > window.innerHeight) {
                    animItemPoint = window.innerHeight - window.innerHeight / animStart
                }
                if ((pageYOffset > animItemOffSet - animItemPoint) && pageYOffset < (animItemOffSet + animItemHeight)) {
                    animItem.classList.add(`anima-active`)
                } else {
                    if (!(animItem.classList.contains(`_anim-no-hide`))) {
                        // animItem.classList.remove(`anima-active`)
                    }
                }
            }
        }

        function offset(el) {
            const rect = el.getBoundingClientRect()
            let scrollLeft = window.pageXOffset || document.documentElement.scrollLeft
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop
            return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
        }

        setTimeout(() => {
            animOnScroll()
        }, 1000)
    }


    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

});
