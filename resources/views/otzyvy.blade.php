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

  <div class="testimonials">
    <div class="container">
      @foreach($testimonials as $ts)
        <!-- <div class="testimonials-item">
          <div class="row">
            <div class="col-md-2">
              <div class="item-name">{{ $ts->name }}</div>
              <div class="item-date">{{ $ts->date }}</div>
              <div class="item-city">{{ $ts->city }}</div>
            </div>
            <div class="col-md-10">
              <div class="item-text">{{ $ts->text }}</div>
            </div>
          </div>
        </div> -->
        <div class="testimonials-item">
          <div class="testimonials-item__info">
            <div class="testimonials-item__name">{{ $ts->name }}</div>
            <div class="testimonials-item__date">{{ $ts->date }}</div>
            <div class="testimonials-item__city">{{ $ts->city }}</div>
          </div>
          <div class="testimonials-item__text">
            <div class="testimonials-item__text">{{ $ts->text }}</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div class="testimonials-btn-wrapper">
    <div class="container">
      <div class="testimonials-btn">
        <div class="testimonials-btn__text">Оставить отзыв</div>
      </div>
    </div>
  </div>  

  <div class="pagination-links">
    <div class="container">
      {{ $testimonials->links() }}
    </div>
  </div>
    
</div>

@endsection