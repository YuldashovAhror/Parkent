{{--=========POPUP BTN=========--}}

{{--=========POPUP BACK=========--}}
<div class="popup__back"></div>

{{--=========POPUP MAIN=========--}}
<div class="popup">
    <span class="close popup__close">
        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="15.5" cy="15.5" r="15.5" transform="rotate(90 15.5 15.5)" fill="white"/>
<path d="M12.2192 18.3569L18.3569 12.2192" stroke="#323232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.3569 18.357L12.2192 12.2193" stroke="#323232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
    </span>
    {{--=========POPUP FEEDBACK=========--}}
    <div class="popup__container" style="display: block">
        <h2 class="title general-B">Обратная связь</h2>
        <form action="" class="popup__form">
            <label for="popup__name" class="form__box">
                <input type="text" id="popup__name" class="general-R" placeholder="Ваше имя">
            </label>
            <label for="popup__tel" class="form__box">
                <input type="tel" id="popup__tel" class="general-R" placeholder="+998">
            </label>
            <button type="submit" class="form__btn general-R">Отправить заявку</button>
        </form>
        <p class="text general-R">Обращаем ваше внимание, что режим работы отдела продаж
            с 9:00 до 21:00</p>
    </div>
    {{--=========POPUP SUCCESS=========--}}
    <div class="popup__success" style="display: none">
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1_352)">
                <path d="M32.367 37.6336C31.7393 37.006 30.888 36.6533 30.0003 36.6533C29.1126 36.6533 28.2613 37.006 27.6336 37.6336C27.0059 38.2613 26.6533 39.1126 26.6533 40.0003C26.6533 40.888 27.0059 41.7393 27.6336 42.367L37.6336 52.367C37.9451 52.6759 38.3145 52.9203 38.7206 53.0862C39.1267 53.2521 39.5616 53.3362 40.0003 53.3336C40.4566 53.3192 40.9051 53.2111 41.318 53.0161C41.7308 52.8212 42.0992 52.5435 42.4003 52.2003L65.7336 25.5336C66.2724 24.8647 66.5322 24.0137 66.4588 23.1579C66.3854 22.3022 65.9845 21.5077 65.3397 20.9403C64.6949 20.3729 63.856 20.0763 62.9979 20.1123C62.1397 20.1483 61.3286 20.5142 60.7336 21.1336L40.0003 45.1336L32.367 37.6336Z" fill="#61C967"/>
                <path d="M69.9995 36.666C69.1155 36.666 68.2676 37.0172 67.6425 37.6423C67.0174 38.2675 66.6662 39.1153 66.6662 39.9994C66.6662 47.0718 63.8567 53.8546 58.8557 58.8555C53.8548 63.8565 47.072 66.666 39.9995 66.666C34.7332 66.6636 29.5854 65.1019 25.2054 62.1778C20.8254 59.2537 17.4093 55.0982 15.3878 50.2353C13.3663 45.3723 12.83 40.0197 13.8465 34.8523C14.863 29.685 17.3867 24.9343 21.0995 21.1994C23.5686 18.6973 26.5118 16.7128 29.7571 15.3621C33.0023 14.0113 36.4844 13.3214 39.9995 13.3327C42.131 13.346 44.2547 13.5919 46.3329 14.066C46.7678 14.2005 47.2256 14.2445 47.6781 14.1953C48.1307 14.1461 48.5684 14.0048 48.9642 13.7799C49.36 13.5551 49.7056 13.2516 49.9796 12.8881C50.2536 12.5246 50.4503 12.1088 50.5575 11.6664C50.6647 11.224 50.6801 10.7643 50.6028 10.3157C50.5256 9.86707 50.3572 9.43905 50.1082 9.05799C49.8591 8.67693 49.5347 8.35092 49.1548 8.10005C48.775 7.84919 48.3478 7.67878 47.8995 7.59935C45.31 6.99016 42.6597 6.67704 39.9995 6.66602C33.414 6.70023 26.9862 8.68442 21.5272 12.3682C16.0682 16.052 11.8228 21.2702 9.3266 27.3645C6.83043 33.4587 6.1954 40.1558 7.50166 46.6105C8.80791 53.0653 11.9969 58.9885 16.6662 63.6327C22.8552 69.8245 31.245 73.3123 39.9995 73.3327C48.8401 73.3327 57.3186 69.8208 63.5698 63.5696C69.821 57.3184 73.3329 48.8399 73.3329 39.9994C73.3329 39.1153 72.9817 38.2675 72.3566 37.6423C71.7314 37.0172 70.8836 36.666 69.9995 36.666Z" fill="#61C967"/>
            </g>
            <defs>
                <clipPath id="clip0_1_352">
                    <rect width="80" height="80" fill="white"/>
                </clipPath>
            </defs>
        </svg>
        <h3 class="title general-R">Ваша заявка успешно отправлена</h3>
        <p class="subtitle general-R">Наши менеджеры обязательно свяжутся с Вами
            и ответят на все Ваши вопросы.</p>
        <button class="popup__close general-M" type="button">Закрыть</button>
    </div>
</div>

{{--=========POPUP NEWS=========--}}
<div class="popup__news">
    <span class="close popup__news-close">
        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="15.5" cy="15.5" r="15.5" transform="rotate(90 15.5 15.5)" fill="white"/>
<path d="M12.2192 18.3569L18.3569 12.2192" stroke="#323232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.3569 18.357L12.2192 12.2193" stroke="#323232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
    </span>
    <div class="popup__news-container">
        <h2 class="popup__news-title general-M"></h2>
        <!-- /.popup__news-title -->
        <img src="" alt="" class="popup__news-img">
        <!-- /.popup__news-img -->
        <div class="popup__news-desc general-R"></div>
        <!-- /.popup__news-desc -->
    </div>
    <!-- /.popup__news-container -->
</div>
<!-- /.popup__news -->
