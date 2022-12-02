@extends('dashboard.layout')

@section('title')
Редактировать ПВЗ
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

    <form class="form" action="{{ route('offices-update') }}" method="post">
      <div class="form-group mb-3">
        <label for="title">Название</label>
        <input type="text" class="form-control" name="title" id="title" maxlength="200" required value="{{ $office->title }}">
      </div>
      <div class="form-group mb-3">
        <div class="label-text mb-1">Город</div>
        <select name="city" id="city" class="form-select mt-1">
          @foreach($city as $ct)
            @if($ct->id == $current_category->id)
              <option value="{{ $ct->id }}" selected>{{ $ct->title }}</option>
            @else
              <option value="{{ $ct->id }}">{{ $ct->title }}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="address">Адрес</label>
        <input type="text" class="form-control" name="address" id="address" maxlength="200" required value="{{ $office->address }}">
      </div>
      <div class="form-group mb-3">
        <label for="description">Описание</label>
        <textarea name="description" id="description" class="form-control" cols="20" rows="5">{{ $office->description }}</textarea>
      </div>
      <div class="form-group mb-3">
        <label for="time_weekday">Понедельник - пятница</label>
        <input type="text" class="form-control" name="time_weekday" id="time_weekday" maxlength="200" required value="{{ $office->time_weekday }}">
      </div>
      <div class="form-group mb-3">
        <label for="time_saturday">Суббота</label>
        <input type="text" class="form-control" name="time_saturday" id="time_saturday" maxlength="200" required value="{{ $office->time_saturday }}">
      </div>
      <div class="form-group mb-3">
        <label for="time_sunday">Воскресенье</label>
        <input type="text" class="form-control" name="time_sunday" id="time_sunday" maxlength="200" required value="{{ $office->time_sunday }}">
      </div>
      <input type="hidden" name="id" value="{{ $office->id }}">

      @csrf
      <button type="submit" class="btn btn-primary">Обновить</button>
    </form>

  </div>
</div>
@endsection