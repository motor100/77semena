@section('title', 'Документы')

@extends('layouts.main')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">документы</div>
  </div>
</div>

<div class="dokumenty">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Документы</div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="container">
      <div class="documents">
        <div class="documents-item">
          <a href="#" class="documents-item__link">Лицензия</a>
        </div>
        <div class="documents-item">
          <a href="#" class="documents-item__link">Сертификат</a>
        </div>
        <div class="documents-item">
          <a href="#" class="documents-item__link">Свидетельство</a>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection