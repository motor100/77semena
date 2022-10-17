@section('title', 'Доставка и оплата')

@extends('layouts.main')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">доставка и оплата</div>
  </div>
</div>

<div class="dostavka-i-oplata">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Доставка и оплата</div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    
    <div class="select-city-form">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <label for="select-city" class="label">Ваш город</label>
            <select name="" id="select-city" class="select-css">
              @foreach($cities as $city)
                <option value="{{ $city->city }}">{{ $city->city }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>
    
    <div class="offices">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="temp-map">
              <img src="/img/temp-map.jpg" alt="">
            </div>
          </div>
          <div class="col-md-7">
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
              <div class="offices-description">
                <div class="offices-description__contacts">
                  <div class="offices-description__contacts-title">Контакты</div>
                  <div class="offices-description__contacts-text">
                    <p>город Миасс, ул. Кирова 53.</p>
                    <p>Телефон: +7 (950) 723-10-13</p>
                    <p>E-mail: info@77semena.ru</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pay-info">
      <div class="container">
        <div class="pay-info__title">Оплачивайте покупку любым <br>подходящим для вас способом</div>
        <div class="row">
          <div class="col-md-8">
            <div class="pay-info__subtitle">Банковские карты</div>
            <div class="pay-info__description">Оплатить онлайн вы можете любой банковской картой Visa, MasterCard, Maestro и МИР.<br>
            После подтверждения заказа откроется защищенное окно с платежной страницей ЮКАССА, где необходимо ввести данные вашей банковской карты. Вся информация передается только в зашифрованном виде и не сохраняется на нашем сайте. Вы можете не беспокоиться о безопасности данных вашей банковской карты.</div>
            <div class="payment-systems">
              <img src="/img/yookassa-logo.jpg" alt="">
              <img src="/img/visa-logo.jpg" alt="">
              <img src="/img/mastercard-logo.jpg" alt="">
              <img src="/img/maestro-logo.jpg" alt="">
              <img src="/img/mir-logo.jpg" alt="">
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <div class="pay-info__subtitle">Звонок в техничекую поддержку с проблемами по оплате</div>
            <div class="pay-info-btn">
              <div class="pay-info-btn__text">Заказать звонок</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection