@section('title', $single_product->title)

@extends('layouts.main')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
@endsection

@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="parent">
      <a href="{{ url('/catalog') }}">каталог</a>
    </div>
    <div class="arrow"></div>
    <div class="active">{{ $single_product->title }}</div>
  </div>
</div>

<div class="single-product">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="back" onclick="history.back();">
        <img src="/img/arrow-back.svg" alt="">
        <span class="back-text hidden-mobile">назад</span>
      </div>
    </div>
  </div>
  
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="single-product-slider swiper">
            <div class="swiper-wrapper">
              <div class="slider-item swiper-slide">
                <div class="slider-item__image">
                  <img src="{{ asset('storage/uploads/products/' . $single_product->image) }}" alt="">
                </div>
              </div>
              @foreach($single_product->galleries as $gl )
                <div class="slider-item swiper-slide">
                  <div class="slider-item__image">
                    <img src="{{ asset('storage/uploads/products/' . $gl->image) }}" alt="">
                  </div>
                </div>
              @endforeach
            </div>
            <div class="btn-prev">
              <div class="arrow"></div>
            </div>
            <div class="btn-next">
              <div class="arrow"></div>
            </div>
          </div>

          <div class="slider-navigation">
            <div class="circle-arrow prev">
              <div class="left"></div>
            </div>
            <div class="circle-arrow next">
              <div class="right"></div>
            </div>
          </div>

        </div>
        <div class="col-md-5">
          <div class="single-product-title">{{ $single_product->title }}</div>
          <div class="single-product-info">
            <div class="products-item__price">
              <span class="products-item__value">{{ $single_product->retail_price }}</span>
              <span class="products-item__currency">&#8381;</span>
            </div>
            @if($single_product->quantity > 0)
              <div class="single-product-stock single-product-in-stock">в наличии на складе</div>
            @else
              <div class="single-product-stock single-product-out-of-stock">Нет в наличии</div>
            @endif
          </div>
          <button class="add-to-cart-btn">
            <div class="add-to-cart-btn__text" data-id="{{ $single_product->id }}">Добавить в корзину</div>
          </button>
          <div class="horizontal-line"></div>
          <div class="single-product-delivery-info">
            <div class="single-product-city-wrapper">
              <span class="single-product-city-text">Город:&nbsp;</span>
              <span class="city">Миасс</span>
            </div>
            <div class="single-product-delivery">Условия доставки</div>
            <div class="single-product-office">Пункт выдачи заказов</div>
            <div class="single-product-term">до 6 октября</div>
          </div>
          <div class="horizontal-line"></div>
          <div class="single-product-about">
            <div class="about-flex-container">
              @if($single_product->sku)
              <div class="single-product-sku item-about half-width-about">
                <div class="item-about-text">Артикул&nbsp;</div>
                <div class="item-about-value">{{ $single_product->sku }}</div>
              </div>
              @endif
              @if($single_product->weight)
              <div class="single-product-weight item-about half-width-about">
                <div class="item-about-text">Вес&nbsp;</div>
                <div class="item-about-value">{{ $single_product->weight }}&nbsp;гр.</div>
              </div>
              @endif
            </div>
            @if($single_product->brand)
            <div class="single-product-brand item-about full-width-about">
              <div class="item-about-text">Торговая марка&nbsp;</div>
              <div class="item-about-value">{{ $single_product->brand }}</div>
            </div>
            @endif
          </div>
        </div>
      </div>
      
      <div class="horizontal-line"></div>
      <div class="single-product-description">
        <div class="single-product-description__title">Описание:</div>
        <div class="single-product-description__text">{!! $single_product->text !!}</div>
      </div>
    </div>
  </div>

</div>

@endsection

@section('script')
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
@endsection