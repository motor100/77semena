@extends('dashboard.layout')

@section('title')
Добавить категорию
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

    <form class="form" action="{{ route('category-update') }}" method="post">
      <div class="form-group mb-3">
        <label for="title">Заголовок</label>
        <input type="text" class="form-control" name="title" id="title" maxlength="200" required value="{{ $ct->title }}">
      </div>
      @if($ct->parent > 0)
      <div class="form-group mb-3">
        <select name="parent" class="form-select mt-1">
          @foreach($parent_ct as $pct)
            <option value="{{ $pct->id }}">{{ $pct->title }}</option>
          @endforeach
        </select>
      </div>
      @endif

      <input type="hidden" name="id" value="{{ $ct->id }}">

      @csrf
      <button type="submit" class="btn btn-primary">Обновить</button>
    </form>

  </div>
</div>
@endsection