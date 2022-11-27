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
              <div class="catalog-nav-arrow"></div>
            </div>
            <div class="catalog-nav-item catalog-nav-item-active">
              <div class="catalog-nav-item__title">Семена</div>
              <div class="catalog-nav-arrow"></div>
              <ul class="catalog-nav-submenu">
                <li class="catalog-nav-submenu-item">Овощи</li>
                <li class="catalog-nav-submenu-item">Газон</li>
                <li class="catalog-nav-submenu-item">Цветы</li>
                <li class="catalog-nav-submenu-item">Ягоды</li>
              </ul>
            </div>
            <div class="catalog-nav-item">
              <div class="catalog-nav-item__title">Агрохимия</div>
              <div class="catalog-nav-arrow"></div>
            </div>
          </div>
        </div>
        <div class="col-md-10">
          <div class="products">
            <div class="products-title-wrapper">
              <div class="products-title">Газон</div>
              <select name="" id="products-filter" class="products-filter">
                <option value="new-products">Сначала дорогие</option>
                <option value="cheap-first">Сначала дешевые</option>
                <option value="expensive-first">Новинки</option>
              </select>
            </div>
            <div class="row">
              @foreach($products as $pr)
                <div class="col-3">
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
              <div class="col-3">
                <div class="products-item">
                  <div class="products-item__image">
                    <img src="/img/new-seeds-image.jpg" alt="">
                  </div>
                  <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
                  <div class="products-item__info info-yellow">Хит</div>
                  <div class="products-item__price">
                    <span class="products-item__value">18</span>
                    <span class="products-item__currency">&nbsp;&#8381;</span>
                  </div>
                  <div class="add-to-cart-btn" data-id="">
                    <div class="circle"></div>
                  </div>
                  <a href="#" class="full-link"></a>
                </div>
              </div>
              <div class="col-3">
                <div class="products-item">
                  <div class="products-item__image">
                    <img src="/img/new-seeds-image.jpg" alt="">
                  </div>
                  <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
                  <div class="products-item__info info-yellow">Хит</div>
                  <div class="products-item__price">
                    <span class="products-item__value">18</span>
                    <span class="products-item__currency">&nbsp;&#8381;</span>
                  </div>
                  <div class="add-to-cart-btn" data-id="">
                    <div class="circle"></div>
                  </div>
                  <a href="#" class="full-link"></a>
                </div>
              </div>
              <div class="col-3">
                <div class="products-item">
                  <div class="products-item__image">
                    <img src="/img/new-seeds-image.jpg" alt="">
                  </div>
                  <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
                  <div class="products-item__info info-yellow">Хит</div>
                  <div class="products-item__price">
                    <span class="products-item__value">18</span>
                    <span class="products-item__currency">&nbsp;&#8381;</span>
                  </div>
                  <div class="add-to-cart-btn" data-id="">
                    <div class="circle"></div>
                  </div>
                  <a href="#" class="full-link"></a>
                </div>
              </div>
              <div class="col-3">
                <div class="products-item">
                  <div class="products-item__image">
                    <img src="/img/new-seeds-image.jpg" alt="">
                  </div>
                  <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
                  <div class="products-item__info info-grey">Нет в наличии</div>
                  <div class="products-item__price">
                    <span class="products-item__value">18</span>
                    <span class="products-item__currency">&nbsp;&#8381;</span>
                  </div>
                  <div class="pre-order">Предзаказ</div>
                  <a href="#" class="full-link"></a>
                </div>
              </div>
              <div class="col-3">
                <div class="products-item">
                  <div class="products-item__image">
                    <img src="/img/new-seeds-image.jpg" alt="">
                  </div>
                  <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
                  <div class="products-item__info info-yellow">Хит</div>
                  <div class="products-item__price">
                    <span class="products-item__value">18</span>
                    <span class="products-item__currency">&nbsp;&#8381;</span>
                  </div>
                  <div class="add-to-cart-btn" data-id="">
                    <div class="circle"></div>
                  </div>
                  <a href="#" class="full-link"></a>
                </div>
              </div>
              <div class="col-3">
                <div class="products-item">
                  <div class="products-item__image">
                    <img src="/img/new-seeds-image.jpg" alt="">
                  </div>
                  <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
                  <div class="products-item__info info-yellow">Хит</div>
                  <div class="products-item__price">
                    <span class="products-item__value">18</span>
                    <span class="products-item__currency">&nbsp;&#8381;</span>
                  </div>
                  <div class="add-to-cart-btn" data-id="">
                    <div class="circle"></div>
                  </div>
                  <a href="#" class="full-link"></a>
                </div>
              </div>
              <div class="col-3">
                <div class="products-item">
                  <div class="products-item__image">
                    <img src="/img/new-seeds-image.jpg" alt="">
                  </div>
                  <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
                  <div class="products-item__info info-yellow">Хит</div>
                  <div class="products-item__price">
                    <span class="products-item__value">18</span>
                    <span class="products-item__currency">&nbsp;&#8381;</span>
                  </div>
                  <div class="add-to-cart-btn" data-id="">
                    <div class="circle"></div>
                  </div>
                  <a href="#" class="full-link"></a>
                </div>
              </div>
              <div class="col-3">
                <div class="products-item">
                  <div class="products-item__image">
                    <img src="/img/new-seeds-image.jpg" alt="">
                  </div>
                  <div class="products-item__title">Клубника ЛЕСНАЯ F1</div>
                  <div class="products-item__info info-grey">Нет в наличии</div>
                  <div class="products-item__price">
                    <span class="products-item__value">18</span>
                    <span class="products-item__currency">&nbsp;&#8381;</span>
                  </div>
                  <div class="add-to-cart-btn" data-id="">
                    <div class="circle"></div>
                  </div>
                  <a href="#" class="full-link"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="horizontal-line"></div>
          <div class="view-more">
            <span class="view-more__text">Показать еще</span>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection

@section('script')
  <script src="{{ asset('js/slimselect.min.js') }}"></script>
@endsection