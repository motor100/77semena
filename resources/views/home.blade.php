@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
@endsection

@section('content')
<div class="new-products-section">
  <div class="home-page-section-title-wrapper">
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
        @foreach($new_products as $pr)
          @if($pr->count > 1)
            <div class="col-lg-3 col-md-6 d-md-block d-none">
          @else
            <div class="col-lg-3 col-md-6">
          @endif
            <div class="new-products-item">
              <div class="new-products-item__content">
                <div class="new-products-item__image">
                  <img src="{{ asset('storage/uploads/products/' . $pr->image) }}" alt="">
                </div>
                <div class="new-products-item__title">{{ $pr->title }}</div>
              </div>
              <div class="products-item__price">
                @if($pr->promo_price > 0)
                  <span class="products-item__value">{{ $pr->promo_price }}</span>
                @else
                  <span class="products-item__value">{{ $pr->retail_price }}</span>
                @endif
                <span class="products-item__currency">&#8381;</span>
              </div>
              <div class="add-to-cart-btn add-to-cart" data-id="{{ $pr->id }}">
                <div class="circle"></div>
              </div>
              <a href="/catalog/{{ $pr->slug }}" class="full-link"></a>
            </div>
          </div>
        @endforeach
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
  <div class="home-page-section-title-wrapper">
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
  <div class="popular-categories hidden-mobile">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="popular-category-item">
            <div class="popular-category-item-title-wrapper">
              <div class="popular-category-item__title">Перцы</div>
              <div class="popular-category-item-arrow-right"></div>
            </div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-pepper.png" alt="">
            </div>
            <a href="/catalog?category=percy" class="full-link"></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="popular-category-item">
            <div class="popular-category-item-title-wrapper">
              <div class="popular-category-item__title">Томаты</div>
              <div class="popular-category-item-arrow-right"></div>
            </div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-tomato.png" alt="">
            </div>
            <a href="/catalog?category=tomaty" class="full-link"></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="popular-category-item">
            <div class="popular-category-item-title-wrapper">
              <div class="popular-category-item__title">Огурцы</div>
              <div class="popular-category-item-arrow-right"></div>
            </div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-cucumber.png" alt="">
            </div>
            <a href="/catalog?category=ogurcy" class="full-link"></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="popular-category-item">
            <div class="popular-category-item-title-wrapper">
              <div class="popular-category-item__title">Агрохимия</div>
              <div class="popular-category-item-arrow-right"></div>
            </div>
            <div class="popular-category-item__image">
              <img src="/img/popular-category-chemical.png" alt="">
            </div>
            <a href="/catalog?category=agrohimiya" class="full-link"></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="popular-categories-slider swiper hidden-desktop">
    <div class="swiper-wrapper">
      <div class="slider-item swiper-slide">
        <div class="slider-item__content">
          <div class="slider-item__title">Перцы</div>
          <div class="slider-item__image">
            <img src="/img/popular-category-pepper.png" alt="">
          </div>
        </div>
        <a href="/peppers" class="full-link"></a>
      </div>
      <div class="slider-item swiper-slide">
        <div class="slider-item__content">
          <div class="slider-item__title">Томаты</div>
          <div class="slider-item__image">
            <img src="/img/popular-category-tomato.png" alt="">
          </div>
        </div>
        <a href="/tomatoes" class="full-link"></a>
      </div>
      <div class="slider-item swiper-slide">
        <div class="slider-item__content">
          <div class="slider-item__title">Огурцы</div>
          <div class="slider-item__image">
            <img src="/img/popular-category-cucumber.png" alt="">
          </div>
        </div>
        <a href="/cucumbers" class="full-link"></a>
      </div>
      <div class="slider-item swiper-slide">
        <div class="slider-item__content">
          <div class="slider-item__title">Агрохимия</div>
          <div class="slider-item__image">
            <img src="/img/popular-category-chemical.png" alt="">
          </div>
        </div>
        <a href="/chemicals" class="full-link"></a>
      </div>
    </div>
  </div>

</div>

<div class="promo-section">
  <div class="home-page-section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Акции</div>
        <div class="arrow-right">
          <div class="line"></div>
          <div class="underline"></div>
          <a class="full-link" href="/akcii"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="new-seeds products">
    <div class="container">
      <div class="row">
        @foreach($promo_products as $pr)
          @if($pr->count > 3)
            <div class="col-xxl-2 col-lg-2 d-none d-xxl-block">
          @else
            <div class="col-xxl-2 col-lg-3 col-sm-6">
          @endif
            <div class="products-item">
              <div class="products-item__image">
                <img src="{{ asset('storage/uploads/products/' . $pr->image) }}" alt="">
              </div>
              <div class="products-item__title">{{ $pr->title }}</div>
              <div class="products-item__info info-yellow">Хит</div>
              <div class="products-item-price-wrapper">
                <div class="products-item__old-price">
                  <span class="products-item__value">{{ $pr->retail_price }}</span>
                  <span class="products-item__currency">&#8381;</span>
                </div>
                <div class="products-item__price">
                  <span class="products-item__value">{{ $pr->promo_price }}</span>
                  <span class="products-item__currency">&#8381;</span>
                </div>
              </div>
              <div class="add-to-cart-btn" data-id="{{ $pr->id }}">
                <div class="circle"></div>
              </div>
              <a href="/catalog/{{ $pr->slug }}" class="full-link"></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div class="news-section">
  <div class="home-page-section-title-wrapper">
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
  <div class="news hidden-mobile">
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

  <div class="news-slider-wrapper hidden-desktop">
    <div class="container">
      <div class="news-slider swiper hidden-desktop">
        <div class="swiper-wrapper">
          @foreach($news as $nw)
            <div class="news-item swiper-slide">
              <div class="news-item__date">
                <div class="news-item__day">{{ $nw->date['day'] }}</div>
                <div class="news-item__month-year">{{ $nw->date['month-year'] }}</div>
              </div>
              <div class="news-item__title">{{ $nw->short_title }}</div>
              <div class="news-item__arrow"></div>
              <!-- <a class="full-link" href="/novosti/{{ $nw->slug }}"></a> -->
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
@endsection