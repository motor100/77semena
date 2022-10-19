@section('title', '404')

@extends('layouts.main')

@section('content')
<div class="page404">
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="image404">
          <img src="/img/404.png" alt="">
        </div>
        <div class="text404">УПС.... Что-то пошло не так или такой страницы не существует(</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 ms-auto">
        <div class="btn404 white-btn" onclick="history.back();">Вернуться назад</div>
      </div>
      <div class="col-md-3 me-auto">
        <a href="/" class="btn404 purple-btn">Главная</a>
      </div>
    </div>
  </div>
</div>
@endsection  