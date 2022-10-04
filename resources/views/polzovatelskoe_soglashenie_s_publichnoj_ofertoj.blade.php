@section('title', 'Пользовательское соглашение с публичной офертой')

@extends('layouts.template')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">пользовательское соглашение с публичной офертой</div>
  </div>
</div>

<div class="politika-konfidencialnosti">
  <div class="container">
    <p>Пользовательское соглашение с публичной офертой</p>
  </div>
</div>

@endsection