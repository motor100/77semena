<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('/img/favicon.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
  @yield('style')
  <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
  <title>@yield('title', config('app.name') )</title>
</head>

<body>
  <header class="header">

    <div class="header-top">
      <div class="container position-relative">
        <div class="city js-header-city-btn">
          <span class="city-text">Город: </span>
          <span class="city-name">
            <?php if (empty($_COOKIE['city'])): ?>
              <script>
                document.cookie = "city=Миасс; path=/; max-age=2629743; samesite=lax";
              </script>
            <?php else: ?>
              <?php echo $_COOKIE['city']; ?>
            <?php endif; ?>
          </span>
        </div>
        <div class="phone">
          <span class="phone-image">
            <img src="/img/header-phone-icon.svg" alt="">
          </span>
          <a href="tel:+7" class="phone-number">+7 (858) 754-65-85</a>
        </div>
        <div class="callback-btn js-header-callback-btn">
          <div class="callback-btn__text">обратный звонок</div>
        </div>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container">
        <div class="header-content">
          <div class="logo">
            <a href="{{ route('home') }}" class="logo">
              <img class="logo-img" src="/img/logo.svg" alt="">
            </a>
          </div>
          <a href="/catalog" class="catalog-btn">
            <span class="catalog-btn__text">Каталог</span>
          </a>
          <form action="" class="form" method="get">
            <div class="form-container position-relative">
              <input type="text" class="search-input" value="">
              <button type="submit" class="submit-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.875 18.75C15.2242 18.75 18.75 15.2242 18.75 10.875C18.75 6.52576 15.2242 3 10.875 3C6.52576 3 3 6.52576 3 10.875C3 15.2242 6.52576 18.75 10.875 18.75Z" stroke="#A9A9A9" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M16.4437 16.4438L21 21.0001" stroke="#A9A9A9" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
          </form>
          
          <div class="cart">
            <div class="cart-icon">
              <img src="/img/cart-icon.svg" alt="">
            </div>
            <div class="couter">
              <div class="couter-text">3</div>
            </div>
            <div class="cart-text">корзина</div>
            <a href="/cart" class="full-link"></a>
          </div>
        </div>

        <div class="top-menu hidden-mobile">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-7 mx-auto">
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
            <div class="col-md-1"></div>
          </div>
          
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
            <div class="footer-title">Покупателям</div>
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
            <div class="footer-title"></div>
            <div class="footer-menu">
              <ul class="menu">
                <li class="menu-item">
                  <a class="menu-item__link" href="/politika-konfidencialnosti">Политика конфиденциальности</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="/polzovatelskoe-soglashenie-s-publichnoj-ofertoj">Пользовательское соглашение с публичной офертой</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="/garantiya-vozvrata-denezhnyh-sredstv">Гарантия возврата денежных средств</a>
                </li>
                <li class="menu-item">
                  <a class="menu-item__link" href="/dokumenty">Документы</a>
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
          <div class="col-md-3"></div>
          <div class="col-md-2">
            <div class="footer-contacts">
              <div class="footer-title text-right">Мы в соцсетях</div>
              <div class="social-icons text-right">
                <a href="#" class="social-icon__link">
                  <img src="/img/insta-icon.png" alt="">
                </a>
                <a href="#" class="social-icon__link">
                  <img src="/img/ok-icon.png" alt="">
                </a>
                <a href="#" class="social-icon__link">
                  <img src="/img/vk-icon.png" alt="">
                </a>
              </div>
              <div class="phone">+7 (858) 754-65-85</div>
              <div class="email">info@77semena.ru</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="horizontal-line"></div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="copyright font-semibold">@ 77semena, <?php echo date("Y"); ?></div>
          </div>
          <div class="col-md-6">
            <div class="authors">
              <div class="author">
                <span class="author-text">Дизайн </span>
                <a href="#" class="author-name font-semibold">Andrewwebnh</a>
              </div>
              <div class="author">
                <span class="author-text">Поддержка </span>
                <a href="#" class="author-name font-semibold">Button</a>
              </div>
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
        <div class="modal-title">Введите свое имя <br>и номер телефона</div>
        <form id="callback-modal-form" class="form" method="post">
          @csrf
          <label class="label">
            <input type="text" id="name" class="input-field" name="name" required minlength="3" maxlength="20" placeholder="Ваше имя">
          </label>
          <label class="label">
            <input type="text" id="phone" class="input-field js-input-phone-mask" name="phone" required maxlength="18" placeholder="+7 (999) 999 99 99">
          </label>
          <input type="hidden" name="info" id="callback-modal-info" value="">
          <input type="checkbox" name="checkbox" class="custom-checkbox" id="checkbox-callback-modal" checked required onchange="document.querySelector('.js-callback-modal-btn').disabled = !this.checked;">
          <label for="checkbox-callback-modal" class="custom-checkbox-label"></label>
          <span class="checkbox-text">Согласен с <a href="/politika-konfidencialnosti" class="privacy-policy-btn" target="_blank">политикой обработки персональных данных</a></span>
          
          <input type="button" class="submit-btn js-callback-modal-btn" value="Заказать звонок">
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
        <div class="modal-title">Ваш город</div>
        <div class="city-select">
          @foreach($cities as $city)
            <div class="city-item">{{ $city->city }}</div>
          @endforeach
          <div class="city-item">Челябинск</div>
          <div class="city-item">Магнитогорск</div>
        </div>
      </div>
    </div>
  </div>

  <div id="testimonials-modal" class="modal-window testimonialsk-modal">
    <div class="modal-wrapper">
      <div class="modal-area">
        <div class="modal-close">
          <div class="close"></div>
        </div>
        <div class="modal-title">Оставьте свой отзыв</div>
        <form id="testimonials-modal-form" class="form" method="post">
          @csrf
          <label class="label">
            <input type="text" id="name" class="input-field" name="name" minlength="3" maxlength="20" placeholder="Ваше имя">
          </label>
          <label class="label">
            <input type="text" id="city" class="input-field" name="city" required minlength="3" maxlength="30" placeholder="Ваш город">
          </label>
          <label class="label">
            <textarea id="testimonial" class="input-field" name="testimonial" rows="5" placeholder="Напишите отзыв"></textarea>
          </label>
          <input type="checkbox" name="checkbox" class="custom-checkbox" id="checkbox-testimonials-modal" checked required onchange="document.querySelector('.js-testimonials-modal-btn').disabled = !this.checked;">
          <label for="checkbox-testimonials-modal" class="custom-checkbox-label"></label>
          <span class="checkbox-text">Согласен с <a href="/politika-konfidencialnosti" class="privacy-policy-btn" target="_blank">политикой обработки персональных данных</a></span>
          
          <input type="button" class="submit-btn js-testimonials-modal-btn" value="Отправить">
        </form>
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
  <script src="{{ asset('/js/imask.js') }}"></script>
  <script src="{{ asset('/js/main.js') }}"></script>
  
</body>
</html>
