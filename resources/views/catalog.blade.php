@section('title', 'Каталог')

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
    <div class="active">каталог</div>
  </div>
</div>

<div class="catalog">

  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="catalog-nav">
            <div class="catalog-nav-title-wrapper">
              <div class="catalog-nav-title">Категории</div>
              <!-- <div class="catalog-nav-arrow"></div> -->
            </div>
            @foreach($parent_category as $pct)
              <div class="catalog-nav-item">
                @if($pct->child_category)
                  <div class="catalog-nav-item__title">{{ $pct->title }}</div>
                  <div class="catalog-nav-arrow"></div>
                  <ul class="catalog-nav-submenu">
                    @foreach($pct->child_category as $cct)
                      <li class="catalog-nav-submenu-item">
                        <a href="/catalog?category={{ $cct->slug }}">{{ $cct->title }}</a>
                      </li>
                    @endforeach
                  </ul>
                @else
                  <a href="/catalog?category={{ $pct->slug }}" class="catalog-nav-item__title">{{ $pct->title }}</a>
                @endif
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-10">
          <div class="products">
            <div class="products-title-wrapper">
              @if(isset($category_title))
                <div class="products-title">{{ $category_title }}</div>
              @else
                <div class="products-title">Каталог</div>
              @endif
              <select name="products-filter" id="products-filter" class="products-filter">
                <option value="price_desc">Сначала дорогие</option>
                <option value="price_asc">Сначала дешевые</option>
              </select>
            </div>

            @if(count($products) > 0)
              <div class="row js-insert-products">
                @foreach($products as $pr)
                  <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="products-item">
                      <div class="products-item__image">
                        <img src="{{ asset('storage/uploads/products/' .  $pr->image) }}" alt="">
                      </div>
                      <div class="products-item__title">{{ $pr->title }}</div>
                      @if($pr->stock > 0)
                        <div class="products-item__info info-yellow">Хит</div>
                      @else
                        <div class="products-item__info info-grey">Нет в наличии</div>
                      @endif
                      @if($pr->stock > 0)
                        <div class="products-item-price-wrapper">
                          @if($pr->promo_price)
                            <div class="products-item__old-price">
                              <span class="products-item__value">{{ $pr->retail_price }}</span>
                              <span class="products-item__currency">&#8381;</span>
                            </div>
                            <div class="products-item__price">
                              <span class="products-item__value">{{ $pr->promo_price }}</span>
                              <span class="products-item__currency">&#8381;</span>
                            </div>
                          @else
                          <div class="products-item__price">
                            <span class="products-item__value">{{ $pr->retail_price }}</span>
                            <span class="products-item__currency">&nbsp;&#8381;</span>
                          </div>
                          @endif
                        </div>
                      @else
                        <div class="products-item__price">
                          <span class="products-item__value">{{ $pr->retail_price }}</span>
                          <span class="products-item__currency">&nbsp;&#8381;</span>
                        </div>
                      @endif
                      @if($pr->stock > 0)
                        <div class="add-to-cart-btn add-to-cart" data-id="{{ $pr->id }}">
                          <div class="circle"></div>
                        </div>
                      @else
                        <div class="pre-order-btn add-to-cart" data-id="{{ $pr->id }}">Предзаказ</div>
                      @endif
                      <a href="/catalog/{{ $pr->slug }}" class="full-link"></a>
                    </div>
                  </div>
                @endforeach
              </div>
            @else
              <div class="no-products-found">
                <div class="no-products-found-content">
                  <div class="no-products-found-image">
                    <img src="/img/no-products-found.svg" alt="">
                  </div>
                </div>
                <div class="no-products-found-content">
                  <div class="no-products-found-text">К сожалению такого товара нет. Возможно он появиться позже.</div>
                </div>
                <div class="no-products-found-content">
                  <a href="/catalog" class="no-products-found-btn">
                    <span class="cart-is-empty-btn__text">Вернуться в каталог</span>
                  </a>
                </div>
              </div>
            @endif
          </div>
          @if($products_count > 20)
            <div class="horizontal-line"></div>
            <div class="view-more js-view-more-btn" data-cur-page="1" data-page="2" data-page-max="{{ $page_max }}">
              <span class="view-more__text">Показать еще</span>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>

</div>
@endsection

@section('script')
  <script src="{{ asset('js/slimselect.min.js') }}"></script>
@endsection