

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/main.css" /> -->
    <title>lcab</title>
</head>

<body>
@extends('layouts.app')
@section('content')
<header class="p-3 bg-light text-white mb-5" >
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{route('home')}}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
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
                            
                        @endif
                    @else
                        <!-- <a class="btn btn-outline-dark me-2" href="{{ route('lcb') }}">
                            {{ Auth::user()->name }}
                        </a> -->

                        <!-- <div class="btn btn-outline-dark me-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div> -->
                    @endguest
                </div>
            </div>
        </div>
    </header> 
    <div class="d-flex ashki" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=""></i>Панель</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-tachometer-alt me-2"></i>Главная</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Мои заказы</a>
                <a href="#" onclick = toggledannie()  class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Мои данные</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i> Редактировать профиль</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>В работе</a> 
                 <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a> -->
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Техническая поддержка</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Мы на карте</a>

                        <div class="" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item list-group-item list-group-item-action bg-transparent text-danger fw-bold" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Выйти из профиля</a> -->
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0"> <b>{{ Auth::user()->name }}</b>, это ваш личный кабинет</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe </a>
                           
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> -->
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">5</h3>
                                <p class="fs-5">Заказы</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5 my-zakazi">
                    <h3 class="fs-4 mb-3">Ваши заказы</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Услуга</th>
                                    <th scope="col">Цена</th>
                                    <th scope="col">Оплата</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Замена масла</td>
                                    <td>300 руб</td>
                                    <td>да</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Покраска двери</td>
                                    <td>4000 руб</td>
                                    <td>да</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ремонт дворников</td>
                                    <td>1200 руб</td>
                                    <td>нет</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Антифриз</td>
                                    <td>900 руб</td>
                                    <td>да</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="my-dannie ">
                  <h1>Мои данные</h1>
          <a class="navbar-brand text-center" href="#">{{ Auth::user()->name }} 
          <a class="navbar-brand text-center" href="#">{{ Auth::user()->email }} </a>
          <a class="navbar-brand text-center" href="#">{{ Auth::user()->id }} </a>
        </div>  


         <form class="tform ">
  <div class="form-group ">
    <label for="exampleInput">Имя</label>
    <input type="name" class="form-control" id="name" value= {{Auth::user()->name}} >
  
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" value= {{Auth::user()->email}}>
    <small id="emailHelp" class="form-text text-muted">Помните что данные можно менять не чаще чем раз в 30 дней    .</small>
  </div>
  <button type="submit" class="btn btn-primary ">Отправить </button>
   </form>
   <div class="map d-flex justify-content-center ">
   <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d65353.33316472715!2d35.03996492833791!3d48.40807192799197!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1682603676739!5m2!1sru!2sru" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           </div>
        </div>
    </div>
 

    <!-- /#page-content-wrapper -->
    </div>
    
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
    <style>
:root {
  --main-bg-color: #9eb6adb6;
  --main-text-color: #009d63;
  --second-text-color: #bbbec5;
  --second-bg-color: #c1efde;
}

body{
  background-color: rgb(255 255 255 / 50%);
    backdrop-filter: saturate(180%) blur(7px);
    border: 2px solid rgb(255 255 255 / 70%);
    box-shadow: rgb(0 0 0 / 10%) 0px 10px 15px -3px, rgb(0 0 0 / 5%) 0px 4px 6px -2px;
}

.primary-text {
  color: var(--main-text-color);
}

.second-text {
  color: var(--second-text-color);
}

.primary-bg {
  background-color: var(--main-bg-color);
}

.secondary-bg {
  background-color: var(--second-bg-color);
}

.rounded-full {
  border-radius: 100%;
}
.ashki a:focus{
  color:green;
}

#wrapper {
  overflow-x: hidden;
  background-image: linear-gradient(
    to right,
    #baf3d7,
    #c2f5de,
    #cbf7e4,
    #d4f8ea,
    #ddfaef
  );
}

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin 0.25s ease-out;
  -moz-transition: margin 0.25s ease-out;
  -o-transition: margin 0.25s ease-out;
  transition: margin 0.25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

#menu-toggle {
  cursor: pointer;
}

.list-group-item {
  border: none;
  padding: 20px 30px;
}

.list-group-item.active {
  background-color: transparent;
  color: var(--main-text-color);
  font-weight: bold;
  border: none;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
@media (min-width: 768px) {
  .navbar-container {
    position: sticky;
    top: 0;
    overflow-y: auto;
    height: 520px;
  }
  .navbar-container .navbar {
    align-items: flex-start;
    justify-content: flex-start;
    flex-wrap: nowrap;
    flex-direction: column;
    height: 100%;
  }
  .navbar-container .navbar-collapse {
    align-items: flex-start;
  }
  .navbar-container .nav {
    flex-direction: column;
    flex-wrap: nowrap;
  }
  .navbar-container .navbar-nav {
    flex-direction: column !important;
  }
  .osn_cont a{
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    padding: 5rem;
  }
  ul li a:hover {
        color:#fe543a;
  }
  .my_dannie_non{
   display:none;
  }
  .inform{
    display: none;
  }
  .my_dannie_vis {
    text-align: center;
    text-transform: uppercase;
    font-size: 25px;
    padding:5rem;
  }
  .map{
    padding: 5rem;
    /* box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.3); */
}
}
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        // function toggledannie () {
        //     $(".myZakazi").toggleClass ("d-non");
        //     $("inform").toggleClass("d-block", 1000);
        //  }



</script>    
</body>

</html>
