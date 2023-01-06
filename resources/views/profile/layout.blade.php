<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Кабинет партнера | @yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('img/favicon.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('/profilepanel/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/profilepanel/css/profile.css') }}">
</head>
<body>
  <div class="wrapper">

    <!-- header -->
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="logo">
              <a href="{{ route('home') }}">
                <img src="/img/desktop-logo.svg" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="partner">
              <!-- <span class="partner-text">ЛК партнера:&nbsp;</span> -->
              <span class="partner-name">{{ $office->title }}&nbsp;{{ $office->address }}</span>
            </div>
          </div>
          <div class="col-md-5">
            <ul class="top-menu">
              <li class="menu-item">
                <a href="/profile">Заказы</a>
              </li>
              <li class="menu-item">
                <a href="/calc">Расчеты</a>
              </li>
              <li class="menu-item">
                <a href="/done-orders">Выданные заказы</a>
              </li>
            </ul>
          </div>
          <div class="col-md-1">
            <div class="logout">
              <form class="form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="logout-btn" type="submit">
                  <span class="logout-text">выход</span>
                  <img src="/profilepanel/img/logout-icon.svg" class="logout-image" alt="">
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="container">

        <div class="content-header mb-4">
          <div class="page-title">@yield('title')</div>
        </div>

        @yield('profilecontent')

      </div>
    </div>

    <!-- footer -->
    <footer class="footer">
      <div class="horizontal-line"></div>
      <div class="footer-content">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="support">
                <div class="support-text">Телефон менеджера<br>интернет-магазина</div>
                <div class="support-phone">+7 (858) 754-65-85</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="to-home">
                <a href="/" class="to-home-btn" target="_blank">Вернуться в магазин</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>

  @yield('script')
  <!-- <script src="{{-- asset('/admin/js/profile.js') --}}"></script> -->
</body>
</html>