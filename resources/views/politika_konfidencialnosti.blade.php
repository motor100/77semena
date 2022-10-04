@section('title', 'Отзывы')

@extends('layouts.template')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">политика конфиденциальности</div>
  </div>
</div>

<div class="politika-konfidencialnosti">
  <div class="container">
    <p>Политика конфиденциальности</p>
  </div>
</div>

@endsection