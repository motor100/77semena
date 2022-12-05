@section('title', 'Акции')

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
    <div class="active">Акции</div>
  </div>
</div>

<div class="poisk catalog">
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="catalog-nav">
            <div class="catalog-nav-title-wrapper">
              <div class="catalog-nav-title">Категории</div>
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
        @if (count($products) > 0)
          <div class="col-md-10">
            <div class="products">
              <div class="products-title-wrapper">
                <div class="products-title">Акции</div>
                <select name="" id="products-filter" class="products-filter">
                  <option value="new-products">Сначала дорогие</option>
                  <option value="cheap-first">Сначала дешевые</option>
                </select>
              </div>
              <div class="row">
                @foreach($products as $pr)
                  <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="products-item">
                      <div class="products-item__image">
                        <img src="{{ asset('storage/uploads/products/' .  $pr->image) }}" alt="">
                      </div>
                      <div class="products-item__title">{{ $pr->title }}</div>
                      <div class="products-item__info info-yellow">Хит</div>
                      <div class="products-item__price">
                        <span class="products-item__value">{{ $pr->retail_price }}</span>
                        <span class="products-item__currency">&nbsp;&#8381;</span>
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
        @else
          <div class="col-md-10">
            <div class="products">
              <div class="products-title-wrapper">
                <div class="products-title">Акции</div>
              </div>
            </div>
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
          </div>
        @endif
      </div>
    </div>
  </div>
  
</div>
@endsection

@section('script')
  <script src="{{ asset('js/slimselect.min.js') }}"></script>
@endsection