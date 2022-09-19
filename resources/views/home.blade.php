@section('title', 'Home')

@extends('layouts.template')


@section('content')


<div class="news-section">
  <div class="container">
    <h4>Новости</h4>
    <div class="row">

      @foreach($news as $nw)
        <div class="col-md-3">
          <div class="news-item">
            <a href="/novosti/{{ $nw->slug }}">
              <div class="news-item__title">{{ $nw->title }}</div>
            </a>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>

@endsection