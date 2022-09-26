@section('title', 'Отзывы')

@extends('layouts.template')


@section('content')

<div class="otzyvy">
  <div class="container">
    <p>Отзывы</p>

    @if (isset($testimonials)) 
      @foreach($testimonials as $ts)
        <div class="item">
          <div class="item-name">{{ $ts->name }}</div>
          <div class="item-text">{{ $ts->text }}</div>
        </div>
      @endforeach

      {{ $testimonials->links() }}
    @endif

  </div>

</div>


@endsection