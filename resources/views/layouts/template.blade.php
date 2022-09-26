<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon"> -->
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
  @yield('style')
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <title>@yield('title', 'Магазин семян')</title>
</head>

<body>
  <header class="header">

    <div class="header-top">
      <!-- <div class="left"></div>
      <div class="right"></div> -->
      <div class="container">
      <span class="city header-city-btn">
        <?php if (empty($_COOKIE['city'])): ?>
          <script>
            document.cookie = "city=Миасс; path=/; max-age=2629743; samesite=lax";
          </script>
        <?php else: ?>
          <?php echo $_COOKIE['city']; ?>
        <?php endif; ?>
      </span>

        <span class="phone">+7 (858) 754-65-85</span>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container">
        <div class="logo">
          <a href="{{ route('home') }}" class="logo">
            <img class="logo-img" src="/img/logo.svg" alt="">
          </a>
        </div>
        <button>Каталог</button>
        <input type="text" value="">
        <div class="cart">
          <div class="cart-icon">
            <img src="/img/cart-icon.svg" alt="">
          </div>
          <div class="couter">
            <span class="couter-text">3</span>
          </div>
          <div class="cart-text">корзина</div>
        </div>

        <div class="top-menu hidden-mobile">
          <ul class="menu">
            <li class="menu-item">
              <a href="{{ route('home') }}">Главная</a>
            </li>
            <li class="menu-item">
              <a href="/o-kompanii">О компании</a>
            </li>
            <li class="menu-item">
              <a href="/dostavka-i-oplata">Доставка и оплата</a>
            </li>
            <li class="menu-item">
              <a href="/novosti">Новости</a>
            </li>
            <li class="menu-item">
              <a href="/otzyvy">Отзывы</a>
            </li>
            <li class="menu-item">
              <a href="/kontakty">Контакты</a>
            </li>
          </ul>
        </div>

      </div>
    </div>
    
  </header>
  
  @yield('content')

  <footer class="footer">
    <div class="horizontal-line"></div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="logo">
              <img class="logo-img" src="/img/logo.svg" alt="">
            </div>
          </div>
          <div class="col-md-2">
            <div class="for-customers__title">Покупателям</div>
            <div class="footer-menu">
              <ul class="menu">
                <li class="menu-item">
                  <a class="menu-item__link" href="/o-kompanii">О компании</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="/dostavka-i-oplata">Доставка и оплата</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="/otzyvy">Отзывы</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="/novosti">Новости</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="for-customers__title"></div>
            <div class="footer-menu">
              <ul class="menu">
                <li class="menu-item">
                  <a class="menu-item__link" href="/politika-konfidencialnosti">Политика конфиденциальности</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="#">Пользовательское соглашение с публичной офертой</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="#">Гарантия возврата денежных средств</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="#">Сертификация</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="/kontakty">Контакты</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="/profile">Личный кабинет партнера</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-5">
            <div class="socila__title">Мы в соцсетях</div>
          </div>

          
        </div>
      </div>
    </div>
    <div class="horizontal-line"></div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="copyright">@ 77semena, <?php echo date("Y"); ?></div>
          </div>
          <div class="col-md-6">
            <div class="authors">
              <span class="author">Дизайн Andrewwebnh</span>
              <span class="author">Поддержка Button</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
    

  <div class="burger-menu-wrapper hidden-desktop">
    <div class="burger-menu">
      <span></span>
    </div>
  </div>
  <div class="mobile-menu hidden-desktop">
    <ul class="menu">
      <li class="menu-item">
        <a href="{{ route('home') }}">Главная</a>
      </li>
      <li class="menu-item">
        <a href="/#categories">Каталог</a>
      </li>
      <li class="menu-item">
        <a href="/o-nas">О нас</a>
      </li>
      <li class="menu-item">
        <a href="/oplata-i-dostavka">Оплата и доставка</a>
      </li>
      <li class="menu-item">
        <a href="/akcii">Акции</a>
      </li>
      <li class="menu-item">
        <a href="/otzyvy">Отзывы</a>
      </li>
      <li class="menu-item">
        <a href="/kontakty">Контакты</a>
      </li>
    </ul>
    <div class="grey-line"></div>
    <div class="phone">
      <a href="tel:+78003506337">+7 800 350 6337</a>
    </div>
    <div class="free-call-text">(звонок по России бесплатный)</div>
  </div>

  <div id="callback-modal" class="modal-window callback-modal">
    <div class="modal-wrapper">
      <div class="modal-area">
        <div class="modal-close">
          <div class="close"></div>
        </div>
        <div class="modal-title">Заполните данные и с вами свяжется наш менеджер</div>
        <form id="callback-modal-form" class="form" method="post">
          @csrf
          <label class="label">
            <span>Ваше ФИО</span>
            <input type="text" id="name" class="input-field" name="name" minlength="3" maxlength="20">
          </label>
          <label class="label">
            <span>Ваш телефон*</span>
            <input type="text" id="phone" class="input-field" name="phone" required maxlength="16">
          </label>
          <input type="hidden" name="info" id="info" value="">
          <div class="required-text">* поля обязательны для заполнения</div>
          <input type="checkbox" name="checkbox" class="custom-checkbox" id="checkbox-callback-modal" checked required onchange="document.querySelector('.callback-modal-btn').disabled = !this.checked;">
          <label for="checkbox-callback-modal" class="custom-checkbox-label"></label>
          <span class="checkbox-text">Согласен с <a href="/politika-konfidencialnosti" class="privacy-policy-btn" target="_blank">политикой обработки персональных данных</a></span>
          
          <input type="button" class="grey-btn submit-btn callback-modal-btn" value="отправить">
        </form>
      </div>
    </div>
  </div>

  <div id="select-city-modal" class="modal-window select-city-modal">
    <div class="modal-wrapper">
      <div class="modal-area">
        <div class="modal-close">
          <div class="close"></div>
        </div>
        <div class="modal-title">Выберите город</div>
        <div class="city-search">
          <span class="city-item">Миасс</span>
          <span class="city-item">Златоуст</span>
          <form class="form" method="post">
            <input type="text" name="city" id="city-search-input" class="input-field city-search-input" autocomplete="off">
          </form>
          <div id="city-search-rezult" class="city-search-rezult"></div>
        </div>     
      </div>
    </div>
  </div>

  <?php if (empty($_COOKIE['we-use-cookie'])): ?>
    <div class="messages_cookies">
      <div class="messages_cookies-wrapper">
        <div class="messages_cookies-text">Этот веб-сайт использует файлы cookie. Вы можете прочитать подробнее о cookie-файлах или изменить настройки браузера. Продолжая пользоваться сайтом без изменения настроек, вы даёте согласие на использование ваших cookie-файлов.</div>
        <button class="messages_cookies-close">ОК</button>
        <div class="clear-both"></div>
      </div>
    </div>
  <?php endif; ?>

  @if(Auth::check())
    <div class="top-line-is-login">
      <div class="container-fluid">
        <div class="text-wrapper">
          <div class="top-line__text dashboard">
            <a href="/dashboard">Панель управления</a>
          </div>
          <div class="top-line__text logout">
            <a href="{{ route('logout') }}">Выйти</a>
          </div>
        </div>
      </div>
    </div>
  @endif

  @yield('script')
  <!-- <script src="{{ asset('js/imask.js') }}"></script> -->
  <script src="{{ asset('js/main.js') }}"></script>

  
</body>
</html>
