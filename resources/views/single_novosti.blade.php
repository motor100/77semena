@section('title', 'Новости')

@extends('layouts.template')


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
      </div>
    </div>
  </div>

  <div class="text">
    <div class="container">
      {{ $single_novosti->text }}
    </div>
  </div>
</div>

@endsection