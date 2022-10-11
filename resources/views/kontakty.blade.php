@section('title', 'Контакты')

@extends('layouts.template')


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
        <div class="col-md-6">
          <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A31737b9c4e5d31134da2b042076ac32b341fdc38794aad0be44f6dbedac1e42b&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contacts">
            <div class="contacts-item">
              <div class="contacts-item__title">Адрес</div>
              <div class="contacts-item__content">
                <div class="contacts-item__icon">
                  <img src="/img/contacts-geolocation-icon.svg" alt="">
                </div>
                <div class="contacts-item__text">Россия, Челябинская область, город Миасс, ул. Кирова 53.</div>
              </div>
            </div>
            <div class="contacts-item">
              <div class="contacts-item__title">Телефон</div>
              <div class="contacts-item__content">
                <div class="contacts-item__icon">
                  <img src="/img/contacts-geolocation-icon.svg" alt="">
                </div>
                <div class="contacts-item__text">+7 (950) 723 10 13</div>
              </div>
            </div>
            <div class="contacts-item">
              <div class="contacts-item__title">Эл. почта</div>
              <div class="contacts-item__content">
                <div class="contacts-item__icon">
                  <img src="/img/contacts-geolocation-icon.svg" alt="">
                </div>
                <div class="contacts-item__text">info@77semena.ru</div>
              </div>
            </div>
            <div class="contacts-item">
              <div class="contacts-item__title">Юр. адрес</div>
              <div class="contacts-item__content">
                <div class="contacts-item__icon">
                  <img src="/img/contacts-geolocation-icon.svg" alt="">
                </div>
                <div class="contacts-item__text">456305 Россия, Челябинская область, город Миасс, ул. Кирова 53</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection