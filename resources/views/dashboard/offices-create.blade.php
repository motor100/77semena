@extends('dashboard.layout')

@section('title')
Добавить ПВЗ
@endsection

@section('dashboardcontent')

<div class="content">
  <div class="container">
    
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form class="form" action="{{ route('offices-store') }}" method="post">
      <div class="form-group mb-3">
        <label for="title">Название</label>
        <input type="text" class="form-control" name="title" id="title" maxlength="200" required>
      </div>
      <div class="form-group mb-3">
        <div class="label-text mb-1">Город</div>
        <select name="city" id="city" class="form-select mt-1">
          @foreach($cities as $city)
            <option value="{{ $city->id }}">{{ $city->title }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="address">Адрес</label>
        <input type="text" class="form-control" name="address" id="address" maxlength="200" required>
      </div>
      <div class="form-group mb-3">
        <label for="coords">Координаты</label>
        <input type="text" class="form-control" name="coords" id="coords" minlength="10" maxlength="25" required>
      </div>
      <div class="form-group mb-3">
        <label for="description">Описание</label>
        <textarea name="description" id="description" class="form-control" cols="20" rows="5"></textarea>
      </div>
      <div class="form-group mb-3">
        <label for="time_weekday">Понедельник - пятница</label>
        <input type="text" class="form-control" name="time_weekday" id="time_weekday" maxlength="200" required>
      </div>
      <div class="form-group mb-3">
        <label for="time_saturday">Суббота</label>
        <input type="text" class="form-control" name="time_saturday" id="time_saturday" maxlength="200" required>
      </div>
      <div class="form-group mb-3">
        <label for="time_sunday">Воскресенье</label>
        <input type="text" class="form-control" name="time_sunday" id="time_sunday" maxlength="200" required>
      </div>

      @csrf
      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

  </div>
</div>
@endsection