@extends('dashboard.layout')

@section('title')
Редактировать город
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

    <form class="form" action="{{ route('cities-update') }}" method="post">
      <div class="form-group mb-3">
        <label for="title">Название</label>
        <input type="text" class="form-control" name="title" id="title" maxlength="200" required value="{{ $city->title }}">
      </div>
      <div class="form-group mb-3">
        <label for="region">Область</label>
        <input type="text" class="form-control" name="region" id="region" maxlength="200" required value="{{ $city->region }}">
      </div>
      <input type="hidden" name="id" value="{{ $city->id }}">

      @csrf
      <button type="submit" class="btn btn-primary">Обновить</button>
    </form>

  </div>
</div>
@endsection