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

    <div class="header-top hidden-mobile">
      <div class="container position-relative">
        <div class="city-select js-header-city-btn">
          <span class="city-text">Город:&nbsp;</span>
          <span class="city-name">
            <?php
            if (empty($_COOKIE['city'])) {
              setcookie("city", "Миасс", time()+2629743, "/");
              echo "Миасс";
            } else {
              echo $_COOKIE['city'];
            }
            ?>
          </span>
        </div>
        <div class="phone">
          <span class="phone-image">
            <img src="/img/header-phone-icon.svg" alt="">
          </span>
          <a href="tel:+7" class="phone-number">+7 (858) 754-65-85</a>
        </div>
        <div class="callback-btn js-header-callback-btn">
          <span class="callback-btn__text">обратный звонок</span>
        </div>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container">
        <div class="header-content">
          <div class="logo">
            <a href="{{ route('home') }}" class="full-link"></a>
          </div>
          <div class="catalog-btn-wrapper hidden-mobile">
            <a href="/catalog" class="catalog-btn">
              <span class="catalog-btn__text">Каталог</span>
            </a>
          </div>
          <form class="form search-form" action="/poisk" method="get">
            <div class="form-container position-relative">
              <input type="text" class="search-input" name="q" minlength="3" maxlength="20" autocomplete="off" required>

              <button type="submit" class="submit-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.875 18.75C15.2242 18.75 18.75 15.2242 18.75 10.875C18.75 6.52576 15.2242 3 10.875 3C6.52576 3 3 6.52576 3 10.875C3 15.2242 6.52576 18.75 10.875 18.75Z" stroke="#A9A9A9" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M16.4437 16.4438L21 21.0001" stroke="#A9A9A9" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>

              <div class="search-close"></div>

              <div class="autocomplete-dropdown">
                <ul class="autocomplete-list js-search-rezult">
                  <li class="autocomplete-list-item">
                    <div class="autocomplete-list-item__title">Семена арбуза «Семена Алтая» ЭКО 15шт</div>
                    <div class="autocomplete-list-item__price">48&#8381;</div>
                    <a href="#" class="full-link"></a>
                  </li>
                </ul>
                <div class="autocomplete-see-all">
                  <a href="#" class="autocomplete-see-all-btn">Показать все результаты</a>
                </div>
              </div>

            </div>
          </form>
          <div class="cart hidden-mobile">
            <div class="cart-icon">
              <img src="/img/cart-icon.svg" alt="">
            </div>
            @if(isset($cart_count))
              <div id="header-cart-counter" class="cart-counter">{{ $cart_count }}</div>
            @else
              <div id="header-cart-counter" class="cart-counter hidden"></div>
            @endif
            <div class="cart-text">корзина</div>
            <a href="/cart" class="full-link"></a>
          </div>
        </div>
        <div class="top-menu hidden-mobile">
          <div class="row">
            <div class="col-xl-4 col-lg-2"></div>
            <div class="col-xl-7 col-lg-9">
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
            <div class="col-xl-1 col-lg-1"></div>
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
            <div class="logo"></div>
          </div>
          <div class="col-xl-2 col-md-3">
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
            <div class="footer-title hidden-mobile"></div>
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
          <div class="col-xl-2 col-md-1 d-none d-lg-block"></div>
          <div class="col-md-3">
            <div class="footer-contacts">
              <div class="footer-title">Мы в соцсетях</div>
              <div class="social-icons">
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
        <div class="copyright">@ 77semena, <?php echo date("Y"); ?></div>
        <div class="author">
          <span class="author-text">Дизайн&nbsp;</span>
          <a href="https://nhfuture.ru/" class="author-name" target="_blank">Andrewwebnh</a>
        </div>
        <div class="author">
          <span class="author-text">Поддержка&nbsp;</span>
          <a href="https://mybutton.ru/" class="author-name" target="_blank">Button</a>
        </div>
      </div>
    </div>
  </footer>

  <div class="burger-menu-wrapper hidden-desktop">
    <div class="burger-menu"></div>
  </div>
  <div class="mobile-menu hidden-desktop">
    <div class="city-select js-mobile-menu-city-btn">
      <span class="city-text">Город:&nbsp;</span>
      <span class="city-name">
        <?php
        if (empty($_COOKIE['city'])) {
          echo "Миасс";
        } else {
          echo $_COOKIE['city'];
        }
        ?>
      </span>
    </div>
    <ul class="menu">
      <li class="menu-item">
        <a href="{{ route('home') }}">Главная</a>
      </li>
      <li class="menu-item">
        <a href="/catalog">Каталог</a>
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
    <div class="phone">
      <img src="/img/mobile-menu-phone-icon.svg" class="phone-image" alt="">
      <a href="tel:+78587546585" class="phone-text">+7 (858) 754-65-85</a>
    </div>
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
            <div class="city-item">{{ $city->title }}</div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div id="testimonials-modal" class="modal-window testimonials-modal">
    <div class="modal-wrapper">
      <div class="modal-area">
        <div class="modal-close">
          <div class="close"></div>
        </div>
        <div class="modal-title">Оставьте свой отзыв</div>
        <form id="testimonials-modal-form" class="form" method="post">
          @csrf
          <label class="label">
            <input type="text" id="testimonials-name" class="input-field" name="name" required minlength="3" maxlength="20" placeholder="Ваше имя">
          </label>
          <label class="label">
            <input type="text" id="testimonials-city" class="input-field" name="city" required minlength="3" maxlength="30" placeholder="Ваш город">
          </label>
          <label class="label">
            <textarea id="testimonials-text" class="input-field" name="text" rows="5" required minlength="3" maxlength="300" placeholder="Напишите отзыв"></textarea>
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
    <div class="messages-cookies">
      <div class="container">
        <div class="messages-cookies-wrapper">
          <div class="messages-cookies-text">Этот сайт использует cookies, не пугайтесь.<br>Если согласны, то нажмите "ОК"</div>
          <button class="messages-cookies-close">ОК</button>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="sticky-desktop-menu hidden-mobile">
    <div class="container">
      <div class="header-content">
        <div class="logo">
          <a href="{{ route('home') }}" class="full-link"></a>
        </div>
        <div class="catalog-btn-wrapper">
          <a href="/catalog" class="catalog-btn">
            <span class="catalog-btn__text">Каталог</span>
          </a>
        </div>
        <form class="form" action="/poisk" method="get">
          <div class="form-container position-relative">
            <input type="text" class="search-input" name="q" minlength="3" maxlength="20" required>
            @csrf
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
          @if(isset($cart_count))
            <div id="sticky-menu-cart-counter" class="cart-counter">{{ $cart_count }}</div>
          @else
            <div id="sticky-menu-cart-counter" class="cart-counter hidden"></div>
          @endif
          <div class="cart-text">корзина</div>
          <a href="/cart" class="full-link"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="fixed-bottom-menu hidden-desktop">
    <div class="menu-wrapper">
      <div class="menu-item">
        <img src="/img/fixed-bottom-menu-catalog-icon.svg" alt="">
        <div class="title">Каталог</div>
        <a href="/catalog" class="full-link"></a>
      </div>
      <div class="menu-item cart-menu-item">
        <img src="/img/fixed-bottom-menu-cart-icon.svg" alt="">
        <div class="title">Корзина</div>
        @if(isset($cart_count))
          <div id="mobile-cart-counter" class="cart-counter">{{ $cart_count }}</div>
        @else
          <div id="mobile-cart-counter" class="cart-counter hidden"></div>
        @endif
        <a href="/cart" class="full-link"></a>
      </div>
      <div class="menu-item">
        <img src="/img/fixed-bottom-menu-phone-icon.svg" alt="">
        <div class="title">Звонок</div>
        <a href="tel:+78587546585" class="full-link"></a>
      </div>
    </div>
  </div>

  @if(Auth::check())
    <div class="top-line-is-login">
      <div class="container-fluid">
        <div class="text-wrapper">
          <div class="top-line__text dashboard">
            <a href="/dashboard">Панель управления</a>
          </div>
          <div class="top-line__text logout">
            <form class="form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="logout-btn" type="submit">Выйти</button>
            </form>
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
