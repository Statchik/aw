@extends('layouts.app')
@section('content')
    {{-- шапка --}}

    <header class="p-3 bg-light text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="../public/photo/logo/logo.png" width="125">
                </a>

                <ul class="nav col-12 col-lg-auto mx-auto mb-2 justify-content-center mb-md-0">
                    <li><a class="nav-link px-2 text-secondary">+7 (3812) 90-62-03</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Записаться на сервис</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Заказать звонок</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Наши услуги</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Блог</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Отзывы</a></li>
                    <li><a href="filials" class="nav-link px-2 text-dark">Филиалы</a></li>
                </ul>

                <form class="col-12 col-lg-auto mx-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Поисковая система..."aria-label="Search">
                </form>

                <div class="text-end">
                    @guest
                        @if (Route::has('login'))
                            <a class="btn btn-outline-dark me-2" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        @endif

                        @if (Route::has('register'))
                            <a class="btn btn-outline-dark me-2" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        @endif
                    @else
                        <a class="btn btn-outline-dark me-2" href="{{ route('lcb') }}">  
                            {{ Auth::user()->name }}
                        </a>

                        <div class="btn btn-outline-dark me-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </header>

    {{-- Слайдер --}}

    <div class="container-fluid my-carousel">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../public/photo/slider/autosalon.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-2 text-start">АВТОЗАПЧАСТИ ПО ОПТОВЫМ ЦЕНАМ</h5>
                        <p class="text-start">во всех филиалах сети автосервиса AutoWorks.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../public/photo/slider/autosalon2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-2 text-start">РАССРОЧКА НА РЕМОНТ И ЗАПЧАСТИ</h5>
                        <p class="text-start">Без комиссии и процентов сроком на 3, 4 или 6 месяцев</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../public/photo/slider/autosalon3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-2 text-start">ЗАМЕНА МАСЛА В ДВС БЕСПЛАТНО</h5>
                        <p class="text-start">При покупке масла и фильтра в сети автосервиса AutoWorks</p>
                    </div>
                    <a name="yslygi">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- Наши услуги --}}

    <section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="section-header text-center">
              <h2 class="fw-bold fs-1">
                Наши
                <span class="b-class-secondary">услуги </span>
              </h2>
              <p class="sec-icon"><i class="fa-solid fa-gear"></i></p>
            </div>
          </div>
          <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">
            <div class="col">
              <div class="service-card">
                <h3>Ремонт / Замена</h3>
                <p>Подвестки, двигатели</p>
              </div>
            </div>
            <div class="col">
              <div class="service-card">
                <h3>Диагностика</h3>
                <p>Подвестки, двигатели</p>
              </div>
            </div>
            <div class="col">
              <div class="service-card">
                <h3>Кузовые работы</h3>
                <p>Покраска, полировка</p>
              </div>
            </div>
            <div class="col">
              <div class="service-card">
                <h3>Ремонт по маркам</h3>
                <p>BMW, Land Rover и др.</p>
              </div>
            </div>
            <div class="col">
              <div class="service-card">
                <h3>Другие услуги</h3>
                <p>Шиномонтаж, мойка</p>
              </div>
            </div>
            <div class="col">
              <div class="service-card">
                <h3>Техническое обслуживание</h3>
                <p>Замена масла</p>
              </div>
            </div>
          </div>
        </div>
      </section>

    {{-- какая-то инфа --}}

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="../public/photo/slider/polirov.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                    width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="fw-bold lh-1 mb-3">Почему именно AutoWorks?</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-warning btn-lg px-4 me-md-2">Посмотреть на наши отзывы</button>
                    {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> --}}
                </div>
            </div>
        </div>
    </div>



    <div class="cards-list">

        <div class="card 1">
            <div class="card_image"> <img src="../public/photo/card/qrcode.png" /> </div></a>
        </div>

          <div class="card 2">
          <div class="card_image">
            <img src="https://media.giphy.com/media/4fGNh8cEOdGWa2hA4z/giphy.gif" />
            </div>
        </div>

        <div class="card 3">
          <div class="card_image">
            <img src="https://media.giphy.com/media/5a3xbeZj7AkqG8197S/giphy.gif" />
          </div>
        </div>

        <div class="card 3">
            <div class="card_image">
              <img src="https://media.giphy.com/media/OrNkIcgmjBQeFM1vEs/giphy.gif" />
            </div>
          </div>

          <div class="card 4">
          <div class="card_image">
            <img src="https://media.giphy.com/media/l41YmiCZ8HXvVl5M4/giphy.gif" />
            </div>
          {{-- <div class="card_title title-black">
            <p>Card Title</p>
          </div> --}}
          </div>

        </div>

    {{-- футер --}}

    <footer>
        <div class="content">
          <div class="top">
            <div class="logo-details">
                <img src="../public/photo/logo/logo.png" width="125">
            </div>
            <div class="media-icons">
              {{-- <a href="#"><i class="fab fa-facebook">VK</i></a>
              <a href="https://www.instagram.com/AutoWorks/"><i class="fab fa-instagram">INS</i></a> --}}
            </div>
          </div>
          <div class="link-boxes">
            <ul class="box">
              <li class="link_name">Полезные ссылки</li>
              <li><a href="#">Главная</a></li>
              <li><a href="{% url 'about' %}">О нас</a></li>
              <li><a href="#yslygi">Наши услуги</a></li>
              <li><a href="{% url 'about' %}">Филиалы</a></li>

            </ul>
              <ul class="box">
                <li class="link_name">Полезные ссылки</li>
                <li><a href="#">Главная</a></li>
                <li><a href="{% url 'about' %}">О нас</a></li>
                <li><a href="#yslygi">Наши услуги</a></li>
                <li><a href="{% url 'about' %}">Филиалы</a></li>

              </ul>
            <ul class="box">
              <li class="link_name">Блог</li>
              <li><a href="{% url 'category' 6 %}">VK</a></li>
              <li><a href="{% url 'category' 5 %">YouTube</a></li>
              <li><a href="{% url 'category' 11 %">Telegram</a></li>
              <li><a href="{% url 'category' 2 %">Instagram</a></li>

            </ul>
            <ul class="box">
              <li class="link_name">Информация</li>
              <li><a href="{% url 'licence' %}">Поддержка</a></li>
              <li><a href="{% url 'terms' %}">Вакансии</a></li>
              <li><a href="{% url 'privacy' %}">Отзывы</a></li>
              <li><a href="{% url 'upload' %}">Публичная оферта</a></li>

            </ul>
            <ul class="box">
              <li class="link_name">Наши контакты</li>
              <li><a>+7 (3812) 90-62-03</a></li>
              <li><a target="on_blank" href="mailto:'connectpicoindia@gmail.com'">AutoWorksOffical@gmail.com</a></li>
            </ul>
          </div>
        </div>

        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">AutoWorks.com © 2023 <a href="#">Prod by lomt1k & Creeze.</a></span>
          </div>
        </div>
      </footer>

    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
@endsection
