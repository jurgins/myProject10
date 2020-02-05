<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
      <title>XPX переходи на новый уровень!</title>
      <meta name="description" content="1-2-3">
        <meta name="keywords" content=" , , ,">
          <meta name="author" content="Okolo-Kulak Helena">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->

                <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet"> -->

                  <link rel="stylesheet" href="css/icon-font.css">
                    <link rel="stylesheet" href="{{asset('media/css/style.css')}}">
                      <link rel="shortcut icon" type="image/png" href="{{asset('media/img/img/favicon.ico')}}">
                      @section('styles')
                      @show

    </head>
  <body style="margin: 0; padding: 0;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Always expand</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>

    <header class="header">
      <div class="container">
        <!-- <div class="row"> -->

        <!-- </div> -->

        <div class="row">
          <div class="col-xs-12 col-md-3 col-sm-3">
            <div class="logo-box">
             <a href="#" class="logo_link"><img src="{{asset('media/img/img/logo.png')}}" alt="Logo" class="logo"/></a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-sm-6">
            <p class="head_phone">
              <a href="tel:+375(29)6500000" class="tel_link">
                +375 (29) 650 00 00
              </a>
            </p>
          </div>
           <!-- Button trigger modal -->
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            Заказать звонок
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="name">Имя</label>
                      <input type="text" class="form-control" id="name" placeholder="Ваше Имя">
                    </div>
                    <div class="form-group">
                      <label for="phone">Телефон</label>
                      <input type="password" class="form-control" id="phone" placeholder="Ваш телефон">
                      <small id="phoneHelp" class="form-text text-muted">Мы никогда не передадим ваш телефон кому-либо еще.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Заказать</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
          <div class="hidden-xs col-md-3 col-sm-3">
              <div class="input-group md-form form-sm form-1 pl-0">
                <div class="input-group-prepend">
                 <form action="{{asset('search')}}" metod="get">
                    @csrf
                    <button class="input-group-text purple lighten-3" id="basic-text1" type="submit">
                    <img src="{{asset('media/img/img/search_icon.png')}}" width="100%"/>
                  </button>
                </div>
                <input class="form-control my-0 py-1" type="search" name="search" placeholder="Поиск" aria-label="Search">
                 </form>
              </div>
         </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="list-group list-group-flush">
            <div id="basket">
              <img src="{{asset('media/img/img/basket.svg')}}"/>
            <table id="bascets">
                <tbody>
                <tr style="display: none;" class="hPb">
                    <td>Выбрано:</td>
                    <td><span id="totalGoods">0</span> товаров</td>
                    <td>Сумма: &asymp; </td>
                    <td><span id="totalPrice">0</span> руб.</td>
                </tr>
                <tr style="display: table-row;" class="hPe">
                    <td colspan="2">Корзина пуста</td>
                </tr>
                <tr>
                    <td><a style="display: none;" id="clearBasket" href="#">Очистить</a></td>
                    <td><a style="display: none;" id="checkOut" href="{{asset('basket')}}">Оформить</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
      </div>
      <div class="navbar">
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="">
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a href="/home">Кабинет пользователя</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>

    </header>

    <nav class="nav nav-pills nav-fill nav_header">
      <a class="nav-item nav-link" href="#">Каталог</a>
      <a class="nav-item nav-link" href="{{asset('about')}}">O компании</a>
      <a class="nav-item nav-link" href="{{asset('otzav')}}">Отзывы</a>
      <a class="nav-item nav-link" href="{{asset('contact')}}">Контакты</a>
    </nav>

    @yield('content')
    <!-- footer -->
    <footer>
      <div class="text-box">
        <h1 class="heading-primary">
          <span class="heading-primary-main">XPX</span>
          <span class="heading-primary-sub">Переходи на новый уровень!</span>
        </h1>
      </div>
      <p class="pull-right">
        <a href="#">Back to top</a>
      </p>
      <p>Cвидетельство о регистрации:</p>
    </footer>
    <!-- end footer -->


    <script src="{{asset('media/js/jquery-3.4.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="{{asset('media/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('media/js/cart.js')}}"></script>
@section('scripts')

@show
  </body>
</html>
