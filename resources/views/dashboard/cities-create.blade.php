@extends('dashboard.layout')

@section('title')
Добавить город
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

    <form class="form" action="{{ route('cities-store') }}" method="post">
      <div class="form-group mb-3">
        <label for="title">Название</label>
        <input type="text" class="form-control" name="title" id="title" maxlength="200" required>
      </div>
      <div class="form-group mb-3">
        <label for="region">Область</label>
        <input type="text" class="form-control" name="region" id="region" maxlength="200" required>
      </div>

      @csrf
      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

  </div>
</div>
@endsection