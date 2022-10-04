@section('title', 'Доставка и оплата')

@extends('layouts.template')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">доставка и оплата</div>
  </div>
</div>

<div class="dostavka-i-oplata">
  <div class="container">
    <p>Доставка и оплата</p>
  </div>
</div>

@endsection