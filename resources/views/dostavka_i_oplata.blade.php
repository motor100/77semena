@section('title', 'Доставка и оплата')

@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/slimselect.min.css') }}">
@endsection

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
            <div class="label">Ваш город</div>
            <select name="" id="select-city" class="select-city">
              @foreach($cities as $city)
                <option value="{{ $city->title }}">{{ $city->title }}</option>
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
            <div id="map" class="map">
            </div>
          </div>
          <div class="col-md-7">
            <div class="offices-info">
              <div class="offices-name">
                <div class="offices-name__title">Места выдачи товара</div>
                <div class="offices-items">
                  @foreach($offices as $office)
                    <div class="offices-item">
                      <div class="offices-item__image">
                        <img src="/img/dostavka-i-oplata-geolocation-icon.svg" alt="">
                      </div>
                      <div class="offices-item__address">{{ $office->title }},&nbsp;{{ $office->address }}</div>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="offices-description">
                <div class="offices-description__contacts">
                  <div class="offices-description__contacts-title">Контакты</div>
                  @foreach($offices as $office)
                    <div class="offices-description-item">
                      <p>{{ $office->city->title }}</p>
                      <p>{{ $office->title }}</p>
                      <p>{{ $office->address }}</p>
                      <p>{{ $office->description }}</p>
                      <p>Пн-Пт:&nbsp;{{ $office->time_weekday }}</p>
                      <p>Сб:&nbsp;{{ $office->time_saturday }}</p>
                      <p>Вс:&nbsp;{{ $office->time_sunday }}</p>
                    </div>
                  @endforeach
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

@section('script')
  <script src="{{ asset('js/slimselect.min.js') }}"></script>
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=43769839-ea8a-4276-aede-298fecb6e04e"></script>
@endsection