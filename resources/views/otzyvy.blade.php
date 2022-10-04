@section('title', 'Отзывы')

@extends('layouts.template')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">отзывы</div>
  </div>
</div>

<div class="otzyvy">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Отзывы</div>
      </div>
    </div>
  </div>

  <div class="container">
    
      @foreach($testimonials as $ts)
        <div class="item">
          <div class="item-name">{{ $ts->name }}</div>
          <div class="item-text">{{ $ts->text }}</div>
        </div>
      @endforeach

      {{ $testimonials->links() }}
   
  </div>
</div>

@endsection