<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="antialiased">
        <div id="main-page">
            <header class="py-3">
                <div class="container d-flex flex-wrap justify-content-center">
                    <a href="/" class="mb-3 mb-lg-0 me-lg-auto logo-block">
                        <img src="{{ asset('img/main/logo.svg') }}" alt="">
                        <span class="header__separator"></span>
                        <span>Ваш дом - <br> Умный дом</span>
                    </a>
                    <div class="header__contacts header-contacts">
                        <div class="header-contacts__item">
                            <span class="header__separator"></span>
                            <div>
                                <span class="header-contacts__title">город Алматы</span>
                                <span>ул. Гоголя 22 а</span>
                            </div>
                        </div>
                        <div class="header-contacts__item">
                            <span class="header__separator"></span>
                            <div>
                                <a href="tel:77714613215" class="header-contacts__title">+7 771 461 32 15</a>
                                <span>с 09:00 до 19:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="header__callback">
                        <a href="#">
                            <img src="{{ asset('img/icons/telegram.svg') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/icons/whatsapp.svg') }}" alt="">
                        </a>
                        <button class="btn btn-primary">
                            Заказать звонок
                        </button>
                    </div>
                </div>
            </header>

            <nav class="navbar navbar-expand-lg navbar-light main-navbar py-0">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav w-100 justify-content-between main-navbar__ul">
                            <li class="nav-item nav-item__active">
                                <a class="nav-link" href="#">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Вакансии</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">О компании</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Новости</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section class="section promo">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 promo__info">
                            <span class="promo__separator separator">
                                <svg
                                    width="88"
                                    height="18"
                                    viewBox="0 0 88 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="
                                            M3.0437 16.6711L9.36935 4.54967C10.1506 3.05262
                                            12.2929 3.05262 13.0742 4.54967L17.5474 13.1215C18.3287
                                            14.6185 20.471 14.6185 21.2523 13.1215L25.7255
                                            4.54967C26.5067 3.05262 28.6491 3.05262 29.4303
                                            4.54967L33.9036 13.1215C34.6848 14.6185 36.8271 14.6185
                                            37.6084 13.1215L42.0816 4.54967C42.8629 3.05262 45.0052
                                            3.05262 45.7865 4.54967L50.2597 13.1215C51.0409 14.6185
                                            53.1833 14.6185 53.9645 13.1215L58.4378 4.54967C59.219
                                            3.05262 61.3613 3.05262 62.1426 4.54967L66.6158
                                            13.1215C67.3971 14.6185 69.5394 14.6185 70.3207
                                            13.1215L74.7939 4.54967C75.5751 3.05262 77.7175 3.05262
                                            78.4987 4.54967L84.8244 16.6711
                                        "
                                        stroke="#7CB935"
                                        stroke-width="5.22371"
                                    />
                                </svg>
                            </span>
                            <h2 class="promo__title">Установка домофонных систем</h2>
                            <div class="promo__desc">
                                Установка и обслуживание домофонных систем и
                                систем видеонаблюдения
                            </div>
                            <div class="promo__buttons">
                                <button class="btn btn-primary">Оставить заявку</button>
                                <a href="#" class="btn btn-outline-primary">Калькулятор</a>
                            </div>
                        </div>
                        <div class="col-lg-6 promo__banner text-end">
                            <img src="{{ asset('img/main/promo-img.png') }}" class="promo__img" alt="promo">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--pb tarif">
                <div class="container">
                    <div class="section__title-block">
                        <h2 class="section__title">Тарифные планы</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tarif__item">
                                <span class="tarif__name">Телефония и домофония</span>
                                <span class="tarif__price">2 500 тг</span>
                                <button class="btn btn-outline-primary">Заказать</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tarif__item">
                                <span class="tarif__name">Телефония и домофония</span>
                                <span class="tarif__price">2 500 тг</span>
                                <button class="btn btn-outline-primary">Заказать</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tarif__item tarif__item--white">
                                <span class="tarif__name">Телефония и домофония</span>
                                <span class="tarif__price">2 500 тг</span>
                                <button class="btn btn-outline-primary">Заказать</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tarif__item tarif__item--white">
                                <span class="tarif__name">Телефония и домофония</span>
                                <span class="tarif__price">2 500 тг</span>
                                <button class="btn btn-outline-primary">Заказать</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tarif__item">
                                <span class="tarif__name">Телефония и домофония</span>
                                <span class="tarif__price">2 500 тг</span>
                                <button class="btn btn-outline-primary">Заказать</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tarif__item">
                                <span class="tarif__name">Телефония и домофония</span>
                                <span class="tarif__price">2 500 тг</span>
                                <button class="btn btn-outline-primary">Заказать</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tarif__item tarif__item--white">
                                <span class="tarif__name">Телефония и домофония</span>
                                <span class="tarif__price">2 500 тг</span>
                                <button class="btn btn-outline-primary">Заказать</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tarif__item tarif__item--white">
                                <span class="tarif__name">Телефония и домофония</span>
                                <span class="tarif__price">2 500 тг</span>
                                <button class="btn btn-outline-primary">Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--pb services">
                <div class="container">
                    <div class="section__title-block section__title-block--center">
                        <h2 class="section__title">Услуги</h2>
                        <span class="promo__separator separator">
                            <svg
                                width="88"
                                height="18"
                                viewBox="0 0 88 18"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path d="
                                        M3.0437 16.6711L9.36935 4.54967C10.1506 3.05262
                                        12.2929 3.05262 13.0742 4.54967L17.5474 13.1215C18.3287
                                        14.6185 20.471 14.6185 21.2523 13.1215L25.7255
                                        4.54967C26.5067 3.05262 28.6491 3.05262 29.4303
                                        4.54967L33.9036 13.1215C34.6848 14.6185 36.8271 14.6185
                                        37.6084 13.1215L42.0816 4.54967C42.8629 3.05262 45.0052
                                        3.05262 45.7865 4.54967L50.2597 13.1215C51.0409 14.6185
                                        53.1833 14.6185 53.9645 13.1215L58.4378 4.54967C59.219
                                        3.05262 61.3613 3.05262 62.1426 4.54967L66.6158
                                        13.1215C67.3971 14.6185 69.5394 14.6185 70.3207
                                        13.1215L74.7939 4.54967C75.5751 3.05262 77.7175 3.05262
                                        78.4987 4.54967L84.8244 16.6711
                                    "
                                    stroke="#7CB935"
                                    stroke-width="5.22371"
                                />
                            </svg>
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div
                                class="services__item service-item"
                                style="background-image: url({{ asset('img/main/sevice-1.jpg') }})"
                            >
                                <h4 class="service-item__title">
                                    Установка систем видеонаблюдения
                                </h4>
                                <div class="service-item__desc">
                                    Lorem ipsum placeholder
                                    Place holder lorem ipsum fdgdfg
                                    dfgdf
                                </div>
                                <button class="btn btn-primary">Заказать расчет</button>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="services__item service-item"
                                style="background-image: url({{ asset('img/main/sevice-2.jpg') }})"
                            >
                                <h4 class="service-item__title">
                                    Установка домофонных систем
                                </h4>
                                <div class="service-item__desc">
                                    Комплексная услуга по установке и
                                    обслуживанию домофонных систем
                                </div>
                                <button class="btn btn-primary">Заказать расчет</button>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="services__item service-item"
                                style="background-image: url({{ asset('img/main/service-3.jpg') }})"
                            >
                                <h4 class="service-item__title">
                                    Установка IP - домофонии
                                </h4>
                                <div class="service-item__desc">
                                    Установка IP-домофонии от ведущих
                                    мировых брендов, таких как: Dahua,
                                    Akuvox, Rubetek в частные дома,
                                    квартиры и офисы.
                                </div>
                                <button class="btn btn-primary">Заказать расчет</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--pb partners">
                <div class="container">
                    <div class="section__title-block">
                        <h2 class="section__title">Наши партнеры</h2>
                        <div class="navigation">

                        </div>
                    </div>
                    <parnters-swiper>
                        <swiper-slide>
                            <a href="#">
                                <img src="{{ asset('img/main/partner-1.svg') }}" alt="Partner name">
                            </a>
                        </swiper-slide>
                        <swiper-slide>
                            <a href="#">
                                <img src="{{ asset('img/main/partner-2.svg') }}" alt="Partner name">
                            </a>
                        </swiper-slide>
                        <swiper-slide>
                            <a href="#">
                                <img src="{{ asset('img/main/partner-3.svg') }}" alt="Partner name">
                            </a>
                        </swiper-slide>
                        <swiper-slide>
                            <a href="#">
                                <img src="{{ asset('img/main/partner-4.svg') }}" alt="Partner name">
                            </a>
                        </swiper-slide>
                        <swiper-slide>
                            <a href="#">
                                <img src="{{ asset('img/main/partner-5.svg') }}" alt="Partner name">
                            </a>
                        </swiper-slide>
                    </parnters-swiper>
                </div>
            </section>

            <section class="section section--pb calc">
                <div class="container">
                    <div class="calc__body">
                        <div class="section__title-block">
                            <h2 class="section__title">Рассчитайте стоимость услуг </h2>
                            <span class="promo__separator separator">
                                <svg
                                    width="88"
                                    height="18"
                                    viewBox="0 0 88 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="
                                            M3.0437 16.6711L9.36935 4.54967C10.1506 3.05262
                                            12.2929 3.05262 13.0742 4.54967L17.5474 13.1215C18.3287
                                            14.6185 20.471 14.6185 21.2523 13.1215L25.7255
                                            4.54967C26.5067 3.05262 28.6491 3.05262 29.4303
                                            4.54967L33.9036 13.1215C34.6848 14.6185 36.8271 14.6185
                                            37.6084 13.1215L42.0816 4.54967C42.8629 3.05262 45.0052
                                            3.05262 45.7865 4.54967L50.2597 13.1215C51.0409 14.6185
                                            53.1833 14.6185 53.9645 13.1215L58.4378 4.54967C59.219
                                            3.05262 61.3613 3.05262 62.1426 4.54967L66.6158
                                            13.1215C67.3971 14.6185 69.5394 14.6185 70.3207
                                            13.1215L74.7939 4.54967C75.5751 3.05262 77.7175 3.05262
                                            78.4987 4.54967L84.8244 16.6711
                                        "
                                        stroke="#fff"
                                        stroke-width="5.22371"
                                    />
                                </svg>
                            </span>
                        </div>
                        <div class="calc-form">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group calc-form__group">
                                        <label
                                            for="exampleFormControlSelect1"
                                            class="calc-form__label"
                                        >
                                            Тип услуги:
                                        </label>
                                        <select
                                            class="form-control form-control-lg calc-form__field"
                                            id="exampleFormControlSelect1"
                                        >
                                            <option>Домофония</option>
                                            <option>Домофония</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group calc-form__group">
                                        <label
                                            for="exampleFormControlSelect2"
                                            class="calc-form__label"
                                        >
                                            Объект:
                                        </label>
                                        <select
                                            class="form-control form-control-lg calc-form__field"
                                            id="exampleFormControlSelect2"
                                        >
                                            <option>Домофония</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group calc-form__group">
                                        <label
                                            for="exampleFormControlInput1"
                                            class="calc-form__label"
                                        >
                                            Кол-во абонентов:

                                        </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg calc-form__field"
                                            id="exampleFormControlInput1"
                                            placeholder="Кол-во абонентов"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group calc-form__group">
                                        <label
                                            for="exampleFormControlInput2"
                                            class="calc-form__label"
                                        >
                                            Кол-во абонентов:

                                        </label>
                                        <input type="text"
                                            class="form-control form-control-lg calc-form__field"
                                            id="exampleFormControlInput2"
                                            placeholder="Кол-во абонентов"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text"
                                            class="
                                                form-control
                                                form-control-lg
                                                calc-form__field
                                                calc-form__field--outline
                                            "
                                            id="exampleFormControlInput3"
                                            placeholder="+7 (XXX) XXX XX XX"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button class="btn btn-light calc-form__button">
                                            Рассчитать
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--pb recomendation">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pe-0 recomendation__info">
                            <div class="section__title-block">
                                <h2 class="section__title">Нас выбирают</h2>
                                <span class="promo__separator separator">
                                    <svg
                                        width="88"
                                        height="18"
                                        viewBox="0 0 88 18"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path d="
                                                M3.0437 16.6711L9.36935 4.54967C10.1506 3.05262
                                                12.2929 3.05262 13.0742 4.54967L17.5474 13.1215C18.3287
                                                14.6185 20.471 14.6185 21.2523 13.1215L25.7255
                                                4.54967C26.5067 3.05262 28.6491 3.05262 29.4303
                                                4.54967L33.9036 13.1215C34.6848 14.6185 36.8271 14.6185
                                                37.6084 13.1215L42.0816 4.54967C42.8629 3.05262 45.0052
                                                3.05262 45.7865 4.54967L50.2597 13.1215C51.0409 14.6185
                                                53.1833 14.6185 53.9645 13.1215L58.4378 4.54967C59.219
                                                3.05262 61.3613 3.05262 62.1426 4.54967L66.6158
                                                13.1215C67.3971 14.6185 69.5394 14.6185 70.3207
                                                13.1215L74.7939 4.54967C75.5751 3.05262 77.7175 3.05262
                                                78.4987 4.54967L84.8244 16.6711
                                            "
                                            stroke="#7CB935"
                                            stroke-width="5.22371"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="recomendation__desc">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took.
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages.
                                </p>
                            </div>
                            <button class="btn btn-outline-primary">Читать далее</button>
                        </div>
                        <div class="col-lg-6 recomendation__swiper">
                            <reviews-swiper>
                                <swiper-slide>
                                    <a href="#" class="recomendation__item">
                                        <img src="{{ asset('img/main/sertificate.jpg') }}" alt="sertificate name">
                                    </a>
                                </swiper-slide>
                                <swiper-slide>
                                    <a href="#" class="recomendation__item">
                                        <img src="{{ asset('img/main/sertificate.jpg') }}" alt="sertificate name">
                                    </a>
                                </swiper-slide>
                                <swiper-slide>
                                    <a href="#" class="recomendation__item">
                                        <img src="{{ asset('img/main/sertificate.jpg') }}" alt="sertificate name">
                                    </a>
                                </swiper-slide>
                                <swiper-slide>
                                    <a href="#" class="recomendation__item">
                                        <img src="{{ asset('img/main/sertificate.jpg') }}" alt="sertificate name">
                                    </a>
                                </swiper-slide>
                            </reviews-swiper>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--p-none callback">
                <div class="container">
                    <div class="callback__body">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="section__title-block">
                                    <h2 class="section__title callback__title">Бесплатная консультация</h2>
                                    <span class="promo__separator separator">
                                        <svg
                                            width="88"
                                            height="18"
                                            viewBox="0 0 88 18"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path d="
                                                    M3.0437 16.6711L9.36935 4.54967C10.1506 3.05262
                                                    12.2929 3.05262 13.0742 4.54967L17.5474 13.1215C18.3287
                                                    14.6185 20.471 14.6185 21.2523 13.1215L25.7255
                                                    4.54967C26.5067 3.05262 28.6491 3.05262 29.4303
                                                    4.54967L33.9036 13.1215C34.6848 14.6185 36.8271 14.6185
                                                    37.6084 13.1215L42.0816 4.54967C42.8629 3.05262 45.0052
                                                    3.05262 45.7865 4.54967L50.2597 13.1215C51.0409 14.6185
                                                    53.1833 14.6185 53.9645 13.1215L58.4378 4.54967C59.219
                                                    3.05262 61.3613 3.05262 62.1426 4.54967L66.6158
                                                    13.1215C67.3971 14.6185 69.5394 14.6185 70.3207
                                                    13.1215L74.7939 4.54967C75.5751 3.05262 77.7175 3.05262
                                                    78.4987 4.54967L84.8244 16.6711
                                                "
                                                stroke="#fff"
                                                stroke-width="5.22371"
                                            />
                                        </svg>
                                    </span>
                                </div>
                                <div class="callback__desc">
                                    Позвоните нам прямо сейчас и мы ответим на все Ваши вопросы
                                </div>
                                <a href="tel:+7 (XXX) XXX XX XX" class="callback__phone">
                                    <i class="bi bi-headset"></i>
                                    +7 (XXX) XXX XX XX
                                </a>
                            </div>
                            <div class="col-lg-5 ms-auto">
                                <div class="callback-form">
                                    <div class="input-group">
                                        <input type="text"
                                            class="
                                                form-control
                                                form-control-lg
                                                callback__input
                                            "
                                            id="exampleFormControlInput4"
                                            placeholder="+7 (XXX) XXX XX XX"
                                            aria-describedby="mobile-phone"
                                        >
                                        <span class="input-group-text" id="mobile-phone">
                                            <i class="bi bi-telephone"></i>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light callback__button">
                                            Отправить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--p-none map">
                <yandex-map :coords="[43.25144299558402,76.96688161091748]" style="height:520px"></yandex-map>
            </section>

            <section class="section section--p-none footer">
                <div class="container">
                    <footer class="pt-5">
                        <div class="row my-5">
                            <div class="col-6 col-md-4">
                                <img src="{{ asset('img/main/logo.svg') }}" width="124" class="mb-4">
                                <div class="footer-contacts mb-4">
                                    <a
                                        href="tel:+7 771 461 32 15"
                                        class="footer-contacts__item footer-contacts__item--phone"
                                    >
                                        <i class="bi bi-telephone-fill"></i>
                                        +7 771 461 32 15
                                    </a>
                                    <a
                                        href="mailto:info@smart-adam.kz"
                                        class="footer-contacts__item"
                                    >
                                        <i class="bi bi-envelope-fill"></i>
                                        info@smart-adam.kz
                                    </a>
                                    <span
                                        class="footer-contacts__item"
                                    >
                                        <i class="bi bi-clock-fill"></i>
                                        Пн-Пт с 09:00 до 19:00
                                    </span>
                                </div>
                                <div class="footer-social mb-4">
                                    <span>Напишите нам:</span>
                                    <div class="footer-social__items">
                                        <a href="#">
                                            <img src="http://127.0.0.1:8000/img/icons/telegram.svg">
                                        </a>
                                        <a href="#">
                                            <img src="http://127.0.0.1:8000/img/icons/whatsapp.svg">
                                        </a>
                                    </div>
                                </div>
                                <button class="btn btn-primary">
                                    Заказать звонок
                                </button>
                            </div>

                            <div class="col-6 col-md-4 footer-menu">
                                <h5 class="footer-menu__title">Меню</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-muted">
                                            О компании
                                        </a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-muted">
                                            Отзывы
                                        </a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-muted">
                                            Контакты
                                        </a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-muted">
                                            Вакансии
                                        </a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-muted">
                                            Новости
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-6 col-md-4 footer-menu">
                                <h5 class="footer-menu__title">Услуги</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-muted">
                                            Установка систем видеонаблюдения
                                        </a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-muted">
                                            Установка домофонных систем
                                        </a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-muted">
                                            Установка IP - домофонии
                                        </a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-muted">
                                            Установка СКУД
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-sm-row justify-content-center py-4 mt-4 border-top">
                            <p class="m-0">
                                Информация на данном сайте носит информационный характер
                                и не является офертой.
                            </p>
                        </div>
                    </footer>
                </div>
            </section>
        </div>
    </body>
</html>
