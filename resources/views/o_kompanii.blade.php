@section('title', 'О компании')

@extends('layouts.template')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">о компании</div>
  </div>
</div>

<div class="o-kompanii">
  <div class="container">
    <p>О компании</p>
  </div>
</div>

@endsection