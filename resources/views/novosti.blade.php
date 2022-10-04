@section('title', 'Новости')

@extends('layouts.template')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">новости</div>
  </div>
</div>

<div class="novosti news-section">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Новости</div>
      </div>
    </div>
  </div>
  <div class="news">
    <div class="container">
      <div class="row">
        @foreach($news as $nw)
          <div class="col-md-3">
            <div class="news-item">
              <div class="news-item__date">
                <div class="news-item__day">{{ $nw->date['day'] }}</div>
                <div class="news-item__month-year">{{ $nw->date['month-year'] }}</div>
              </div>
              <div class="news-item__title">{{ $nw->short_title }}</div>
              <div class="news-item__arrow"></div>
              <a class="full-link" href="/novosti/{{ $nw->slug }}"></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="pagination-links">
    <div class="container">
      {{  $news->links() }}
    </div>
  </div>
</div>

@endsection