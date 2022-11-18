@section('title', 'Новости')

@extends('layouts.main')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="parent">
      <a href="{{ url('/novosti') }}">новости</a>
    </div>
    <div class="arrow"></div>
    <div class="active">{{ $single_novosti->title }}</div>
  </div>
</div>

<div class="single-novosti">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">{{ $single_novosti->title }}</div>
        <div class="single-novosti__date">{{ $single_novosti->date }}</div>
        <div class="back back-absolute" onclick="history.back();">
          <img src="/img/arrow-back.svg" alt="">
        <span class="back-text hidden-mobile">назад</span>
      </div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="container">
      <div class="image">
        <img src="{{ asset('storage' . $single_novosti->image) }}" alt="">
        </div>
      <div class="text">{!! $single_novosti->text !!}</div>
    </div>
  </div>
</div>

@endsection