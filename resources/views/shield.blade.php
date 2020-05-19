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
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span
                                class="d-none d-md-inline-block">ethnodeliveryinfo@gmail.com</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="#" class=""><span class="mr-2  icon-phone"></span> <span
                                class="d-none d-md-inline-block">+79266800899</span></a>
                        <span class="mx-md-2 d-inline-block"></span>

                        <a href="#" class=""><span class="mr-2  icon-phone"></span> <span
                                class="d-none d-md-inline-block">+998(99)0055995</span></a>

                        <div class="float-right">
                            <span class="d-none d-md-inline-block">1 USD =
                                {{ $sum->currencyPrice }}</span>
                            <span class="mx-md-2 d-inline-block"></span>

                            <span class="d-none d-md-inline-block"></span>1
                            RUB = {{ $sum->currencyPrice }}
                            <span class="mx-md-2 d-inline-block"></span>
                            <a href="#" class=""><span class="mr-2  icon-telegram"></span> <span
                                    class="d-none d-md-inline-block"></span></a>
                            {{-- <span class="mx-md-2 d-inline-block"></span> --}}
                            <a href="#" class=""><span class="mr-2  icon-youtube"></span> <span
                                    class="d-none d-md-inline-block"></span></a>
                            {{-- <span class="mx-md-2 d-inline-block"></span> --}}
                            <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span
                                    class="d-none d-md-inline-block"></span></a>
                            {{-- <span class="mx-md-2 d-inline-block"></span> --}}
                            <a href="{{ route('login') }}" class=""><span class="mr-2  icon-sign-in"></span> <span
                                    class="d-none d-md-inline-block">Вход</span></a>

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
                                <li><a href="#calculator-section" class="nav-link">Калькулятор</a></li>
                                <li><a href="#pricing-section" class="nav-link">Тарифы</a></li>
                                <li><a href="#about-section" class="nav-link">О нас</a></li>
                                <li><a href="#why-us-section" class="nav-link">Почему Мы</a></li>
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


                            {{-- @method('POST') --}}

                            {{csrf_field()}}
                            <div class="form-group d-flex">
                                {{ Form::text('refNumber', null, ['class' => 'form-control', 'style'=>'font-size:24px;', 'placeholder'=>'Введите номер посылки', 'id'=>'refNumber']) }}
                                {!! Form::submit('Поиск', ['class'=>'btn btn-primary', 'onclick'=>'showSearch();']) !!}
                                {!!Form::close()!!}
                            </div>
                        </div>

                        <div class="col-lg-4" data-aos="fade-up">

                            <center><img src="{{ asset('imagesface/mobile.webp')}}" alt="Image" class="img-fluid">
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

            <div class="site-section bg-light" id="search-section" style="display:none">
                <div class="container">
                    <div class="row mb-5 justify-content-center">
                        <div class="col-md-7 text-center">
                            <div class="block-heading-1">
                                <h2>Статистика вашей посылки</h2>
                                <p>Ожидайте вашу посылку примерно от ... числа до числа</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="owl-carousel owl-all"> --}}
                    <div class="block__35630">
                        <h3 class="mb-3"> </h3>
                        <div class="col-md-12 col-lg-12">

                            <div class="vtl">
                                <div class="ewrap">
                                    <div class="event">


                                        @if(isset($listofparcels))
                                        @foreach ($listofparcels as$key=>$item )
                                        {{ $item->refNumber }}
                                        @endforeach
                                        <strong class="date">11111</strong>
                                        <p class="text">
                                            Статус посылки
                                        </p>
                                        @else
                                        <strong class="date">22222</strong>
                                        <p class="text">
                                            Статус посылки
                                        </p>
                                        @endif
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    {{-- </div> --}}
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
                                    <span class="number"><span data-number="15">0</span>+</span>
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

        <div class="site-section" id="calculator-section">
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
                                <span><span>$6</span> / кг</span>
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
                                <span><span>$10</span> / кг</span>
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
                                <span><span>$30</span> / кг</span>
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

        <div class="block__73694 site-section border-top" id="why-us-section">
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


        {{-- <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
        <div class="container">

            <div class="text-center mb-5">
                <div class="block-heading-1">
                    <h2>Happy Clients</h2>
                </div>
            </div>

            <div class="owl-carousel nonloop-block-13">
                <div>
                    <div class="block-testimony-1 text-center">

                        <blockquote class="mb-4">
                            <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad
                                Commas, wild
                                Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She
                                packed her seven
                                versalia, put her initial into the belt
                                and made herself on the way.&rdquo;</p>
                        </blockquote>

                        <figure>
                            <img src="{{ asset('imagesface/person_4.jpg')}}" alt="Image"
        class="img-fluid rounded-circle mx-auto">
        </figure>
        <h3 class="font-size-20 text-black">Ricky Fisher</h3>
    </div>
    </div>

    <div>
        <div class="block-testimony-1 text-center">
            <blockquote class="mb-4">
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                    almost
                    unorthographic life One day however a small line of blind text by the name of Lorem
                    Ipsum decided to
                    leave for the far World of Grammar.&rdquo;</p>
            </blockquote>
            <figure>
                <img src="{{ asset('imagesface/person_2.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

        </div>
    </div>

    <div>
        <div class="block-testimony-1 text-center">


            <blockquote class="mb-4">
                <p>&ldquo;A small river named Duden flows by their place and supplies it with the
                    necessary regelialia.
                    It is a paradisematic country, in which roasted parts of sentences fly into your
                    mouth.&rdquo;</p>
            </blockquote>

            <figure>
                <img src="{{ asset('imagesface/person_1.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 text-black">Mellisa Griffin</h3>


        </div>
    </div>

    <div>
        <div class="block-testimony-1 text-center">
            <blockquote class="mb-4">
                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                    the Semantics, a
                    large language ocean.&rdquo;</p>
            </blockquote>

            <figure>
                <img src="{{ asset('imagesface/person_3.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

        </div>
    </div>


    </div>

    </div>
    </div> --}}

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
    {{-- </div> --}}



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
                    {{-- <form action="#" method="post">
                        <div class="form-group row">
                            <div class="col-md-6 mb-4 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30"
                                    rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mr-auto">
                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                    value="Send Message">
                            </div>
                        </div>
                    </form> --}}
                </div>
                <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Наши контакты</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block mb-3">
                                <span class="d-block text-black">Адрес:</span>
                                <span> г. Москва, 2-Нагатинский проезд 2, строение 8</span>
                                <p><span> г. Ташкент, Проспект Амира Темура 1</span>

                            </li>
                            <li class="d-block mb-3"><span
                                    class="d-block text-black">Телефон:</span><span>+79266800899</span> //
                                <span>+998990055995
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
                        <div class="col-md-4 ml-auto">
                            {{-- <h2 class="footer-heading mb-4">Дополнительно</h2>
                            <ul class="list-unstyled">
                                <li><a href="#about-section">О нас</a></li>
                                <!-- <li><a href="#">Testimonials</a></li> -->
                                <li><a href="#services-section">Нащи услуги</a></li>
                                <!-- <li><a href="#">Privacy</a></li> -->
                                <li><a href="#contact-section">Контакты</a></li>
                            </ul> --}}
                        </div>

                    </div>
                </div>
                <div class="col-md-4 ml-auto">

                    <h2 class="footer-heading mb-4">Дополнительно</h2>
                    <ul class="list-unstyled">
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


                    <!-- <h2 class="footer-heading mb-4">Follow Us</h2>
          <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </form> -->
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> Все права защищены | Быстрые перевозки Москва Ташкент Москва Ethno Delivery
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
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
    <script src="{{ asset('jsface/smooth.js')}}"></script>


    <script src="{{ asset('jsface/map.js')}}"></script>
    {{-- <script src="{{ asset('jsface/openstreetmap.js')}}"></script> --}}

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACfuyBDhOKGOdpVT9dR29oHXki7Zgs3Rc&callback=initMap">
    </script>


    <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet" />
</body>

</html>
