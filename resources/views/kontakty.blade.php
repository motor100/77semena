@section('title', 'Контакты')

@extends('layouts.main')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">контакты</div>
  </div>
</div>

<div class="kontakty">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Контакты</div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A31737b9c4e5d31134da2b042076ac32b341fdc38794aad0be44f6dbedac1e42b&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
          </div>
        </div>
        <div class="col-lg-6 p-0">
          <div class="about">
            <div class="column">
              <div class="contacts">
                <div class="about-item">
                  <div class="about-item__title">Адрес</div>
                  <div class="about-item__content">
                    <div class="about-item__icon">
                      <img src="/img/contacts-geolocation-icon.svg" alt="">
                    </div>
                    <div class="contacts-item__text">Россия, Челябинская область, город Миасс, ул. Кирова 53.</div>
                  </div>
                </div>
                <div class="about-item">
                  <div class="about-item__title">Телефон</div>
                  <div class="about-item__content">
                    <div class="about-item__icon">
                      <img src="/img/contacts-geolocation-icon.svg" alt="">
                    </div>
                    <div class="contacts-item__text">+7 (858) 754-65-85</div>
                  </div>
                </div>
                <div class="about-item">
                  <div class="about-item__title">Эл. почта</div>
                  <div class="about-item__content">
                    <div class="about-item__icon">
                      <img src="/img/contacts-geolocation-icon.svg" alt="">
                    </div>
                    <div class="contacts-item__text">info@77semena.ru</div>
                  </div>
                </div>
                <div class="about-item last-about-item">
                  <div class="about-item__title">Юр. адрес</div>
                  <div class="about-item__content">
                    <div class="about-item__icon">
                      <img src="/img/contacts-geolocation-icon.svg" alt="">
                    </div>
                    <div class="about-item__text">456305 Россия, Челябинская область, город Миасс, ул. Кирова 53</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="info">
              <div class="about-item">
                <div class="about-item__title">Компания</div>
                <div class="about-item__text">ООО "Челябинская селекционная станция"</div>
              </div>
                <div class="about-item">
                  <div class="about-item__title">Реквизиты</div>
                  <div class="about-item__text">ОГРН 1147415003592</div>
                  <div class="about-item__text">ИНН 7415086375</div>
                  <div class="about-item__text">КПП 741501001</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection