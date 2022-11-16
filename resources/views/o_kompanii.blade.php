@section('title', 'О компании')

@extends('layouts.main')

@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">о компании</div>
  </div>
</div>

<div class="o-kompanii">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">О компании</div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="o-kompanii-content">
            <div class="o-kompanii-title">ИНТЕРНЕТ-МАГАЗИН СЕМЯН 77semena.ru</div>
            <div class="text">
              <div class="text-subtitle">Наша миссия</div>
              <p>«Предоставить любому клиенту самый широкий ассортимент посадочного материала лучшего качества от надежных поставщиков, высокий уровень сервиса и конкурентные цены».</p>
              <p>Ежегодно, перед каждым сезоном мы лично проверяем семена на всхожесть и энергию роста в собственной лаборатории! Не говоря уже о том, что вся продукция (посевной материал), поступающая на наши склады, имеет сертификаты соответствия на сортовые и посевные качества, соответствующие требованиям ГОСТ. А на наших складах поддерживаются самые высокие стандарты хранения с оптимальной температурой и влажностью воздуха.</p>
            </div>
            <div class="suppliers">
              <div class="suppliers-subtitle">В нашем магазине 77semena.ru представлена продукция следующих поставщиков:</div>
              <ul class="suppliers-list">
                <li class="suppliers-list__item">Семена от Челябинской селекционной станции</li>
                <li class="suppliers-list__item">Семена Уральский дачник</li>
                <li class="suppliers-list__item">Семена Аэлита</li>
                <li class="suppliers-list__item">Семена Гавриш</li>
                <li class="suppliers-list__item">Семена Поиск</li>
                <li class="suppliers-list__item">Семена Агрос, в том числе цветы Sakata</li>
                <li class="suppliers-list__item">Семена Русский огород</li>
              </ul>
              <div class="suppliers-remark">(список будет пополняться)</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="o-kompanii-image hidden-mobile">
            <img src="/img/o-kompanii-seeding.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="o-kompanii-nav">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-xl-4 col-md-5">
          <a href="/catalog" class="o-kompanii-btn yellow-btn">
            <span class="btn__text">Перейти к покупкам</span>
          </a>
        </div>
        <div class="col-xl-3 col-xl-4 col-md-5">
          <a href="/stat-partnerom" class="o-kompanii-btn white-btn">
            <span class="btn__text">Стать партнером</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection