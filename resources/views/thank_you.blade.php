@section('title', 'Спасибо за заказ')

@extends('layouts.main')

@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">Спасибо за заказ</div>
  </div>
</div>

<div class="thank-you">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Спасибо за заказ</div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="container">
      <p>Спасибо за ваш заказ</p>
      @if (isset($order_number))
        <p>Номер заказа {{ $order_number }}</p>
      @endif
    </div>
  </div>
</div>

@endsection