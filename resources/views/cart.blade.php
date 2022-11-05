@section('title', 'Корзина')

@extends('layouts.main')

@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">корзина</div>
  </div>
</div>

<div class="cart">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text section-title-purple">Ваша корзина</div>
        <div class="back back-absolute" onclick="history.back();">
          <img src="/img/arrow-back.svg" alt="">
          <span class="back-text hidden-mobile">назад</span>
        </div>
        @if($products)
          <div class="clear-cart">
            <a href="/clear-cart">
              <img src="/img/clear-cart-icon.svg" class="clear-cart__image" alt="">
              <span class="clear-cart__text">Очистить корзину</span>
            </a>
          </div>
        @endif
      </div>
    </div>
  </div>

  <!-- <div class="cart-item__stock">нет в наличии</div> -->

  @if($products)
    <p>Есть товары</p>
    @foreach($products as $prd)
      <p>Товар</p>
    @endforeach

<!-- 
  <div class="cart-items-wrapper">
    <div class="container">

      <div class="info-text">Товар есть в наличии &nbsp;&nbsp;&nbsp;Доставка 1-2 дня</div>

      <div class="cart-item first-cart-item">
        <div class="cart-item__image">
          <img src="/img/product-image.jpg" alt="">
        </div>
        <div class="cart-item__content">
          <div class="cart-item__stock cart-item__in-stock">в наличии</div>
          <div class="cart-item__title">Огурец «СИБИРСКАЯ ГИРЛЯНДА» F1 Огурец "СИБИРСКАЯ ГИРЛЯНДА" F1</div>

          <div class="cart-item__quantity">
            <button type="button" class="quantity-button quantity-minus">
              <div class="circle"></div>
            </button>
            <input class="quantity-number" type="number" name="quantity" max="100" min="1" step="1" value="1">
            <button type="button" class="quantity-button quantity-plus">
              <div class="circle"></div>
            </button>
          </div>

          <div class="cart-item__price">
            <span class="cart-item__price-text">36</span>
            <span class="cart-item__price-currency">&nbsp;&#8381;</span>
          </div>

          <div class="cart-item__trash">
            <img src="/img/trash-icon.svg" alt="">
          </div>
        </div>
      </div>
      <div class="cart-item">
        <div class="cart-item__image">
          <img src="/img/product-image.jpg" alt="">
        </div>
        <div class="cart-item__content">
          <div class="cart-item__stock cart-item__in-stock">в наличии</div>
          <div class="cart-item__title">Огурец «СИБИРСКАЯ ГИРЛЯНДА» F1 Огурец "СИБИРСКАЯ ГИРЛЯНДА" F1</div>

          <div class="cart-item__quantity">
            <button type="button" class="quantity-button quantity-minus">
              <div class="circle"></div>
            </button>
            <input class="quantity-number" type="number" name="quantity" max="100" min="1" step="1" value="1">
            <button type="button" class="quantity-button quantity-plus">
              <div class="circle"></div>
            </button>
          </div>

          <div class="cart-item__price">
            <span class="cart-item__price-text">36</span>
            <span class="cart-item__price-currency"> &#8381;</span>
          </div>

          <div class="cart-item__trash">
            <img src="/img/trash-icon.svg" alt="">
          </div>
        </div>
      </div>
      <div class="cart-item last-cart-item">
        <div class="cart-item__image">
          <img src="/img/product-image.jpg" alt="">
        </div>
        <div class="cart-item__content">
          <div class="cart-item__stock cart-item__in-stock">в наличии</div>
          <div class="cart-item__title">Огурец «СИБИРСКАЯ ГИРЛЯНДА» F1 Огурец "СИБИРСКАЯ ГИРЛЯНДА" F1</div>

          <div class="cart-item__quantity">
            <button type="button" class="quantity-button quantity-minus">
              <div class="circle"></div>
            </button>
            <input class="quantity-number" type="number" name="quantity" max="100" min="1" step="1" value="1">
            <button type="button" class="quantity-button quantity-plus">
              <div class="circle"></div>
            </button>
          </div>

          <div class="cart-item__price">
            <span class="cart-item__price-text">36</span>
            <span class="cart-item__price-currency"> &#8381;</span>
          </div>

          <div class="cart-item__trash">
            <img src="/img/trash-icon.svg" alt="">
          </div>
        </div>
      </div>

    </div>
  </div>  
  
  <div class="cart-items-wrapper">
    <div class="container">

      <div class="info-text">Предзаказ &nbsp;&nbsp;&nbsp;Доставка 2 недели</div>

      <div class="cart-item one-cart-item">
        <div class="cart-item__image">
          <img src="/img/product-image.jpg" alt="">
        </div>
        <div class="cart-item__content">
          <div class="cart-item__stock cart-item__out-of-stock">нет в наличии</div>
          <div class="cart-item__title">Огурец «СИБИРСКАЯ ГИРЛЯНДА» F1 Огурец "СИБИРСКАЯ ГИРЛЯНДА" F1</div>

          <div class="cart-item__quantity">
            <button type="button" class="quantity-button quantity-minus">
              <div class="circle"></div>
            </button>
            <input class="quantity-number" type="number" name="quantity" max="100" min="1" step="1" value="1">
            <button type="button" class="quantity-button quantity-plus">
              <div class="circle"></div>
            </button>
          </div>

          <div class="cart-item__price">
            <span class="cart-item__price-text">36</span>
            <span class="cart-item__price-currency"> &#8381;</span>
          </div>

          <div class="cart-item__trash">
            <img src="/img/trash-icon.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="summary-wrapper">
    <div class="container">
      <div class="summary">
        <div class="summary-flex-container">
          <div class="summary-item">
            <span class="summary-item__title">Товары&nbsp;</span>
            <span class="summary-item__value">108</span>
            <span class="summary-item__unit">&nbsp;&#8381;</span>
          </div>
          <div class="summary-item">
            <span class="summary-item__title">Вес&nbsp;</span>
            <span class="summary-item__value">2,485</span>
            <span class="summary-item__unit">&nbsp;кг</span>
          </div>
          <div class="summary-item">
            <span class="summary-item__title">Скидка&nbsp;</span>
            <span class="summary-item__value">28</span>
            <span class="summary-item__unit">&nbsp;&#8381;</span>
          </div>
          <div class="summary-item">
            <span class="summary-item__title summary-item__uppercase-title">Итого&nbsp;</span>
            <span class="summary-item__value">80</span>
            <span class="summary-item__unit">&nbsp;&#8381;</span>
          </div>
        </div>
        <div class="horizontal-line"></div>
      </div>
    </div>
  </div>
  
  <div class="offices">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="offices-info">
            <div class="offices-name">
              <div class="offices-name__title">Места выдачи товара</div>
              <div class="offices-items">
                <div class="offices-item">
                  <div class="offices-item__image">
                    <img src="/img/dostavka-i-oplata-geolocation-icon.svg" alt="">
                  </div>
                  <div class="offices-item__address">Миасс, ул. 8 Июля, 1</div>
                </div>
                <div class="offices-item">
                  <div class="offices-item__image">
                    <img src="/img/dostavka-i-oplata-geolocation-icon.svg" alt="">
                  </div>
                  <div class="offices-item__address">Миасс, ул. Автозаводцев 21</div>
                </div>
                <div class="offices-item">
                  <div class="offices-item__image">
                    <img src="/img/dostavka-i-oplata-geolocation-icon.svg" alt="">
                  </div>
                  <div class="offices-item__address">Миасс, ул. Автозаводцев 65</div>
                </div>
                <div class="offices-item">
                  <div class="offices-item__image">
                    <img src="/img/dostavka-i-oplata-geolocation-icon.svg" alt="">
                  </div>
                  <div class="offices-item__address">Миасс, ул. Орловская 11</div>
                </div>
                <div class="offices-item">
                  <div class="offices-item__image">
                    <img src="/img/dostavka-i-oplata-geolocation-icon.svg" alt="">
                  </div>
                  <div class="offices-item__address">Миасс, пр. Октября 15</div>
                </div>
                <div class="offices-item">
                  <div class="offices-item__image">
                    <img src="/img/dostavka-i-oplata-geolocation-icon.svg" alt="">
                  </div>
                  <div class="offices-item__address">Миасс, ул. Ленина 1/А</div>
                </div>
                <div class="offices-item">
                  <div class="offices-item__image">
                    <img src="/img/dostavka-i-oplata-geolocation-icon.svg" alt="">
                  </div>
                  <div class="offices-item__address">Миасс, ул. Спортивная 15</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="temp-map">
            <img src="/img/temp-map.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="customer-wrapper">
    <div class="container">
      <div class="customer">
        <div class="customer-title">Карточка клиента</div>
        <form action="" class="form">
          <div class="customer-flex-container">
            <div class="customer-item">
              <label for="customer-name" class="label">Имя и фамилия</label>
              <input type="text" id="customer-name" class="input-field" required minlength="3" maxlength="20">
            </div>
            <div class="customer-item">
              <label for="customer-phone" class="label">Номер телефона</label>
              <input type="text" id="customer-phone" class="input-field js-input-phone-mask" required maxlength="18">
            </div>
            <div class="customer-item">
              <button type="button" class="submit-btn js-cart-btn">
                <span class="submit-btn__text">Оплатить</span>
              </button>
              <input type="checkbox" name="checkbox" class="custom-checkbox" id="checkbox-callback-modal" checked required onchange="document.querySelector('.js-cart-btn').disabled = !this.checked;">
              <label for="checkbox-callback-modal" class="custom-checkbox-label"></label>
              <div class="checkbox-text">Согласен с <a href="/politika-konfidencialnosti" class="privacy-policy-link" target="_blank">политикой обработки персональных данных</a></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
 -->

  @else
    <div class="cart-is-empty">
    <div class="container">
      <div class="cart-is-empty-content">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="cart-is-empty-image">
              <img src="/img/cart-is-empty.svg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="cart-is-empty-content">
        <div class="row">
          <div class="cart-is-empty-text">УПС.... В вашей корзине ничего нет(</div>
        </div>
      </div>
      <div class="cart-is-empty-content">
        <div class="row">
          <div class="col-md-3 ms-auto">
            <div class="cart-is-empty-btn cart-is-empty-back-btn" onclick="history.back();">
              <span class="cart-is-empty-btn__text">Вернуться назад</span>
            </div>
          </div>
          <div class="col-md-3 me-auto">
            <a href="/" class="cart-is-empty-btn cart-is-empty-home-btn">
              <span class="cart-is-empty-btn__text">Главная</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  @endif

</div>

@endsection