@extends('layouts.main')

@section('content')

<div class="new-products-section">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Новинки</div>
        <div class="arrow-right">
          <div class="line"></div>
          <div class="underline"></div>
          <a class="full-link" href="/novinki"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="new-products products">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="new-products-item">
            <div class="new-products-item__content">
              <div class="new-products-item__image">
                <img src="/img/product-image.jpg" alt="">
              </div>
              <div class="new-products-item__title">Клубника ЛЕСНАЯ F1</div>
            </div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <a href="/catalog/single-product" class="full-link"></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="new-products-item">
            <div class="new-products-item__content">
              <div class="new-products-item__image">
                <img src="/img/product-image.jpg" alt="">
              </div>
              <div class="new-products-item__title">Клубника ЛЕСНАЯ F1</div>
            </div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <a href="#" class="full-link"></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="new-products-item">
            <div class="new-products-item__content">
              <div class="new-products-item__image">
                <img src="/img/product-image.jpg" alt="">
              </div>
              <div class="new-products-item__title">Клубника ЛЕСНАЯ F1</div>
            </div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <a href="#" class="full-link"></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="new-products-item">
            <div class="new-products-item__content">
              <div class="new-products-item__image">
                <img src="/img/product-image.jpg" alt="">
              </div>
              <div class="new-products-item__title">Клубника ЛЕСНАЯ F1</div>
            </div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <a href="#" class="full-link"></a>
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
          <div class="mission-item__text">Сертификаты качества</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__image">
            <img src="/img/shield-icon.png" alt="">
          </div>
          <div class="mission-item__text">Гарантия возврата и обмена товара</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="popular-categories-section">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Популярные категории</div>
        <div class="arrow-right">
          <div class="line"></div>
          <div class="underline"></div>
          <a class="full-link" href="/catalog"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="popular-categories">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="popular-category-item">
            <div class="popular-category-item-title-wrapper">
              <div class="popular-category-item__title">Перцы</div>
              <div class="popular-category-item-arrow-right"></div>
            </div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-pepper.png" alt="">
            </div>
            <a href="/peppers" class="full-link"></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="popular-category-item">
            <div class="popular-category-item-title-wrapper">
              <div class="popular-category-item__title">Томаты</div>
              <div class="popular-category-item-arrow-right"></div>
            </div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-tomato.png" alt="">
            </div>
            <a href="/tomatoes" class="full-link"></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="popular-category-item">
            <div class="popular-category-item-title-wrapper">
              <div class="popular-category-item__title">Огурцы</div>
              <div class="popular-category-item-arrow-right"></div>
            </div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-cucumber.png" alt="">
            </div>
            <a href="/cucumbers" class="full-link"></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="popular-category-item">
            <div class="popular-category-item-title-wrapper">
              <div class="popular-category-item__title">Агрохимия</div>
              <div class="popular-category-item-arrow-right"></div>
            </div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-chemical.png" alt="">
            </div>
            <a href="/chemicals" class="full-link"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="promo-section">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Акции</div>
        <div class="arrow-right">
          <div class="line"></div>
          <div class="underline"></div>
          <a class="full-link" href="/catalog"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="new-seeds products">
    <div class="container">
      <div class="row">
        <div class="col-xxl-2 col-lg-3">
          <div class="products-item">
            <div class="products-item__image">
              <img src="/img/new-seeds-image.jpg" alt="">
            </div>
            <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
            <div class="products-item__info info-yellow">Хит</div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <!-- <a href="#" class="full-link"></a> -->
          </div>
        </div>
        <div class="col-xxl-2 col-lg-3">
          <div class="products-item">
            <div class="products-item__image">
              <img src="/img/new-seeds-image.jpg" alt="">
            </div>
            <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
            <div class="products-item__info info-yellow">Хит</div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <!-- <a href="#" class="full-link"></a> -->
          </div>
        </div>
        <div class="col-xxl-2 col-lg-3">
          <div class="products-item">
            <div class="products-item__image">
              <img src="/img/new-seeds-image.jpg" alt="">
            </div>
            <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
            <div class="products-item__info info-yellow">Хит</div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <!-- <a href="#" class="full-link"></a> -->
          </div>
        </div>
        <div class="col-xxl-2 col-lg-3">
          <div class="products-item">
            <div class="products-item__image">
              <img src="/img/new-seeds-image.jpg" alt="">
            </div>
            <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
            <div class="products-item__info info-grey">Нет в наличии</div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <!-- <a href="#" class="full-link"></a> -->
          </div>
        </div>
        <div class="col-xxl-2 col-lg-2 d-none d-xxl-block">
          <div class="products-item">
            <div class="products-item__image">
              <img src="/img/new-seeds-image.jpg" alt="">
            </div>
            <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
            <div class="products-item__info info-yellow">Хит</div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <!-- <a href="#" class="full-link"></a> -->
          </div>
        </div>
        <div class="col-xxl-2 col-lg-2 d-none d-xxl-block">
          <div class="products-item">
            <div class="products-item__image">
              <img src="/img/new-seeds-image.jpg" alt="">
            </div>
            <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
            <div class="products-item__info info-grey">Нет в наличии</div>
            <div class="products-item__price">
              <span class="products-item__value">18</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            <div class="item__quantity" data-id="">
              <div class="circle"></div>
            </div>
            <!-- <a href="#" class="full-link"></a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="news-section">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Новости</div>
        <div class="arrow-right">
          <div class="line"></div>
          <div class="underline"></div>
          <a class="full-link" href="/novosti"></a>
        </div>
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
                <div class="news-item__day">{{ $nw->date['day'] }}</div>
                <div class="news-item__month-year">{{ $nw->date['month-year'] }}</div>
              </div>
              <div class="news-item__title">{{ $nw->short_title }}</div>
              <div class="news-item__arrow"></div>
              <a class="full-link" href="/novosti/{{ $nw->slug }}"></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection