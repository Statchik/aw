<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
 
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
    
    <a class="form-group mx-5 mt-5 text-decoration-none btn btn-dark" href="{{route('lcb')}}">  < Назад  </a>

    <form>
  <div class="form-group mx-5 mt-5">
    <label for="exampleInput">Имя</label>
    <input type="name" class="form-control" id="name" value= {{Auth::user()->name}} >
  
  </div>
  <div class="form-group mx-5">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" value= {{Auth::user()->email}}><b>{{Auth::user()->id}};</b> 
    <small id="emailHelp" class="form-text text-muted">Помните что данные можно менять не чаще чем раз в 30 дней    .</small>
  </div>
  <div class="form-check mx-5 ">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  </div>
  <button type="submit" class="btn btn-primary mx-5">Отправить </button>

</form>

    <!-- <form action="">
        <input type="text" value={{ Auth::user()->name }}>
        <input type="text" value={{ Auth::user()->email }}>
    </form> -->
   
</body>
</html>