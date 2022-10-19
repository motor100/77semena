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

<div class="o-kompanii">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Поиск</div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="container">
      <p>Поиск</p>
    </div>
  </div>
  
</div>

@endsection