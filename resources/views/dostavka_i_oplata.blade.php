@section('title', 'Доставка и оплата')

@extends('layouts.template')


@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="{{ route('home') }}">главная страница</a>
    </div>
    <div class="arrow"></div>
    <div class="active">доставка и оплата</div>
  </div>
</div>

<div class="dostavka-i-oplata">
  <div class="section-title-wrapper">
    <div class="container">
      <div class="section-title">
        <div class="section-title__text">Доставка и оплата</div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    
    <div class="select-city-form">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <label for="select-city" class="label">Ваш город</label>
            <select name="" id="select-city" class="select-css">
              @foreach($cities as $city)
                <option value="{{ $city->city }}">{{ $city->city }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>
    
    <div class="offices">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="temp-map">
              <img src="/img/temp-map.jpg" alt="">
            </div>
          </div>
          <div class="col-md-7">
            <div class="offices-info">
              <div class="offices-info__title">Места выдачи товара</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

@endsection