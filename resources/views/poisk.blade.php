@section('title', 'Поиск')

@extends('layouts.main')

@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">поиск</div>
  </div>
</div>

<div class="poisk">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Поиск</div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="container">

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
  </div>
  
</div>

@endsection