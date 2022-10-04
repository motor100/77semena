@section('title', 'Контакты')

@extends('layouts.template')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">контакты</div>
  </div>
</div>

<div class="o-kompanii">
  <div class="container">
    <p>Контакты</p>
  </div>
</div>

@endsection