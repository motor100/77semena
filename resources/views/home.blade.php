@section('title', 'Home')

@extends('layouts.template')


@section('content')

<div class="new-products-section">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">Новинки</div>
      <div class="arrow-right">
        <div class="line"></div>
        <div class="underline"></div>
      </div>
    </div>
  </div>
  <div class="new-products">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="new-products-item">
            <div class="new-products-item__text">Товар месяца</div>
            <div class="new-products-item__title">Клубника ЛЕСНАЯ F1</div>
            <div class="new-products-item__image">
              <img src="" alt="">
            </div>
            <div class="new-products-item__price">18 &#8381;</div>
            <div class="new-products-item__quantity"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mission-section">
  <div class="container">
    <div class="mission">
      <div class="mission-title">Миссия-цель</div>
      <div class="mission-items">
        <div class="mission-item">
          <div class="mission-item__image">
            <img src="/img/gift-icon.png" alt="">
          </div>
          <div class="mission-item__text">Подарки в каждом заказе</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__image">
            <img src="/img/flover-icon.png" alt="">
          </div>
          <div class="mission-item__text">Максимальная всхожесть посевного материала</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__image">
            <img src="/img/document-icon.png" alt="">
          </div>
          <div class="mission-item__text">Запрашиваем сертификаты качества у поставщиков</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__image">
            <img src="/img/shield-icon.png" alt="">
          </div>
          <div class="mission-item__text">Гарантия возврата и обмена товара в соответствии с законодательством РФ</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="popular-categories-section">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">Популярные категории</div>
      <div class="arrow-right">
        <div class="line"></div>
        <div class="underline"></div>
      </div>
    </div>
  </div>
  <div class="popular-categories">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="popular-category-item">
            <div class="popular-category-item__title">Овощи</div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-vegetables-icon.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="popular-category-item">
            <div class="popular-category-item__title">Газон</div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-grass-icon.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="popular-category-item">
            <div class="popular-category-item__title">Цветы</div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-flovers-icon.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="popular-category-item">
            <div class="popular-category-item__title">Ягоды</div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-berries-icon.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="popular-category-item">
            <div class="popular-category-item__title">Цветы</div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-flovers-icon.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="popular-category-item">
            <div class="popular-category-item__title">Ягоды</div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-berries-icon.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="new-seeds-section">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">Новинки семян</div>
      <div class="arrow-right">
        <div class="line"></div>
        <div class="underline"></div>
      </div>
    </div>
  </div>
  <div class="new-seeds">
    <div class="new-seeds-item"></div>
  </div>
</div>

<div class="news-section">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">Новости</div>
      <div class="arrow-right">
        <div class="line"></div>
        <div class="underline"></div>
      </div>
    </div>
  </div>
  <div class="news">
    <div class="container">
      <div class="row">
        @foreach($news as $nw)
          <div class="col-md-3">
            <div class="news-item">
              <div class="news-item__date">
                <span class="news-item__day">{{ $nw->date['day'] }}</span>
                <span class="news-item__month-year">{{ $nw->date['month-year'] }}</span>
              </div>
              <div class="news-item__title">{{ $nw->short_title }}</div>
              <a class="full-link" href="/novosti/{{ $nw->slug }}"></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection