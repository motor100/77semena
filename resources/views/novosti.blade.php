@section('title', 'Новости')

@extends('layouts.template')


@section('content')

<div class="novosti">
  <div class="container">
    <p>Новости</p>

    @if(isset($news))
      @foreach($news as $nw)
        <div class="item">
          <div class="item-image">
            <img src="{{ $nw->image }}" alt="">
          </div>
          <div class="item-title">
            <a href="/novosti/{{ $nw->slug }}">{{ $nw->title }}</a>  
          </div>
        </div>
      @endforeach

      {{ $news->links() }}

    @endif
  </div>

</div>

@endsection