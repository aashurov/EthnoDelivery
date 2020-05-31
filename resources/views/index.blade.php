<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8" />

<head>
    <title>Ethno Delivery &mdash; Перевозки Москва Ташкент</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fontsface/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('cssface/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cssface/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cssface/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cssface/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fontsface/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('cssface/aos.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
        integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('cssface/style.css')}}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Загрузка...</span>
        </div>
    </div>

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="font-size: 1rem;">
                        <span class="mr-2 d-none icon-envelope-open-o" style="font-size: 1rem;"></span> <span
                                class="d-none d-md-inline-block" style="font-size: 1rem;">ethnodeliveryinfo@gmail.com</span>
                        <span class="mx-md-2 d-inline-block"></span>
                        <span class="mr-2  icon-phone" ></span> <span
                                class=" d-md-inline-block">+79691799000</span>
                        <span class="mx-md-2 d-inline-block"></span>
                            <span class="mr-2  icon-phone"></span> <span
                                class="d-md-inline-block">+998990059559</span>
                        <div class="float-right">
                            <span class="d-none d-md-inline-block">1 USD =
                            {{ $sum->currencyPrice }}</span>
                            <span class="mx-md-2 d-inline-block"></span>

                            <span class="d-none d-md-inline-block">1 RUBL =
                            {{ $rubl->currencyPrice }}</span>
                            <span class="mx-md-2 d-inline-block"></span>
                            <a href="https://t.me/ethnodeliveryuz" target="_blank" class=""><span class="mr-2 d-none icon-telegram"></span> </a>
                            <a href="https://www.instagram.com/ethnodelivery_uz/?hl=ru" target="_blank" class=""><span class="mr-2 d-none icon-instagram"></span> </a>
                            <a href="https://www.facebook.com/fastdeliverytm/" target="_blank"  class=""><span class="mr-2 d-none icon-facebook"></span> </a>
                                @guest
                                <a href="{{ route('login') }}" class=""><span class="mr-2 d-none icon-sign-in"></span> <span
                                    class="d-none d-md-inline-block">Вход</span></a>
                                    @else
                                    <a href="{{ Illuminate\Support\Str::lower(auth()->user()->role) }}/dashboard" class=""><span class="mr-2  d-none icon-sign-in"></span> <span
                                        class="d-none d-md-inline-block">Кабинет</span></a>
                                    @endguest
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="site-logo">
                        <a href="#" class="text-black"><span class="text-primary">Ethno Delivery</a>
                    </div>
                    <div class="col-12">
                        <nav class="site-navigation text-right ml-auto " role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Главная</a></li>
                                <li><a href="#services-section" class="nav-link">Услуги</a></li>
                                <li><a href="#about-section" class="nav-link">О нас</a></li>
                                <li><a href="#calculator-section" class="nav-link">Калькулятор</a></li>
                                <li><a href="#pricing-section" class="nav-link">Тарифы</a></li>
                                <li><a href="#why-us-section" class="nav-link">Почему Мы</a></li>
                                <li><a href="#conditions-section" class="nav-link">Условия</a></li>
                                <li><a href="#contact-section" class="nav-link">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                            class="site-menu-toggle py-5 js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>

        <div class="ftco-blocks-cover-1">
            <div class="ftco-cover-1 overlay" style="background-image: url('{{ asset('imagesface/bg_1.jpg')}}')">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h1>Быстрые перевозки Москва-Ташкент-Москва</h1>
                            <p class="mb-5">Качество обслуживания — это делать что-либо правильно, даже когда никто не
                                смотрит. А это про нас!</p>
                            {!!Form::open(['route'=>['foundparcel'], 'enctype' => 'multipart/form-data',
                            'method'=>'get', 'files'=> true])!!}
                            <div class="form-group d-flex">
                                {{ Form::text('refNumber', null, ['class' => 'form-control', 'style'=>'font-size:24px;', 'placeholder'=>'Введите номер посылки', 'id'=>'refNumber']) }}
                                {!! Form::submit('Поиск', ['class'=>'btn btn-primary']) !!}
                                {!!Form::close()!!}
                            </div>
                        </div>

                        <div class="col-lg-4" data-aos="fade-up">

                            <center>
                                    <img src="{{ asset('imagesface/mobile.png')}}" alt="Alt Text!">
                            </center>
                            <div class="row align-items-center">
                                <div class="col-lg-12 ">
                                    <center><img src="{{ asset('imagesface/app-store-.svg')}}" alt="Image"
                                            class="img-fluid"> <img src="{{ asset('imagesface/google-play.svg')}}"
                                            alt="Image" class="img-fluid"></center>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>



            <!-- END .ftco-cover-1 -->
            <div class="ftco-service-image-1 pb-5">
                <div class="container">
                    <div class="owl-carousel owl-all">
                        <div class="service text-center">
                            <a href="#"><img src="{{ asset('imagesface/cargo_air_small.jpg')}}" alt="Image"
                                    class="img-fluid"></a>
                            <div class="px-md-3">
                                <h3><a href="#">Выгодно</a></h3>
                                <p>Только прямые перевозчики.Экономия на посредниках до 20% от фрахта.</p>
                            </div>
                        </div>
                        <div class="service text-center">
                            <a href="#"><img src="{{ asset('imagesface/cargo_sea_small.jpg')}}" alt="Image"
                                    class="img-fluid"></a>
                            <div class="px-md-3">
                                <h3><a href="#">Безопасно</a></h3>
                                <p>Полная информация о репутации нашей компании, отзывы и история перевозок доступны вам
                                    при заключении
                                    сделки. </p>
                            </div>
                        </div>
                        <div class="service text-center">
                            <a href="#"><img src="{{ asset('imagesface/cargo_delivery_small.jpg')}}" alt="Image"
                                    class="img-fluid"></a>
                            <div class="px-md-3">
                                <h3><a href="#">Надежно</a></h3>
                                <p>Отслеживание передвижения посылки онлайн с момента заказа.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="site-section bg-light" id="services-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <div class="block-heading-1">
                            <h2>ЧТО МЫ ПРЕДЛАГАЕМ</h2>
                            <p>Ethno Delivery — динамично развивающаяся компания на рынке курьерских, логистических и
                                почтовых услуг в Республике Узбекистан и Российской Федерации предлагает своим килентам
                                широкий спектр услуг</p>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-all">
                    <div class="block__35630">
                        <div class="icon mb-0">
                            <span class="fa fa-clock-o"></span>
                        </div>
                        <h3 class="mb-3">Срочная доставка</h3>
                        <p>Это специально разработанные условия для ускоренной доставки
                            посылок по России и Узбекистану.
                        </p>
                    </div>

                    <div class="block__35630">
                        <div class="icon mb-0">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <h3 class="mb-3">Авидоставка посылок</h3>
                        <p>Мы предлагаем самые низкие цены на доставку ваших посылок с помощью Ethno Delivery.
                        </p>
                    </div>

                    <div class="block__35630">
                        <div class="icon mb-0">
                            <span class="fa fa-archive"></span>
                        </div>
                        <h3 class="mb-3">Специальная упаковка</h3>
                        <p>Отличные фирменные конверты и коробки для упаковки документов и посылок.
                        </p>
                    </div>

                    <div class="block__35630">
                        <div class="icon mb-0">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <h3 class="mb-3">Отслеживания</h3>
                        <p>Отслеживание посылки в реальном времени на разных устройствах клиента.
                        </p>
                    </div>

                    <div class="block__35630">
                        <div class="icon mb-0">
                            <span class="fa fa-cart-arrow-down"></span>
                        </div>

                        <h3 class="mb-3">ИНТЕРНЕТ-МАГАЗИНАМ</h3>
                        <p>Мы предлагаем комплексное решение доставки товара покупателям интернет-магазинов.
                        </p>
                    </div>

                    <div class="block__35630">
                        <div class="icon mb-0">
                            <span class="fa fa-money"></span>
                        </div>
                        <h3 class="mb-3">Гибкая система оплаты</h3>
                        <p>При отправке по России и Узбекистану, оплатить заказ может или отправитель, или получатель.
                        </p>
                    </div>

                </div>
            </div>
        </div>




        <div class="site-section" id="about-section">

            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2>О нас</h2>
                            <p>Компания Ethno Delivery — динамично развивается на рынке курьерских, логистических и
                                почтовых услуг Республики Узбекистан и Российской Федерации.</p>
                            Мы постоянно совершенствуем уровень сервиса, разрабатываем и внедряем новые технологии
                            доставки в комплекс предоставляемых услуг. У сотрудников нашей компании большой опыт
                            разработки и внедрения курьерских решений в ведущих почтовых компаниях стран СНГ.

                            Подобрать для вас оптимальный способ доставки и выгодный тариф, в зависимости от сроков и
                            направлений отправки - наша цель. А наши партнерские программы позволят вам не беспокоиться
                            о транспортировке документов, товаров и грузов — мы гарантируем сохранность почтовых
                            отправлений.
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="site-section bg-light" id="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                                <div class="block-counter-1">
                                    <span class="number"><span data-number="5">0</span>+</span>
                                    <span class="caption">Год на рынке</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                                <div class="block-counter-1">
                                    <span class="number"><span data-number="126">0</span>+</span>
                                    <span class="caption">Партнеры</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                                <div class="block-counter-1">
                                    <span class="number"><span data-number="1750">0</span>+</span>
                                    <span class="caption">Довольные клиенты</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                                <div class="block-counter-1">
                                    <span class="number"><span data-number="8740">0</span>+</span>
                                    <span class="caption">Доставленные посылки</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section " id="calculator-section">
            <div class="container">
                <div class="row mb-12 justify-content-center">
                    <div class="col-md-12 text-center">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2>Расчет стоимости перевозки</h2>
                            <p>Чтобы рассчитать стоимость перевозки посылок заполните поля маршрута на перевозку и
                                задайте
                                вес.</p>
                        </div>
                    </div>
                </div>
                <form id="form1" runat="server" onsubmit="return false">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                {{-- <div class="form-group"> --}}
                                <select class="form-control" id="parcelPlan_idComboBox" required="required"
                                    data-aos="fade-up">
                                    <option value="" selected disabled>Выберите тарифный план</option>
                                    <option value="1">Эконом 6$/кг 5-10 дней *(Только Москва-Ташкент)</option>
                                    <option value="2">Стандарт (Москва-Ташкент) 10$/кг 3-5 дней</option>
                                    <option value="3">Стандарт (Ташкент-Москва) 11$/кг 3-5 дней</option>
                                    <option value="4">Ультрасрочный 30$/кг 1-2 дней</option>
                                    <option value="5">Документ (До склада Москва-Ташкент) 10$/кг 3-5 дней</option>
                                    <option value="6">Документ (До склада Ташкент-Москва) 11$/кг 3-5 дней</option>
                                    <option value="7">Документ (До получателя Москва-Ташкент) 13$/кг 3-5 дней
                                    </option>
                                    <option value="8">Документ (До получателя Ташкент-Москва) 17$/кг 3-5 дней
                                    </option>
                                    <option value="9">Документ (Ультрасрочный) 30$/кг 1-2 дней</option>
                                </select>
                                {{-- </div> --}}
                            </div>
                            {{-- <div class="colcol-auto my-1" data-aos="fade-up">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">В рублях</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">В сумах</label>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <br>
                        <div class="row" data-aos="fade-up">
                            <div class="col-auto my-1" style="width: 33%;" data-aos="fade-up">
                                <div class="form-check">
                                    <input class="form-check-input" name="parcelCourierService" type="checkbox"
                                        id="parcelCourierServiceCheck">
                                    <label class="form-check-label" for="parcelCourierServiceCheck">Вызов курьера
                                        на дом</label>
                                </div>
                            </div>
                            <div class="col-auto my-1" style="width: 25%;" data-aos="fade-up">
                                <div class="form-check">
                                    <input class="form-check-input" name="parcelDeliveryType_id" type="checkbox"
                                        id="parcelDeliveryType_idCheck">
                                    <label class="form-check-label" for="parcelDeliveryType_idCheck">До двери
                                        получателя</label>
                                </div>
                            </div>

                        </div>
                        <div class="row" data-aos="fade-up">
                            <div class="col" data-aos="fade-up">
                                <br><input name="parcelWeight" type="number" class="form-control" required="required"
                                    placeholder="Вес (кг)" id="parcelWeightText" onkeypress="return isNumber(event)"
                                    onpaste="return false;" max=30 />
                                {{-- <br>{{ Form::number('parcelWeight', null, ['class' => 'form-control', 'max'=>30, 'required' => 'required','placeholder' => 'Вес (кг)', 'required' => 'required', 'id'=>'parcelWeightText']) }}
                                --}}
                            </div>
                            <div class="col" data-aos="fade-up">
                                <br>{{ Form::number('parcelLength', null, ['class' => 'form-control', 'required' => 'required','placeholder' => 'Длина (см)', 'required' => 'required', 'id'=>'parcelLengthText']) }}
                            </div>
                            <div class="col" data-aos="fade-up">
                                <br>{{ Form::number('parcelWidth',  null, ['class' => 'form-control', 'required' => 'required','placeholder' => 'Ширина (см)', 'required' => 'required', 'id'=>'parcelWidthText']) }}
                            </div>
                            <div class="col" data-aos="fade-up">
                                <br>{{ Form::number('parcelHeight', null, ['class' => 'form-control', 'required' => 'required','placeholder' => 'Высота (см)', 'required' => 'required', 'id'=>'parcelHeightText']) }}
                            </div>
                        </div>

                        <div class="row" id="timediv" style="display:none;">
                            <div class="col" style="width: 100%;">
                                <label id="currentTime"></label>
                                <label id="currentTime2"></label>
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center" id="timediv" data-aos="fade-up">
                            <div class="col align-items-center " style="width: 100%;">
                                <center>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="submit" onclick="calculate()" class="btn btn-danger"><i
                                                class="fa fa-calculator" aria-hidden="true"></i><span
                                                class="mx-md-2 d-inline-block"></span>Рассчитать</button>
                                        <button onclick="ClearFunction()" type="button" class="btn btn-success"><i
                                                class="fa fa-refresh" aria-hidden="true"></i><span
                                                class="mx-md-2 d-inline-block"></span>Сбросить</button>
                                    </div>
                                </center>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>


        <div class="site-section bg-light" id="pricing-section">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2>Тарифы</h2>
                            <p>Компания Ethno Delivery предлагает широкий спектр тарифных планов по перевозке
                                посылок и
                                документов по Республики Узбекистан и Российской Федерации </p>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div class="pricing">
                            <h3 class="text-center text-black">Эконом</h3>
                            <div class="price text-center mb-4 ">
                                <span><span>${{ $eko ->parcelPlanPrice }}</span> / кг</span>
                            </div>
                            <ul class="list-unstyled ul-check success mb-5">
                                <li>2 кг Минимальный вес</li>
                                <li>5-10 дней срок доставки</li>
                                <li class="remove">Онлайн отслеживание отправки</li>
                                <li class="remove">24/7 Информационный центр</li>
                            </ul>
                            <p class="text-center">
                                <a href="#" class="btn btn-secondary btn-md">Оставить заявку</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing">
                            <h3 class="text-center text-black">Стандарт</h3>
                            <div class="price text-center mb-4 ">
                                <span><span>${{ $sta ->parcelPlanPrice }}</span> / кг</span>
                            </div>
                            <ul class="list-unstyled ul-check success mb-5">

                                <li>1 кг Минимальный вес</li>
                                <li>5 дней срок доставки</li>
                                <li>Онлайн отслеживание отправки</li>
                                <li>24/7 Информационный центр</li>
                            </ul>
                            <p class="text-center">
                                <a href="#" class="btn btn-primary btn-md text-white">Оставить заявку</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing">
                            <h3 class="text-center text-black">Ультрасрочный</h3>
                            <div class="price text-center mb-4 ">
                                <span><span>${{ $ult ->parcelPlanPrice }}</span> / кг</span>
                            </div>
                            <ul class="list-unstyled ul-check success mb-5">

                                <li>1 кг Минимальный вес</li>
                                <li>36 часов срок доставки</li>
                                <li>Онлайн отслеживание отправки</li>
                                <li>24/7 Информационный центр</li>
                            </ul>
                            <p class="text-center">
                                <a href="#" class="btn btn-secondary btn-md">Оставить заявку</a>
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="site-section" id="faq-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="block-heading-1 col-12 text-center">
                        <h2>Часто задаваемые вопросы</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4"><span
                                    class="icon-question_answer text-primary mr-2"></span>Как
                                узнать точную стоимость доставки груза «Россия-Узбекистан-Россия»?</h3>
                            <p>Вы можете самостоятельно рассчитать стоимость доставки отправления, воспользовавшись
                                нашим
                                калькулятором.
                                Также вы можете позвонить по номеру +79266800899 или +998(99)0055995 и уточнить
                                стоимость
                                и
                                сроки экспресс-доставки у менеджера компании Ethno Delivery. </p>
                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4"><span
                                    class="icon-question_answer text-primary mr-2"></span>Как
                                заказать доставку «Россия-Узбекистан-Россия»?</h3>
                            <p>
                                Оформить доставку по направлению «Россия-Узбекистан-Россия» вы можете несколькими
                                способами:
                            </p>
                            <ul>
                                <li>
                                    заказать услугу «Обратный звонок». В течение 20 минут вам перезвонит сотрудник
                                    нашей
                                    компании, ответит на любые вопросы и поможет оформить заказ;</li>
                                <li>
                                    заполнить на сайте форму обратной связи и получить ответ в течение дня;</li>
                                <li>
                                    позвонить в офис компании Ethno Delivery, либо по бесплатному единому телефону
                                    call-центра;</li>
                                <li>
                                    написать в Telegram сотруднику нашей компании;</li>
                                <li>
                                    написать на электронную почту <a
                                        href="mailto:import-export@cdek.ru">ethnodeliveryinfo@gmail.com</a>
                                    менеджеру;
                                </li>
                                <li>
                                    оставить заявку на вызов курьера в вашем городе.</li>
                            </ul>
                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4"><span
                                    class="icon-question_answer text-primary mr-2"></span>Как
                                оплатить услугу доставки «Россия-Узбекистан-Россия»?</h3>
                            <p>
                                Для удобства наших клиентов мы предлагаем различные варианты оплаты
                                экспресс-доставки
                                грузов.</p>
                            <p>
                                К вашим услугам:</p>
                            <ul>
                                <li>
                                    наличный расчёт непосредственно в офисе компании, либо через терминалы и
                                    банкоматы:
                                    QIWI, Евросеть, Элекснет, система денежных переводов CONTACT и др.;</li>
                                <li>
                                    оплата электронными деньгами;</li>
                                <li>
                                    оплата банковскими картами: UZCard, Visa, Visa Electron, MasterCard, Maestro;
                                </li>
                                <li>
                                    оплата с баланса мобильного телефона МТС, Билайн, Мегафон.</li>
                                <li>
                                    Оплата по счету (безналичный расчет).</li>
                            </ul>

                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4"><span
                                    class="icon-question_answer text-primary mr-2"></span>Какая
                                информация необходимо для заказа услуги?</h3>
                            <p>Заказчик должен сообщить те данные, которые необходимы для осуществления курьерской
                                доставки,
                                а именно:</p>
                            <ul>
                                <li>имя или название организации отправителя и получателя;</li>
                                <li>точный фактический адрес отправителя и получателя;</li>
                                <li>телефон отправителя и получателя;</li>
                                <li>сроки доставки;</li>
                                <li>вид груза: конверт, бандероль (точный вес, размеры, формат).</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4"><span
                                    class="icon-question_answer text-primary mr-2"></span>Как
                                отследить заказ и узнать, что посылка поступила в пункт выдачи?</h3>
                            <p>
                                Все документы и посылки, которые отправляются с помощью компании Ethno Delivery,
                                имеют
                                свой
                                трек-номер. Номер отправления от частного лица указывается в накладной, а номер
                                онлайн-заказа
                                можно уточнить в том интернет-магазине, где он был сделан.<br>
                                <p>Вы можете отслеживать документы и посылки на нашем сайте или в личном кабинете
                                    получателя
                                    по трек-номеру.</p>
                                <p>
                                    Как только посылка или письмо поступят в отделение, вы получите голосовое
                                    сообщение,
                                    SMS
                                    или
                                    e-mail. В зависимости от того, какое оповещение выбрал отправитель.
                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4"><span
                                    class="icon-question_answer text-primary mr-2"></span>Какие
                                документы нужны, чтобы получить письмо или посылку?</h3>
                            Если вы получаете заказ с оплатой в отделении, документы не требуются. Если необходимо
                            получить
                            предоплаченный заказ, вам понадобится документ, удостоверяющий личность:<br>
                            <ul>
                                <li>паспорт/загранпаспорт/водительское удостоверение/военный билет для получения
                                    предоплаченных заказов из российских интернет магазинов;<br>
                                </li>
                                <li>российский паспорт, данные которого были указаны при оформлении заказа, для
                                    получения
                                    предоплаченных заказов из зарубежных интернет-магазинов.</li>
                            </ul>
                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4"><span
                                    class="icon-question_answer text-primary mr-2"></span>Сколько моя посылка или
                                письмо
                                может храниться в отделении?</h3>
                            Срок хранения заказа вы можете увидеть в трекинге на нашем сайте </a>
                            или в личном кабинете после поступления заказа.
                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4"><span
                                    class="icon-question_answer text-primary mr-2"></span>Могу
                                ли я вскрыть и проверить посылку в отделении?</h3>
                            Это зависит от условий работы с интернет-магазином, в котором был сделан
                            заказ. <br>
                            <ul>
                                <li>«Без вскрытия». Вы не можете вскрыть и проверить содержимое посылки до момента
                                    ее
                                    оплаты.</li>
                                <li>«Со вскрытием и проверкой вложения». Вы можете проверить содержимое посылки на
                                    предмет соответствия заказу и отсутствия физических повреждений. А после
                                    проверки
                                    принять решение о выкупе посылки. Работоспособность товаров не проверяется.
                                    <b>Просим
                                        иметь ввиду, что что до оплаты заказа, количество и
                                        комплектность товара демонстрируется из рук оператора отделения и без
                                        вскрытия
                                        заводской упаковки. До оплаты возможно вскрытие только внешней
                                        упаковки. Заводская упаковка может быть вскрыта только
                                        после оплаты заказа</b>
                                    <p>
                                    </p>
                                    <p>
                                        *Работоспособность товаров (включение в сеть и т.п.) в отделении не
                                        проверяется.
                                    </p>
                                </li>
                                <li>«Со вскрытием и примеркой». Вы можете проверить содержимое посылки на предмет
                                    соответствия заказу и примерить товар.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block__73694 site-section border-top bg-light" id="why-us-section">
            <div class="container">
                <div class="row d-flex no-gutters align-items-stretch">

                    <div class="col-12 col-lg-6 block__73422 order-lg-2"
                        style="background-image: url('imagesface/cargo_sea_small.jpg');" data-aos="fade-left"
                        data-aos-delay="">
                    </div>
                    <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right"
                        data-aos-delay="">
                        <h2 class="mb-4 text-black">Почему мы</h2>
                        <h4 class="text-primary">Мы работаем быстро и качественно!</h4>
                        <p>Некоторые особенности, делают нас уникальными</p>

                        <ul class="ul-check primary list-unstyled mt-5">
                            <li>Гибкие системы оплаты</li>
                            <li>Быстрые перевозки посылок</li>
                            <li>Безопасность посылки</li>
                            <li>Лоялные программы для клиентов</li>
                            <li>Онлайн отслеживание посылок</li>
                            <li>Личный кабинет для каждого клиента</li>
                            <li>iOS/Android приложение</li>
                            <li>СМС оповещение о статусе посылки</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

 <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
        <div class="container">

            <div class="text-center mb-5">
                <div class="block-heading-1">
                    <h2>Мнение наших клиентов</h2>
                </div>
            </div>

            <div class="owl-carousel nonloop-block-13">
                <div>
                    <div class="block-testimony-1 text-center">
                            <div class="fb-post" data-href="https://www.facebook.com/ulugbek.kamolov.18/posts/2778418118920957" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/ulugbek.kamolov.18/posts/2778418118920957" class="fb-xfbml-parse-ignore"><p>Ребята молодцы, успели доставить товар до приостановления авиасообщений. Рекомендую всем!</p>Опубликовано <a href="https://www.facebook.com/ulugbek.kamolov.18">Ulugbek Kamolov</a>&nbsp;<a href="https://developers.facebook.com/ulugbek.kamolov.18/posts/2778418118920957">Вторник, 17 марта 2020 г.</a></blockquote></div>
    </div>
    </div>

    <div>
        <div class="block-testimony-1 text-center">
            <div class="fb-post" data-href="https://www.facebook.com/angela.sheen.33/posts/2804873249597100" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/angela.sheen.33/posts/2804873249597100" class="fb-xfbml-parse-ignore"><p>Спасибо за быструю доставку! Очень ответственная команда,все пришло в срок</p>Опубликовано <a href="#" role="button">Angela Sheen</a>&nbsp;<a href="https://developers.facebook.com/angela.sheen.33/posts/2804873249597100">Воскресенье, 1 марта 2020 г.</a></blockquote></div>
        </div>
    </div>

    <div>
        <div class="block-testimony-1 text-center">
            <div class="fb-post" data-href="https://www.facebook.com/salamova94/posts/2588058281311092" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/salamova94/posts/2588058281311092" class="fb-xfbml-parse-ignore"><p>Spasibo za dostavku iz ikea👍 malishu vse ponravilos</p>Опубликовано <a href="#" role="button">Xali Salamova</a>&nbsp;<a href="https://developers.facebook.com/salamova94/posts/2588058281311092">Воскресенье, 22 декабря 2019 г.</a></blockquote></div>
        </div>
    </div>

    <div>
        <div class="block-testimony-1 text-center">
            <div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=483499832277802&amp;id=100018533672762" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/permalink.php?story_fbid=483499832277802&amp;id=100018533672762" class="fb-xfbml-parse-ignore"><p>В пятницу отправили документ с Ташкента, в понедельник он уже был на руках в Москве. Ответственные, вежливые и очень...</p>Опубликовано <a href="https://www.facebook.com/people/Yana-Tiffin/100018533672762">Yana Tiffin</a>&nbsp;<a href="https://developers.facebook.com/permalink.php?story_fbid=483499832277802&amp;id=100018533672762">Понедельник, 16 декабря 2019 г.</a></blockquote></div>
        </div>
    </div>


    </div>

    </div>
    </div>

    <div class="site-section" id="conditions-section">
    <div class="container">
        <div class="row mb-5">
            <div class="block-heading-1 col-12 text-center">
                <h2>УСЛОВИЯ ОТПРАВКИ ЗАКАЗОВ</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="mb-12" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-black h4 mb-4"><span
                            class="icon-question_answer text-primary mr-2"></span>Ограничения по курьерским отправлениям в Узбекистан</h3>
                    <p><ul><li><span>Максимальный вес посылки не более 30 кг.</span></li><li><span>Максимальные размеры посылки : 1,50 м для одного из измерений или 3 м суммы длины и наибольшей окружности, взятой в направлении ином, чем длина.</span></li><li><span>Максимум 1000 долларов США / посылка, в течение одного календарного квартала.</span></li></ul> </p>
                </div>

                <div class="mb-12" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-black h4 mb-4"><span
                    class="icon-question_answer text-primary mr-2"></span>МЫ НЕ ПРИНИМАЕМ!!!</h3>
                    <p>Не перевозим: </p>
                    <ul>
                        <li>Алькогольные напитки
                        </li>
                        <li>Табачных изделия
                        </li>
                        <li>Игрушки взрослой тематики
                        </li>
                    </ul>
                    <p>   Ювелирные изделия и бижутерию, так как для этого необходимо производить таможенное оформление в другой таможне:</p>
                    <ul ><li class="list-group-item1"><span >Ювелирные изделия (ювелирные украшения)</span></li><li class="list-group-item1"><span>Бижутерия (за исключением неметаллической, а также брелоков и значков, не имеющих деталей или гальванического покрытия из драгоценных металлов)</span></li><li class="list-group-item1"><span >Часы и их части с содержанием драгоценных металлов и/или драгоценных камней, а также часы, имеющие индивидуальные номера</span></li><li class="list-group-item1"><span>Драгоценные камни</span></li><li class="list-group-item1"><span >Драгоценные металлы</span></li><li class="list-group-item1"><span>Природные алмазы</span></li><li class="list-group-item1"><span>Жемчуг природный</span></li><li class="list-group-item1"><span>Жемчуг культивированный</span></li><li class="list-group-item1"><span>Полудрагоценные камни</span></li><li class="list-group-item1"><span>Изделия из природного и культивированного жемчуга</span></li><li class="list-group-item1"><span>Драгоценные металлы в виде продукции и изделий</span></li><li class="list-group-item1"><span>Телефоны и их части с содержанием драгоценных металлов и/или драгоценных камней</span></li><li class="list-group-item1"><span>Другая продукция, содержащая драгоценные металлы и/или драгоценные камни</span></li></ul>
                </div>

                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-black h4 mb-4"><span
                            class="icon-question_answer text-primary mr-2"></span>ОПАСНЫЕ ГРУЗЫ                        </h3>
                    <p>
                        Запрещенные к перевозке по воздуху при любых обстоятельствах:  Любое вещество, которое, будучи представленным для перевозки, способно взрываться, вступать в опасные реакции, возгораться либо выделять в опасном количестве тепло или токсические, коррозионные или легковоспламеняющиеся газы или пары в обычных условиях, возникающих в ходе перевозки, не должно перевозиться на воздушных судах ни при каких обстоятельствах.</p>

                    <ul>
                        <li>
                            Вещества(включая смеси и растворы) и изделия, в зависимости от вида опасности, которыми они характеризуются, подразделены на 9 классов опасности. Некоторые из этих классов подразделяются на категории </li>
                    </ul>
                    <p><strong>КЛАСС 1.  ВЕЩЕСТВА И ИЗДЕЛИЯ</strong></p>
                    <ul>
                        <li>

                            <strong>Категория 1.1. </strong> Вещества и изделия, которые характеризуются опасностью взрыва массой. Пример: тротил, ТЭН, нитроглицерин, аммонал, гранитол .</li>  <li>
    <strong>Категория 1.2. </strong> Вещества и изделия, которые характеризуются опасностью разбрасывания, но не создают опасности взрыва массой. Пример: гранаты ручные, ракеты, снаряды, боеприпасы, шнур детонирующий, детонаторы, капсюли-детонаторы, бомбы авиационные, торпеды, мины.
</li>  <li>
    <strong>Категория 1.3. </strong> Вещества и изделия, которые характеризуются опасностью загорания, а также либо незначительной опасностью взрыва, либо незначительной опасностью разбрасывания, либо тем и другим, но не характеризуются опасностью взрыва массой. Пример: порох, пороховые ускорители, твердотопливные ракеты, фейерверки, пиротехнические составы, шнур огнепроводный.
</li>  <li>
    <strong>Категория 1.4. </strong> Вещества и изделия, которые не представляют значительной опасности.  Пример: патроны стрелковые, заряды промышленные, патроны строительные, пиропатроны, капсюли.
</li>  <li>
    <strong>Категория 1.5. </strong> Вещества очень низкой чувствительности, которые характеризуются опасностью взрыва массой.
</li>  <li>
    <strong>Категория 1.6. </strong> Изделия чрезвычайно низкой чувствительности, которые не характеризуются опасностью взрыва массой.
</li>
</ul>
<p><strong>КЛАСС 2. ГАЗЫ</strong></p>
<ul>
 <li>
    <strong>Категория 2.1. </strong> Легковоспламеняющие газы. Пример: газовые зажигалки, сжатые и сжиженные газы в баллонах, либо сосудах Дьюара: водород, пропан, бутан, лаки и дезодоранты в аэрозольной упаковке.
</li>  <li>
    <strong>Категория 2.2.</strong>  Невоспламеняющиеся нетоксические газы. Пример: сжатые и сжиженные охлажденные газы в баллонах, либо сосудах Дьюара: воздух, углекислый газ, азот, кислород.
</li>  <li>
    <strong>Категория 2.3.</strong>  Токсические газы. Пример: хлор, иприт.
</li>
</ul>
<p><strong>
    КЛАСС 3. ЛЕГКОВОСПЛАМЕНЯЮЩИЕСЯ ЖИДКОСТИ</strong></p>
<ul>
</li>  <li>
Пример: бензин, керосин, растворители, ацетон, дихлорэтан, лаки, краски масленные, нироэмали, грунтовки, полиграфические краски, чернила для принтеров, политуры, сиккативы, смывки, сольвенты, ароматизаторы для напитков на спиртной основе, настойки, герметики, эфиры, клеи на основе органических растворителей, лосьены косметические, одеколоны, духи, туалетная вода, лаки для ногтей, масло пихтовое.
</li>
</ul>
<p><strong>

КЛАСС 4. ЛЕГКОВОСПЛАМЕНЯЮЩИЕСЯ ТВЕРДЫЕ ВЕЩЕСТВА; ВЕЩЕСТВА, ПОДВЕРЖЕННЫЕ САМОВОЗГОРАНИЮ; ВЕЩЕСТВА, ВЫДЕЛЯЮЩИЕ ЛЕГКОВОСПЛАМЕНЯЮЩИЕСЯ ГАЗЫ ПРИ ВЗАИМОДЕЙСТВИИ С ВОДОЙ</strong></p>
<ul>
 <li>
    <strong>Категория 4.1. </strong> Легковоспламеняющиеся твердые вещества, самореагирующие и подобные им вещества и десенсибилизированные взрывчатые вещества. Пример: любые металлические порошки, алюминиевый порошок с покрытием, магний, спички, «бенгальские огни».
</li>  <li>
    <strong>Категория 4.2.</strong>  Вещества способные к самовозгоранию. Пример: белый или желтый фосфор, напалм, рыбная мука, уголь, уголь активированный, хлопок.
</li>  <li>
    <strong>Категория 4.3. </strong> Вещества, выделяющие легковоспламеняющиеся газы при соприкосновении с водой. Пример: карбид кальция, натрий, алюминиевый порошок без покрытия.
</li>
</ul>
<p><strong>
КЛАСС 5. ОКИСЛЯЮЩИЕ ВЕЩЕСТВА И ОРГАНИЧЕСКИЕ ПЕРЕКИСИ</strong></p>
<ul>
 <li>
    <strong>Категория 5.1. </strong> Окисляющие вещества. Пример: амиачно-нитратное удобрение, амиачная селитра, калиевая селитра, хлорат кальция, отбеливатели, перекись водорода.
</li>  <li>
    <strong> Категория 5.2.</strong>  Органические перекиси. Пример: гидроперекись третбутила, компоненты белой краски, некоторые отвердители.
</li>
</ul>
<p><strong>
    КЛАСС 6. ЯДОВИТЫЕ И ИНФЕКЦИОННЫЕ ВЕЩЕСТВА, СПОСОБНЫЕ ВЫЗЫВАТЬ СМЕРТЬ, ОТРАВЛЕНИЕ ИЛИ ЗАБОЛЕВАНИЕ ПРИ ПОПАДАНИИ ВНУТРЬ ОРГАНИЗМА ИЛИ ПРИ СОПРИКОСНОВЕНИИ С КОЖЕЙ И СЛИЗИСТОЙ ОБОЛОЧКОЙ.</strong></p>
<ul>
<li>
    <strong>Категория 6.1.</strong>  Ядовитые (токсичные) вещества, способные вызвать отравление при вдыхании (паров, пыли), попадании внутрь или контакте с кожей.
</li> <li>
    <strong> Категория 6.2. </strong> Вещества и материалы, содержащие болезнетворные микроорганизмы, опасные для людей и животных.
</li>
</ul>
<p><strong>
    КЛАСС 7. РАДИОАКТИВНЫЕ МАТЕРИАЛЫ</strong></p>
<ul>
  <li>
  Изотопы для целей диагностики и лечения, головки дефектоскопов, тарировочные источники, приборы гамма каротажа.
</li>
</ul>
<p><strong>
КЛАСС 8. КОРРОЗИОННЫЕ ВЕЩЕСТВА</strong></p>
<ul>
 <li>
    <strong>Категория 8.1. </strong> Кислоты
</li>  <li>
 <strong>Категория 8.2.</strong> Щёлочи
</li>  <li>
    <strong>Категория 8.3. </strong> Разные едкие и коррозионные вещества. Пример: аккумуляторы, электролиты для аккумуляторов, серная, соляная, уксусная и другие кислоты, пищевые кислоты, концентраты напитков, фруктовые эссенции, едкий натр, едкий калий, ртуть, тест — системы лабораторные.
</li>
</ul>
<p><strong>
    КЛАСС 9. ПРОЧИЕ ОПАСНЫЕ ВЕЩЕСТВА И ИЗДЕЛИЯ</strong></p>
<ul>
 <li>
    <strong>Категория 9.1. </strong> Твердые и жидкие горючие вещества и материалы, которые по своим свойствам не относятся к 3 и 4-му классам, но при определенных условиях могут быть опасными в пожарном отношении (горючие жидкости с температурой вспышки от +61 до +100С в закрытом сосуде, волокна и другие аналогичные материалы).
</li>  <li>
    <strong>Категория 9.2.</strong>  Вещества, становящиеся едкими и коррозионными при определенных условиях. Пример: асбест, чесночный соус, спасательные плоты, двигатели внутреннего сгорания, газонокосилки, мини-тракторы, мотоциклы, скутеры, лодочные моторы, снегоходы, гидроциклы, автомобили, пищевые добавки, экстракты, литиевые батареи, полимерные гранулы, двуокись углерода твердая(сухой лед), намагниченный материал, магнетроны, неэкранированные постоянные магниты без установленных якорей, акустические колонки.</li>

                    </ul>

                </div>

             <div class="well"><p class="w3l-titles" style="text-align: center;"><span style="color: #333333; font-size: 15pt;"><strong>ПРЕДЕЛЬНЫЕ НОРМЫ БЕСПОШЛИННОГО ВВОЗА ТОВАРОВ ФИЗИЧЕСКИМИ ЛИЦАМИ НА ТЕРРИТОРИЮ РЕСПУБЛИКИ УЗБЕКИСТАН.</strong></span></p><div class="table-responsive wprt_style_display"><table class="table table-striped"><thead><tr><th><span >Номер товарной группы</span></th><th><span >Наименование товара</span></th><th><span >Код товара по ТН ВЭД</span></th><th><span >Нормы ввоза товаров, не подлежащих уплате акцизного налога</span><br> <span >(на одно лицо)</span></th></tr></thead><tbody><tr><td><span >09</span></td><td><span >Кофе жареный или нежареный с кофеином или без кофеина</span></td><td><span >0901</span></td><td><span >2 кг</span></td></tr><tr><td><span >16</span></td><td><span >Икра осетровая</span></td><td><span >160430100</span></td><td><span >0,5 кг</span></td></tr><tr><td><span >16</span></td><td><span >Заменители икры</span></td><td><span >160430900</span></td><td><span >1 кг</span></td></tr><tr><td><span >17</span></td><td><span >Кондитерские изделия</span></td><td><span >1704</span></td><td><span >5 кг</span></td></tr><tr><td><span >18</span></td><td><span >Шоколад в плитках и брикетах свыше 2 кг</span></td><td><span >180620</span></td><td><span >5 кг</span></td></tr><tr><td><span >19</span></td><td><span >Изделия из зерна, хлебных злаков, крахмал и мука, мучные кондитерские изделия</span></td><td><span >19</span></td><td><span >10 кг</span></td></tr><tr><td><span >20</span></td><td><span >Продукты переработки овощей, плодов, орехов или прочих растений</span></td><td><span >200110-200190200, 2002, 2006-2009</span></td><td><span >5 кг</span></td></tr><tr><td><span >21</span></td><td><span >Смешанные пищевые продукты</span></td><td><span >21</span></td><td><span >2 кг</span></td></tr><tr><td><span >22</span></td><td><span >Пиво</span></td><td><span >2203</span></td><td><span >2 л</span></td></tr><tr><td><span >22</span></td><td><span >Безалкогольные напитки, соки (за исключением цитрусовых)</span></td><td><span >2202, 220950-220980</span></td><td><span >2 л</span></td></tr><tr><td><span >22</span></td><td><span >Все виды алкогольной продукции (кроме пива)</span></td><td><span >2204-2206, 2208</span></td><td><span >2 л</span></td></tr><tr><td><span >22</span></td><td><span >Спирт этиловый*</span></td><td><span >2207</span></td><td><span >—</span></td></tr><tr><td><span >24</span></td><td><span >Все виды табачных изделий</span></td><td><span >240210000, 240220000, 240290000</span></td><td><span >сигареты, сигары, папиросы в количестве 10 пачек</span></td></tr><tr><td><span >27</span></td><td><span >Бензин</span></td><td><span >271000250</span></td><td><span >40 л сверх содержимого бензобака, установленного заводом-изготовителем автотранспорта</span></td></tr><tr><td><span >33</span></td><td><span >Парфюмерия</span></td><td><span >33</span></td><td><span >по 2 ед. каждого наименования</span></td></tr><tr><td><span >34</span></td><td><span >Автокосметика</span></td><td><span >34</span></td><td><span >по 2 ед. каждого наименования</span></td></tr><tr><td><span >34</span></td><td><span >Моющие, чистящие средства</span></td><td><span >3402</span></td><td><span >5 кг</span></td></tr><tr><td><span >42</span></td><td><span >Изделия из натуральной и искусственной кожи, кроме школьных портфелей и ранцев</span></td><td><span >420212, 420310000</span></td><td><span >по 1 ед. каждого наименования, но не более 3 ед.</span></td></tr><tr><td><span >42</span></td><td><span >Одежда и принадлежности одежды из натуральной кожи</span></td><td><span >4203</span></td><td><span >по 1 ед. каждого наименования, но не более 3 ед.</span></td></tr><tr><td><span >43</span></td><td><span >Верхняя одежда и головные уборы из натурального меха</span></td><td><span >43</span></td><td><span >по 1 ед. каждого наименования, но не более 3 ед.</span></td></tr><tr><td><span >57</span></td><td><span >Ковры и ковровые изделия</span></td><td><span >5701-5705</span></td><td><span >15 кв.м</span></td></tr><tr><td><span >61</span></td><td><span >Трикотажные изделия машинной и ручной вязки</span></td><td><span >61</span></td><td><span >по 1 ед. каждого наименования</span></td></tr><tr><td><span >63</span></td><td><span >Постельное белье</span></td><td><span >6302</span></td><td><span >5 комплектов</span></td></tr><tr><td><span >69</span></td><td><span >Керамические изделия</span></td><td><span >6904, 6905, 6907, 6908, 6910, 6911, 6913, 6914</span></td><td><span >1 комплект, но не более 24 единиц</span></td></tr><tr><td><span >70</span></td><td><span >Посуда из хрусталя</span></td><td><span >701321</span></td><td><span >1 комплект, но не более 12 единиц</span></td></tr><tr><td><span >71</span></td><td><span >Ювелирные изделия из драгоценных металлов и драгоценных камней</span></td><td><span >71</span></td><td><span >5 изделий общим весом не более 30 граммов</span></td></tr><tr><td><span >71</span></td><td><span >Бижутерия</span></td><td><span >7117</span></td><td><span >не более 0,5 кг</span></td></tr><tr><td><span >82</span></td><td><span >Кухонные принадлежности, ножи, ложки, вилки и прочие из неблагородных металлов, в том числе покрытые драгоценными металлами</span></td><td><span >8211, 8215</span></td><td><span >1 комплект, но не более 24 единиц</span></td></tr><tr><td><span >85</span></td><td><span >Видео- и аудиоаппаратура</span></td><td><span >8528, 8521, 8520</span></td><td><span >по 1 ед. каждого наименования, но не более 3 ед.г</span></td></tr><tr><td><span >87</span></td><td><span >Автомобили легковые (включая бывшие в употреблении)*</span></td><td><span >8703</span></td><td><span >—</span></td></tr><tr><td><span >91</span></td><td><span >Часы всех видов</span></td><td><span >91</span></td><td><span >2 ед.</span></td></tr><tr><td><span >94</span></td><td><span >Мебель (кроме медицинской)*</span></td><td><span >94 (9402)</span></td><td><span >—</span></td></tr><tr><td><span >94</span></td><td><span >Люстры, осветительное оборудование</span></td><td><span >940510</span></td><td><span >2 ед.</span></td></tr></tbody></table></div></div>
            </div>

        </div>
    </div>
</div>



    {{-- <div class="site-section py-5" id="blog-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
                        <h2>Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
                        <a href="#" class="blog-thumbnail"><img src="{{ asset('imagesface/cargo_sea_small.jpg')}}"
    alt="Image" class="img-fluid"></a>
    <div class="blog-excerpt">
        <span class="d-block text-muted">Apr 19, 2019</span>
        <h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective
                Logistics</a></h2>

        <p>Far far away, behind the word mountains, far from the countries Vokalia and
            Consonantia, there live
            the blind texts</p>
        <p><a href="single.html" class="text-primary">Read More</a></p>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
            <a href="#" class="blog-thumbnail"><img src="{{ asset('imagesface/cargo_air_small.jpg')}}" alt="Image"
                    class="img-fluid"></a>
            <div class="blog-excerpt">
                <span class="d-block text-muted">Apr 19, 2019</span>
                <h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective
                        Logistics</a></h2>

                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live
                    the blind texts</p>
                <p><a href="single.html" class="text-primary">Read More</a></p>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div> --}}
    </div>



    <div class="site-section bg-light" style="margin:0; padding:0; height:880px; width:100%;" id="contact-section">


        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                    <div class="block-heading-1">
                        {{-- <h2>Контакты</h2> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <form action="#" method="post">
                        <div class="form-group row">
                            <div class="col-md-12 mb-12 mb-lg-12">
                                <input type="text" class="form-control" placeholder="Ваше имя">
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email адрес">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea name="" id="" class="form-control" placeholder="Ваше сообшение." cols="30"
                                    rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 mr-auto">
                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                    value="Отправить">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Наши контакты</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block mb-3">
                                <span class="d-block text-black">Адрес:</span>
                                <span> г. Москва, Винокурова дом 7/5 корпус 3, 117449</span>
                                <p><span> г. Ташкент, Проспект Амира Темура 1</span>

                            </li>
                            <li class="d-block mb-3"><span
                                    class="d-block text-black">Телефон:</span><span>+7 969 179-90-00</span> //
                                <span>+99899 005 9559
                                </span></li>
                            <li class="d-block mb-3"><span
                                    class="d-block text-black">Email:</span><span>ethnodeliveryinfo@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="footer-heading mb-8">Девиз нашей команды</h2>
                            <p>Прошли те времена, когда было достаточно просто хорошего сервиса. Сегодня клиентов нужно
                                удивлять — и удивлять постоянно. Конце концов Клиент – это самый важный посетитель. Не
                                он зависит от нас. Мы зависим от него. Он не прерывает нашу работу. Он – цель нашей
                                работы. Он не по ту сторону нашего бизнеса. Он – его часть. Мы не делаем ему одолжение,
                                обслуживая его. Он делает нам одолжение, давая возможность это сделать. </p>
                        </div>
                    {{-- <div class="col-md-4 ml-auto">
                             <h2 class="footer-heading mb-4">Контакты</h2>
                            <ul class="list-unstyled">
                                <li><a href="#about-section">О нас</a></li>
                                <!-- <li><a href="#">Testimonials</a></li> -->
                                <li><a href="#services-section">Нащи услуги</a></li>
                                <!-- <li><a href="#">Privacy</a></li> -->
                                <li><a href="#contact-section">Контакты</a></li>
                            </ul>
                        </div> --}}

                    </div>
                </div>


                <div class="col-md-4 ml-auto">

                    <h2 class="footer-heading mb-4">Дополнительно</h2>
                    <ul class="list-unstyled main-menu">
                        <li><a href="#about-section">О нас</a></li>
                        <!-- <li><a href="#">Testimonials</a></li> -->
                        <li><a href="#services-section">Нащи услуги</a></li>
                        <!-- <li><a href="#">Privacy</a></li> -->
                        <li><a href="#contact-section">Контакты</a></li>
                    </ul>
                    <!-- <div class="mb-5">
            <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
            <form action="#" method="post" class="footer-suscribe-form">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent"
                  placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                </div>
              </div>
          </div> -->


                    <h2 class="footer-heading mb-4">Мы в социальных сетях</h2>
                    <a href="https://t.me/ethnodeliveryuz" target="_blank" class="pl-3 pr-3"><span class="icon-telegram"></span></a>
                    <a href="https://www.instagram.com/ethnodelivery_uz/?hl=ru" target="_blank" class="pl-3 pr-3"><span class="mr-2  icon-instagram"></span></a>
                    <a href="https://www.facebook.com/fastdeliverytm/" target="_blank" class="pl-3 pr-3"><span class="icon-facebook"></span></a>

                </div>
            </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p class="copyright">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Все права защищены | Быстрые перевозки Москва Ташкент Москва Ethno Delivery
                    </p>
                </div>
            </div>

        </div>
    </footer>

    </div>

    <script src="{{ asset('jsface/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('jsface/popper.min.js')}}"></script>
    <script src="{{ asset('jsface/bootstrap.min.js')}}"></script>
    <script src="{{ asset('jsface/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('jsface/jquery.sticky.js')}}"></script>
    <script src="{{ asset('jsface/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('jsface/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('jsface/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('jsface/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('jsface/aos.js')}}"></script>
    <script src="{{ asset('jsface/main.js')}}"></script>
    <script src="{{ asset('jsface/calculate.js')}}"></script>
    {{-- <script src="{{ asset('jsface/smooth.js')}}"></script> --}}


    <script src="{{ asset('jsface/map.js')}}"></script>
    {{-- <script src="{{ asset('jsface/openstreetmap.js')}}"></script> --}}

    {{-- <script async defer --}}
        {{-- src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACfuyBDhOKGOdpVT9dR29oHXki7Zgs3Rc&callback=initMap"> --}}
    {{-- </script> --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v7.0&appId=2207034049511596&autoLogAppEvents=1"></script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet" />
</body>

</html>
