@extends('layouts.front.main')

@section('style')
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/fancybox.css">
@endsection
@section('content')
    <div class="preloader" style="display: none">
        <div class="preloader__logo">

        </div>
    </div>

    <div class="wrapper">
        <section class="section__main">
            <div class="main">
                <div class="swiper-container main__slider">
                    <div class="swiper-wrapper">
                        @foreach ($banners as $banner)
                            <div class="swiper-slide">
                                <div class="main__slider-frame" data-swiper-parallax-opacity="0">
                                    <div class="main__slider-photo" data-swiper-parallax="-100" data-swiper-parallax-scale="1.2">
                                        <div class="main__bg main__light">
                                            <img src="{{$banner->photo_night}}" alt="photo">
                                        </div>
                                        <!-- /.main__bg -->
                                        <div class="main__bg main__dark">
                                            <img src="{{$banner->photo_day}}" alt="photo">
                                        </div>
                                        <!-- /.main__bg -->
                                    </div>
                                    <div class="main__slider-caption general__container" data-swiper-parallax="0" data-swiper-parallax-opacity="0">
                                        <div class="main__slider-title general__regular" data-swiper-parallax-y="-200" data-swiper-parallax-scale=".8">
                                            <h1 class="main__title general-B">
                                                {!!$banner->title_uz!!}
                                                {{-- ЖИЗНЬ В УНИКАЛЬНОМ <span>РАЙОНЕ</span> В <span>ОКРУЖЕНИИ</span> ПРИРОДЫ --}}
                                            </h1>
                                            <!-- /.main__title -->
                                            <a href="" class="main__feedback general-M callback">Получить консультацию</a>
                                            <!-- /.main__feedback -->
                                        </div>
                                        <div class="main__slider-description" data-swiper-parallax="200">
                                            <div class="main__icon">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M27.5004 36.2502C27.5004 36.5817 27.3687 36.8996 27.1342 37.134C26.8998 37.3684 26.5819 37.5001 26.2504 37.5002H13.7504C13.4189 37.5002 13.1009 37.3685 12.8665 37.134C12.6321 36.8996 12.5004 36.5817 12.5004 36.2502C12.5004 35.9186 12.6321 35.6007 12.8665 35.3663C13.1009 35.1319 13.4189 35.0002 13.7504 35.0002H26.2504C26.5819 35.0002 26.8998 35.1319 27.1342 35.3663C27.3687 35.6007 27.5004 35.9186 27.5004 36.2502ZM33.7504 16.2502C33.7558 18.334 33.285 20.3914 32.374 22.2656C31.463 24.1397 30.1359 25.7809 28.4939 27.0639C28.1873 27.2988 27.9384 27.6007 27.7663 27.9464C27.5941 28.2921 27.5031 28.6726 27.5004 29.0588V30.0002C27.4996 30.663 27.236 31.2984 26.7673 31.7671C26.2986 32.2358 25.6632 32.4994 25.0004 32.5002H15.0004C14.3376 32.4994 13.7021 32.2358 13.2335 31.7671C12.7648 31.2984 12.5011 30.663 12.5004 30.0002V29.0578C12.4999 28.6756 12.4119 28.2987 12.2432 27.9558C12.0745 27.613 11.8295 27.3133 11.527 27.0798C9.88985 25.8049 8.56405 24.1744 7.64991 22.3116C6.73578 20.4488 6.25725 18.4025 6.25054 16.3275C6.2095 8.88032 12.2292 2.67915 19.6696 2.50398C21.5026 2.45989 23.3259 2.78285 25.0322 3.45384C26.7385 4.12484 28.2934 5.13032 29.6054 6.41113C30.9174 7.69195 31.96 9.22222 32.6718 10.9119C33.3837 12.6016 33.7504 14.4166 33.7504 16.2502ZM28.6272 14.782C28.3237 12.9967 27.4722 11.3502 26.191 10.0705C24.9097 8.79085 23.2621 7.94146 21.4765 7.64009C21.3146 7.61271 21.1489 7.61752 20.9888 7.65423C20.8287 7.69094 20.6775 7.75884 20.5436 7.85403C20.4098 7.94923 20.2961 8.06987 20.2089 8.20904C20.1217 8.34822 20.0628 8.50321 20.0356 8.66516C20.0083 8.82711 20.0133 8.99284 20.0501 9.15288C20.0869 9.31292 20.155 9.46413 20.2503 9.59788C20.3456 9.73162 20.4663 9.84527 20.6055 9.93234C20.7448 10.0194 20.8998 10.0782 21.0618 10.1053C22.3354 10.3203 23.5107 10.9262 24.4246 11.839C25.3385 12.7519 25.9458 13.9263 26.1623 15.1997C26.2117 15.4906 26.3623 15.7547 26.5876 15.9453C26.8128 16.1358 27.0982 16.2406 27.3933 16.241C27.4638 16.241 27.5342 16.2351 27.6037 16.2233C27.7655 16.1959 27.9204 16.1368 28.0594 16.0496C28.1985 15.9623 28.3189 15.8485 28.414 15.7146C28.509 15.5808 28.5768 15.4295 28.6134 15.2695C28.65 15.1095 28.6547 14.9438 28.6272 14.782Z" fill="#61C967"/>
                                                </svg>
                                                <svg class="d__none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.375 5.25L7 9.625L2.625 5.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <h2 class="content__title general-M">{{$banner->title2_uz}}</h2>
                                                <!-- /.main__title -->
                                                <div class="content__descr general-R">
                                                    {!!$banner->discription_uz!!}
                                                </div>
                                                <!-- /.main__descr -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="main__bottom">
                    <button class="main__slider-prev">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.125 18.0625L6.5625 11.5L13.125 4.9375" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="general-R">Назад</span>
                    </button>
                    <div class="main__slider-pagination"></div>
                    <button class="main__slider-next">
                        <span class="general-R">Вперед</span>
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.875 18.0625L14.4375 11.5L7.875 4.9375" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- /.main -->
        </section>
        <!-- /.section__main -->
        <section class="section__about">
            <div class="general__container">
                <div class="about">
                    <div class="about__content">
                        <h2 class="about__title general-B" data-aos="fade-right">О ЖК Parkent Gardens</h2>
                        <!-- /.about__title -->
                        <div class="about__subtitle general-R" data-aos="fade-right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                        <!-- /.about__subtitle -->
                        <div class="about__container">
                            <div class="about__box" data-aos="fade-up" data-aos-delay="100">
                                <img src="/img/icons/a-1.svg" alt="">
                                <span class="info general-B">3.5</span>
                                <!-- /.info -->
                                <p class="names general-R">Высота потолков</p>
                                <!-- /.names -->
                            </div>
                            <!-- /.about__box -->
                            <div class="about__box" data-aos="fade-up" data-aos-delay="200">
                                <img src="/img/icons/a-2.svg" alt="">
                                <span class="info general-B">45 - 110  м2</span>
                                <!-- /.info -->
                                <p class="names general-R">Площадь квартир</p>
                                <!-- /.names -->
                            </div>
                            <!-- /.about__box -->
                            <div class="about__box" data-aos="fade-up" data-aos-delay="300">
                                <img src="/img/icons/a-3.svg" alt="">
                                <span class="info general-B">216 мест</span>
                                <!-- /.info -->
                                <p class="names general-R">На парковке</p>
                                <!-- /.names -->
                            </div>
                            <!-- /.about__box -->
                            <div class="about__box" data-aos="fade-up" data-aos-delay="400">
                                <img src="/img/icons/a-4.svg" alt="">
                                <span class="info general-B">216 мест</span>
                                <!-- /.info -->
                                <p class="names general-R">На парковке</p>
                                <!-- /.names -->
                            </div>
                            <!-- /.about__box -->
                            <div class="about__box" data-aos="fade-up" data-aos-delay="500">
                                <img src="/img/icons/a-5.svg" alt="">
                                <span class="info general-B">216 мест</span>
                                <!-- /.info -->
                                <p class="names general-R">На парковке</p>
                                <!-- /.names -->
                            </div>
                            <!-- /.about__box -->
                            <div class="about__box" data-aos="fade-up" data-aos-delay="600">
                                <img src="/img/icons/a-6.svg" alt="">
                                <span class="info general-B">45 - 110  м2</span>
                                <!-- /.info -->
                                <p class="names general-R">Площадь квартир</p>
                                <!-- /.names -->
                            </div>
                            <!-- /.about__box -->
                            <div class="about__box" data-aos="fade-up" data-aos-delay="700">
                                <img src="/img/icons/a-7.svg" alt="">
                                <span class="info general-B">216 мест</span>
                                <!-- /.info -->
                                <p class="names general-R">На парковке</p>
                                <!-- /.names -->
                            </div>
                            <!-- /.about__box -->
                            <div class="about__box" data-aos="fade-up" data-aos-delay="800">
                                <img src="/img/icons/a-8.svg" alt="">
                                <span class="info general-B">3.5</span>
                                <!-- /.info -->
                                <p class="names general-R">Высота потолков</p>
                                <!-- /.names -->
                            </div>
                            <!-- /.about__box -->
                        </div>
                        <!-- /.about__container -->
                    </div>
                    <!-- /.about__content -->
                    <div class="about__images">
                        <div class="about__images-one" data-aos="fade-down" data-aos-delay="100">
                            <img src="/img/bg/about-2.png" alt="" >
                        </div>
                        <div class="about__images-two" data-aos="fade-down-left" data-aos-delay="400">
                            <img src="/img/bg/about-1.png" alt="">
                        </div>
                        <!-- /.about__images-one -->
                    </div>
                    <!-- /.about__images -->
                </div>
                <!-- /.about -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__about -->
        <section class="section__layouts">
            <div class="layouts__wrap" id="genplan">
                <div class="layouts__genplan">
                    <div class="layouts__top">
                        <h2 class="layouts__title general-B">Генплан проекта</h2>
                        <div class="layouts__subtitle">
                            <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.754 4.92396L10.6664 20.6903C10.7247 20.8458 10.8293 20.9797 10.966 21.074C11.1028 21.1682 11.2651 21.2183 11.4312 21.2175C11.5973 21.2167 11.7591 21.165 11.8949 21.0693C12.0307 20.9737 12.134 20.8388 12.1907 20.6827L14.5593 14.1691C14.5999 14.0575 14.6644 13.9562 14.7483 13.8723C14.8323 13.7883 14.9336 13.7238 15.0452 13.6832L21.5588 11.3146C21.7149 11.2579 21.8498 11.1546 21.9454 11.0188C22.041 10.883 22.0928 10.7212 22.0936 10.5551C22.0944 10.389 22.0443 10.2267 21.9501 10.0899C21.8558 9.95317 21.7219 9.84859 21.5664 9.79028L5.80006 3.8779C5.65399 3.82313 5.49523 3.81156 5.34276 3.84459C5.1903 3.87761 5.05056 3.95384 4.94025 4.06415C4.82993 4.17446 4.75371 4.3142 4.72069 4.46667C4.68766 4.61913 4.69923 4.77789 4.754 4.92396Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.7483 13.8721L22.0013 21.1251" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="general-R">наведите на объект, что бы узнать больше информации</p>
                        </div>
                        <!-- /.layouts__subtitle -->
                    </div>
                    <div class="layouts__genplan-img">
                        <img src="/img/genplan/genplan.jpg" alt="layouts">
                        <svg width="1920" height="868" viewBox="0 0 1920 868" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                data-tower="Здание № 1"
                                data-first="от 49 м2"
                                data-second="от 60 м2"
                                data-third="от 72 м2"
                                data-fourth="от 84 м2"
                                data-fith="от 101 м2" d="M579.5 390.5L546 368L481.5 403V407.5L463.5 415.5L491.5 622.5L501.5 631V642L568.5 688L574 684.5L588.5 693.5L683.5 639L664 461.5L626 437.5L620 440.5L616 405.5L586 387L579.5 390.5Z" fill="#61C967" fill-opacity="0.5" stroke="#61C967" stroke-width="5"/>
                        </svg>
                    </div>
                    <div class="layouts__genplan-numbers">
                        <?php for ($sl = 1; $sl <= 9; $sl++):?>
                        <div class="layouts__genplan-wrap general-R">
                            Здание № <?php echo $sl ?>
                        </div>
                        <?php endfor ?>
                    </div>
                </div>
                <div class="layouts__info">
                    <div class="layouts__info-wrap">
                        <h3 class="layouts__info-title">Здание № 1</h3>
                        <!-- /.layouts__info-title -->
                        <ul class="layouts__info-list">
                            <li>
                                <p class="general-R">1 - комнатная -</p>
                                <!-- /.general-R -->
                                <span class="general-B flat__1"></span>
                                <!-- /.general-B --></li>
                            <li>
                                <p class="general-R">2 - комнатная -</p>
                                <!-- /.general-R -->
                                <span class="general-B flat__2"></span>
                                <!-- /.general-B --></li>
                            <li>
                                <p class="general-R">3 - комнатная -</p>
                                <!-- /.general-R -->
                                <span class="general-B flat__3"></span>
                                <!-- /.general-B --></li>
                            <li>
                                <p class="general-R">4 - комнатная -</p>
                                <!-- /.general-R -->
                                <span class="general-B flat__4"></span>
                                <!-- /.general-B --></li>
                            <li>
                                <p class="general-R">5 - комнатная -</p>
                                <!-- /.general-R -->
                                <span class="general-B flat__5"></span>
                                <!-- /.general-B --></li>
                        </ul>
                        <!-- /.layouts__info-list -->
                    </div>
                    <!-- /.layouts__info-wrap -->
                </div>
                <!-- /.layouts__info -->
            </div>
        </section>
        <!-- /.section__layouts -->
        <section class="section__flat">
            <div class="general__container">
                <div class="flat__top">
                    <h2 class="flat__title general-B" data-aos="fade-right">Подбор квартиры</h2>
                    <!-- /.flat__title -->
                    <p class="flat__subtitle general-R" data-aos="fade-right">Жилой комплекс <span class="general-M">Parkent Gardens</span> предлагает <strong>1-, 2-, 3- и 4</strong>-комнатные квартиры с классическими и европейскими планировками площадью <strong>от 41,7 до 110,6 м2.</strong></p>
                    <!-- /.flat__subtitle -->
                </div>
                <!-- /.flat__top -->
                <div class="flat">
                    <ul class="flat__list" data-aos="fade-right">

                    </ul>
                    <!-- /.flat__list -->
                    <div class="flat__slider-container" data-aos="fade-up">
                        <?php for ($sl = 1; $sl <= 5; $sl++):?>
                        <div class="flat__main">
                            <div class="swiper flat__slider" data-slider-id="slider-<?php echo $sl ?>">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="flat__slider-item" data-swiper-parallax-opacity="0">
                                            <img src="/img/flat/1.png" alt="" data-swiper-parallax="-100" data-swiper-parallax-scale="1.2">
                                            <div class="flat__info">
                                                <ul class="flat__slider-list">
                                                        <?php for ($li = 1; $li < 4; $li++):?>
                                                    <li>
                                                        <p class="flat__name general-R">Прихожая</p>
                                                        <span class="flat__number general-B"> 21.5м²</span>
                                                        <!-- /.flat__number -->
                                                    </li>
                                                    <?php endfor ?>
                                                </ul>
                                                <!-- /.flat__slider-list -->
                                                <div class="flat__slider-square">68.9 м2</div>
                                                <!-- /.flat__square -->
                                                <div class="flat__slider-price">32</div>
                                                <!-- /.flat__price -->
                                                <div class="flat__slider-plan">План 1</div>
                                                <!-- /.flat__slider-plan -->
                                            </div>
                                            <!-- /.flat__info -->
                                        </div>
                                        <!-- /.flat__slider -->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="flat__slider-item">
                                            <img src="/img/flat/1.png" alt="">
                                            <div class="flat__info">
                                                <ul class="flat__slider-list">
                                                        <?php for ($li = 1; $li <= 4; $li++):?>
                                                    <li>
                                                        <p class="flat__name general-R">Прихожая</p>
                                                        <span class="flat__number general-B"> 21.5м²</span>
                                                        <!-- /.flat__number -->
                                                    </li>
                                                    <?php endfor ?>
                                                </ul>
                                                <!-- /.flat__slider-list -->
                                                <h5 class="flat__slider-square">68.9 м2</h5>
                                                <!-- /.flat__square -->
                                                <h5 class="flat__slider-price">32</h5>
                                                <!-- /.flat__price -->
                                            </div>
                                            <!-- /.flat__info -->
                                        </div>
                                        <!-- /.flat__slider -->
                                    </div>
                                </div>
                                <div class="flat__slider-bottom">
                                    <button class="flat__slider-prev">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.9941 16.743L6.64407 10.393L12.9941 4.04297" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <!-- Add Pagination -->
                                    <div class="flat__pagination"></div>
                                    <!-- Add Navigation -->
                                    <button class="flat__slider-next">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.00589 16.743L14.3559 10.393L8.00589 4.04297" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <!-- /.flat__slider-bottom -->
                            </div>
                        </div>
                        <!-- /.flat__main -->
                        <?php endfor ?>
                    </div>
                    <!-- /.flat__slider-container -->

                    <form class="flat__config" data-aos="fade-left">
                        <div class="top">
                            <h3 class="flat__plan general-B"></h3>
                            <label for="flat__block" class="flat__block">
                                <select name="" id="flat__block">
                                    <option value="" >Здание </option>
                                </select>
                                <!-- /# -->
                            </label>
                            <!-- /.flat__block -->
                        </div>
                        <!-- /.top -->
                        <div class="flat__box">
                            <spam class="flat__box-name general-M">Комнат:</spam>
                            <!-- /.flat__box-name -->
                            <div class="flat__filter">
                                <?php for ($i = 1; $i <= 5; $i++):?>
                                <span class="general-B"><?php echo $i ?></span>
                                <?php endfor ?>
                            </div>
                            <!-- /.flat__filter -->
                        </div>
                        <!-- /.flat__box -->
                        <div class="flat__box">
                            <span class="flat__box-name general-M">Площадь:</span>
                            <!-- /.flat__box-name -->
                            <h4 class="flat__square-number general-B"></h4>
                        </div>
                        <!-- /.flat__box -->
                        <div class="flat__box">
                            <span class="flat__box-name general-M">Цена:</span>
                            <!-- /.flat__box-name -->
                            <div class="flat__price">
                                <span class="general-M">от</span>
                                <h4 class="general-R">
                                    <span class="number general-B"></span> млн сум
                                    <!-- /.number -->
                                </h4>
                            </div>
                        </div>
                        <!-- /.flat__box -->
                        <a href="" class="flat__feedback popup__btn">Узнать стоимость</a>
                        <!-- /.flat__feedback -->
                    </form>
                    <!-- /.flat__config -->
                </div>
                <!-- /.flat -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__flat -->
        <section class="section__contacts">
            <div class="map" id="map"></div>
            <!-- /#map.map -->
            <div class="general__container">
                <div class="contacts" data-aos="fade-right">
                    <h2 class="contacts__title general-B">Локация</h2>
                    <!-- /.contacts__title -->
                    <ul class="contacts__list">
                        <li>
                            <div class="top">
                                <img src="/img/icons/contacts.svg" alt="address">
                                <span class="general-R">Адрес 1</span>
                            </div>
                            <!-- /.top -->
                            <p class="contacts__address general-R">г. Ташкент, ул. Ойбека 38а</p>
                            <!-- /.contacts__address -->
                        </li>
                        <li>
                            <div class="top">
                                <img src="/img/icons/contacts.svg" alt="address">
                                <span class="general-R">Адрес 2</span>
                            </div>
                            <!-- /.top -->
                            <p class="contacts__address general-R">г. Ташкент, пересечение проспекта Бунёдкор и ул. Коратош</p>
                            <!-- /.contacts__address -->
                        </li>
                        <li>
                            <div class="top">
                                <img src="/img/icons/contacts.svg" alt="address">
                                <span class="general-R">Адрес 3</span>
                            </div>
                            <!-- /.top -->
                            <p class="contacts__address general-R">г. Ташкент, Юнусабадский район, Ифтихор, 1А
                            </p>
                            <!-- /.contacts__address -->
                        </li>
                    </ul>
                    <!-- /.contacts__list -->
                    <div class="contacts__container">
                        <div class="messengers">
                            <a href="" class="messengers__link">
                                <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24.3529" cy="24.3529" r="24.3529" fill="white"/>
                                    <path d="M35.1765 24.3528C35.1765 18.3999 30.3059 13.5293 24.3529 13.5293C18.4 13.5293 13.5294 18.3999 13.5294 24.3528C13.5294 29.7646 17.4529 34.2293 22.5941 35.0411V27.4646H19.8882V24.3528H22.5941V21.9175C22.5941 19.2116 24.2176 17.7234 26.6529 17.7234C27.8706 17.7234 29.0882 17.994 29.0882 17.994V20.6999H27.7353C26.3824 20.6999 25.9765 21.5116 25.9765 22.3234V24.3528H28.9529L28.4118 27.4646H25.8412V35.1764C31.2529 34.3646 35.1765 29.7646 35.1765 24.3528Z" fill="black" fill-opacity="0.39"/>
                                </svg>
                            </a>
                            <a href="" class="messengers__link">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24.9994" cy="24.9115" r="24.3529" fill="white"/>
                                    <path d="M12.9581 24.5169C18.769 21.9852 22.6438 20.3162 24.5825 19.5098C30.1181 17.2074 31.2683 16.8074 32.018 16.7941C32.1829 16.7913 32.5516 16.8322 32.7904 17.026C32.9921 17.1896 33.0476 17.4106 33.0741 17.5658C33.1007 17.7209 33.1337 18.0743 33.1075 18.3505C32.8075 21.5023 31.5095 29.151 30.8492 32.6812C30.5697 34.1749 30.0196 34.6757 29.4869 34.7247C28.3294 34.8313 27.4504 33.9598 26.3293 33.2248C24.5749 32.0748 23.5838 31.359 21.8809 30.2368C19.9129 28.9399 21.1887 28.2271 22.3103 27.0622C22.6038 26.7574 27.7039 22.1184 27.8026 21.6976C27.815 21.6449 27.8264 21.4487 27.7099 21.3452C27.5933 21.2416 27.4213 21.277 27.2972 21.3052C27.1212 21.3451 24.3186 23.1975 18.8894 26.8624C18.0939 27.4087 17.3733 27.6748 16.7278 27.6609C16.0161 27.6455 14.647 27.2585 13.6293 26.9276C12.381 26.5219 11.3889 26.3073 11.4753 25.6182C11.5203 25.2593 12.0146 24.8922 12.9581 24.5169Z" fill="black" fill-opacity="0.39"/>
                                </svg>
                            </a>
                            <a href="" class="messengers__link">
                                <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24.6469" cy="24.9115" r="24.3529" fill="white"/>
                                    <path d="M25.0528 14.7648C28.0292 14.7648 28.4351 14.7648 29.6528 14.7648C30.7351 14.7648 31.2763 15.0354 31.6822 15.1706C32.2234 15.4412 32.6292 15.5765 33.0351 15.9824C33.441 16.3883 33.7116 16.7942 33.8469 17.3354C33.9822 17.7412 34.1175 18.2824 34.2528 19.3648C34.2528 20.5824 34.2528 20.853 34.2528 23.9648C34.2528 27.0765 34.2528 27.3471 34.2528 28.5648C34.2528 29.6471 33.9822 30.1883 33.8469 30.5942C33.5763 31.1354 33.441 31.5412 33.0351 31.9471C32.6292 32.353 32.2234 32.6236 31.6822 32.7589C31.2763 32.8942 30.7351 33.0295 29.6528 33.1648C28.4351 33.1648 28.1645 33.1648 25.0528 33.1648C21.941 33.1648 21.6704 33.1648 20.4528 33.1648C19.3704 33.1648 18.8292 32.8942 18.4234 32.7589C17.8822 32.4883 17.4763 32.353 17.0704 31.9471C16.6645 31.5412 16.394 31.1354 16.2587 30.5942C16.1234 30.1883 15.9881 29.6471 15.8528 28.5648C15.8528 27.3471 15.8528 27.0765 15.8528 23.9648C15.8528 20.853 15.8528 20.5824 15.8528 19.3648C15.8528 18.2824 16.1234 17.7412 16.2587 17.3354C16.5292 16.7942 16.6645 16.3883 17.0704 15.9824C17.4763 15.5765 17.8822 15.3059 18.4234 15.1706C18.8292 15.0354 19.3704 14.9001 20.4528 14.7648C21.6704 14.7648 22.0763 14.7648 25.0528 14.7648ZM25.0528 12.7354C21.941 12.7354 21.6704 12.7354 20.4528 12.7354C19.2351 12.7354 18.4234 13.0059 17.7469 13.2765C17.0704 13.5471 16.394 13.953 15.7175 14.6295C15.041 15.3059 14.7704 15.8471 14.3645 16.6589C14.094 17.3354 13.9587 18.1471 13.8234 19.3648C13.8234 20.5824 13.8234 20.9883 13.8234 23.9648C13.8234 27.0765 13.8234 27.3471 13.8234 28.5648C13.8234 29.7824 14.094 30.5942 14.3645 31.2706C14.6351 31.9471 15.041 32.6236 15.7175 33.3001C16.394 33.9765 16.9351 34.2471 17.7469 34.653C18.4234 34.9236 19.2351 35.0589 20.4528 35.1942C21.6704 35.1942 22.0763 35.1942 25.0528 35.1942C28.0292 35.1942 28.4351 35.1942 29.6528 35.1942C30.8704 35.1942 31.6822 34.9236 32.3587 34.653C33.0351 34.3824 33.7116 33.9765 34.3881 33.3001C35.0645 32.6236 35.3351 32.0824 35.741 31.2706C36.0116 30.5942 36.1469 29.7824 36.2822 28.5648C36.2822 27.3471 36.2822 26.9412 36.2822 23.9648C36.2822 20.9883 36.2822 20.5824 36.2822 19.3648C36.2822 18.1471 36.0116 17.3354 35.741 16.6589C35.4704 15.9824 35.0645 15.3059 34.3881 14.6295C33.7116 13.953 33.1704 13.6824 32.3587 13.2765C31.6822 13.0059 30.8704 12.8706 29.6528 12.7354C28.4351 12.7354 28.1645 12.7354 25.0528 12.7354Z" fill="black" fill-opacity="0.39"/>
                                    <path d="M25.0528 18.1471C21.8057 18.1471 19.2351 20.7177 19.2351 23.9648C19.2351 27.2118 21.8057 29.7824 25.0528 29.7824C28.2998 29.7824 30.8704 27.2118 30.8704 23.9648C30.8704 20.7177 28.2998 18.1471 25.0528 18.1471ZM25.0528 27.753C23.0234 27.753 21.2645 26.1295 21.2645 23.9648C21.2645 21.9354 22.8881 20.1765 25.0528 20.1765C27.0822 20.1765 28.841 21.8001 28.841 23.9648C28.841 25.9942 27.0822 27.753 25.0528 27.753Z" fill="black" fill-opacity="0.39"/>
                                    <path d="M31.0057 19.3648C31.7529 19.3648 32.3587 18.759 32.3587 18.0118C32.3587 17.2646 31.7529 16.6589 31.0057 16.6589C30.2585 16.6589 29.6528 17.2646 29.6528 18.0118C29.6528 18.759 30.2585 19.3648 31.0057 19.3648Z" fill="black" fill-opacity="0.39"/>
                                </svg>
                            </a>
                            <!-- /.messengers__link -->
                        </div>
                        <!-- /.messengers -->
                        <a href="{{$header->pdf}}" download="" class="contacts__download">
                            <img src="/img/icons/contacts__download.svg" alt="">
                            <span class="general-B">Скачать презентацию</span>
                        </a>
                        <!-- /.contacts__download -->
                    </div>
                    <!-- /.contacts__container -->
                </div>
                <!-- /.contacts -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__contacts -->
        <section class="section__info">
            <div class="general__container">
                <div class="info">
                    <div class="swiper-container info__slider">
                        <div class="swiper-wrapper">
                            @foreach ($secondbanner as $second)
                                <div class="swiper-slide">
                                    <div class="info__slider-frame" data-swiper-parallax-opacity="0">
                                        <div class="info__slider-photo" data-swiper-parallax="-100" data-swiper-parallax-scale="1.2">
                                            <img src="{{$second->photo}}" alt="photo">
                                        </div>
                                        <div class="info__slider-caption" data-swiper-parallax="0" data-swiper-parallax-opacity="0">
                                            <div class="info__slider-description" data-swiper-parallax="200">
                                                <h2 class="info__title general-B">{{$second->title_uz}}</h2>
                                                <!-- /.info__title -->
                                                <div class="info__descr general-R">{!!$second->discription_uz!!}</div>
                                                <!-- /.info__descr -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- @dd($header) --}}
                    <div class="info__bottom">
                        <a href="" class="checking general-M popup__btn">Выбрать квартиру</a>
                        <!-- /.checking -->
                        <a href="{{$header->pdf}}" download="" class="download d__desc">
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.90454 10.8446C6.8407 10.7788 6.79005 10.7006 6.75549 10.6146C6.72094 10.5286 6.70315 10.4364 6.70314 10.3433C6.70313 10.2502 6.72091 10.158 6.75545 10.072C6.78999 9.98597 6.84062 9.90781 6.90446 9.84197C7.03337 9.709 7.20823 9.63429 7.39057 9.63427C7.48085 9.63426 7.57025 9.65259 7.65366 9.68821C7.73707 9.72384 7.81286 9.77605 7.87671 9.84188L10.3125 12.3531V4.13867C10.3125 3.95064 10.3849 3.7703 10.5139 3.63734C10.6428 3.50438 10.8177 3.42969 11 3.42969C11.1823 3.42969 11.3572 3.50438 11.4861 3.63734C11.6151 3.7703 11.6875 3.95064 11.6875 4.13867V12.3531L14.1233 9.84188C14.1871 9.77605 14.2629 9.72383 14.3463 9.68821C14.4298 9.65259 14.5192 9.63426 14.6094 9.63427C14.6997 9.63428 14.7891 9.65262 14.8725 9.68826C14.9559 9.72389 15.0317 9.77612 15.0955 9.84196C15.1594 9.9078 15.21 9.98596 15.2446 10.072C15.2791 10.158 15.2969 10.2502 15.2969 10.3433C15.2969 10.4364 15.2791 10.5286 15.2445 10.6146C15.21 10.7006 15.1593 10.7788 15.0955 10.8446L11.4861 14.5658C11.3572 14.6988 11.1823 14.7734 11 14.7734C10.8177 14.7734 10.6428 14.6988 10.5139 14.5658L6.90454 10.8446ZM18.5625 13.3555C18.3802 13.3555 18.2053 13.4302 18.0764 13.5631C17.9474 13.6961 17.875 13.8764 17.875 14.0645V19.0273H4.125V14.0645C4.125 13.8764 4.05257 13.6961 3.92364 13.5631C3.7947 13.4302 3.61984 13.3555 3.4375 13.3555C3.25516 13.3555 3.0803 13.4302 2.95136 13.5631C2.82243 13.6961 2.75 13.8764 2.75 14.0645V19.0273C2.75042 19.4033 2.89542 19.7637 3.15319 20.0295C3.41096 20.2954 3.76046 20.4449 4.125 20.4453H17.875C18.2395 20.4449 18.589 20.2954 18.8468 20.0295C19.1046 19.7637 19.2496 19.4033 19.25 19.0273V14.0645C19.25 13.8764 19.1776 13.6961 19.0486 13.5631C18.9197 13.4302 18.7448 13.3555 18.5625 13.3555Z" fill="#61C967"/>
                            </svg>
                            <p class="general-R">Презентация
                                <span>Скачать{{$header->pdf_size}}мб</span>
                            </p>
                        </a>
                        <!-- /.download -->
                        <div class="info__buttons " >
                            <button class="info__slider-prev">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.9941 16.743L6.64407 10.393L12.9941 4.04297" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="d__none">
                                <a href="{{$header->pdf}}" download="" class="download">
                                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.90454 10.8446C6.8407 10.7788 6.79005 10.7006 6.75549 10.6146C6.72094 10.5286 6.70315 10.4364 6.70314 10.3433C6.70313 10.2502 6.72091 10.158 6.75545 10.072C6.78999 9.98597 6.84062 9.90781 6.90446 9.84197C7.03337 9.709 7.20823 9.63429 7.39057 9.63427C7.48085 9.63426 7.57025 9.65259 7.65366 9.68821C7.73707 9.72384 7.81286 9.77605 7.87671 9.84188L10.3125 12.3531V4.13867C10.3125 3.95064 10.3849 3.7703 10.5139 3.63734C10.6428 3.50438 10.8177 3.42969 11 3.42969C11.1823 3.42969 11.3572 3.50438 11.4861 3.63734C11.6151 3.7703 11.6875 3.95064 11.6875 4.13867V12.3531L14.1233 9.84188C14.1871 9.77605 14.2629 9.72383 14.3463 9.68821C14.4298 9.65259 14.5192 9.63426 14.6094 9.63427C14.6997 9.63428 14.7891 9.65262 14.8725 9.68826C14.9559 9.72389 15.0317 9.77612 15.0955 9.84196C15.1594 9.9078 15.21 9.98596 15.2446 10.072C15.2791 10.158 15.2969 10.2502 15.2969 10.3433C15.2969 10.4364 15.2791 10.5286 15.2445 10.6146C15.21 10.7006 15.1593 10.7788 15.0955 10.8446L11.4861 14.5658C11.3572 14.6988 11.1823 14.7734 11 14.7734C10.8177 14.7734 10.6428 14.6988 10.5139 14.5658L6.90454 10.8446ZM18.5625 13.3555C18.3802 13.3555 18.2053 13.4302 18.0764 13.5631C17.9474 13.6961 17.875 13.8764 17.875 14.0645V19.0273H4.125V14.0645C4.125 13.8764 4.05257 13.6961 3.92364 13.5631C3.7947 13.4302 3.61984 13.3555 3.4375 13.3555C3.25516 13.3555 3.0803 13.4302 2.95136 13.5631C2.82243 13.6961 2.75 13.8764 2.75 14.0645V19.0273C2.75042 19.4033 2.89542 19.7637 3.15319 20.0295C3.41096 20.2954 3.76046 20.4449 4.125 20.4453H17.875C18.2395 20.4449 18.589 20.2954 18.8468 20.0295C19.1046 19.7637 19.2496 19.4033 19.25 19.0273V14.0645C19.25 13.8764 19.1776 13.6961 19.0486 13.5631C18.9197 13.4302 18.7448 13.3555 18.5625 13.3555Z" fill="#61C967"/>
                                    </svg>
                                    <p class="general-R">Презентация
                                        <span>Скачать {{$header->pdf_size}}мб</span>
                                    </p>
                                </a>
                                <!-- /.download -->
                            </div>
                            <!-- /.d__none -->
                            <button class="info__slider-next">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00589 16.743L14.3559 10.393L8.00589 4.04297" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- /.info__bottom -->
                </div>
                <!-- /.info -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__info -->
        <section class="section__news">
            <div class="general__container">
                <div class="news__top">
                    <h2 class="title general-B" data-aos="fade-right">Новости и акции</h2>
                    <!-- /.title -->
                    <div class="news__buttons d__desc" data-aos="fade-left">
                        <button class="news__slider-prev">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.9941 16.743L6.64407 10.393L12.9941 4.04297" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="news__slider-next">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00589 16.743L14.3559 10.393L8.00589 4.04297" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- /.news__top -->
                <div class="swiper news__slider" data-aos="fade-up" data-aos-delay="400">
                    <div class="swiper-wrapper">
                        @foreach ($news as $new)
                            <div class="swiper-slide">
                                <div class="news__item">
                                    <div class="news__pic">
                                        <img src="{{$new->photo}}" alt="">
                                    </div>
                                    <!-- /.news__pic -->
                                    <div class="news__item-content">
                                        <h4 class="news__title general-M">{{$new->name_uz}}</h4>
                                        <!-- /.news__title -->
                                        <div class="news__description general-R">
                                            {!!$new->discription_uz!!}
                                        </div>
                                        <!-- /.news__description -->
                                        <a href="#" class="news__more">
                                            <span class="general-M">Подробнее</span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 17L16 12L11 7" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                        <!-- /.news__more -->
                                    </div>
                                    <!-- /.news__item-content -->
                                </div>
                                <!-- /.news__item -->
                            </div>
                            @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="news__mob d__none">
                    <div class="news__buttons">
                        <button class="news__slider-prev">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.9941 16.743L6.64407 10.393L12.9941 4.04297" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="news__slider-next">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00589 16.743L14.3559 10.393L8.00589 4.04297" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- /.news__mob -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__news -->
        <section class="section__feedback">
            <div class="general__container">
                <div class="feedback__container">
                    <h2 class="feedback__title general-M">Получить консультацию специалиста
                    </h2>
                    <!-- /.feedback__title -->
                    <p class="feedback__subtitle general-R">Закажите в один клик обратный звонок!</p>
                    <!-- /.feedback__subtitle -->
                    <form class="feedback__form">
                        <label for="feedback__name" class="feedback__box">
                            <input id="feedback__name" type="text" required placeholder="Ваше имя" class="general-R">
                        </label>
                        <label for="feedback__tel" class="feedback__box">
                            <input id="feedback__tel" type="tel" required placeholder="+998" pattern="^[0-9-+\s()]*$">
                            <img src="/img/icons/uzb.png" alt="">
                        </label>
                        <button type="submit" class="feedback__btn">Заказать звонок</button>
                        <!-- /.feedback__box -->
                    </form>
                    <!-- /.feedback__form -->
                </div>
                <!-- /.feedback__container -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__feedback -->
    </div>
    <!-- /.wrapper -->
    @include('components.front.footer')
@endsection

@section('script')
    <script src="/js/swiper.min.js"></script>
    <script src="/js/fancybox.umd.js"></script>
@endsection

