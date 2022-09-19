@section('title', 'Новости')

@extends('layouts.template')


@section('content')


<div class="single-novosti">
  <div class="container">
    <p>{{ $single_novosti->title }}</p>
    <img src="{{ $single_novosti->image }}" alt="">
    <p>{{ $single_novosti->text }}</p>
  </div>
</div>

@endsection