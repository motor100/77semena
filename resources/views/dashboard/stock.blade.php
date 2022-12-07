@extends('dashboard.layout')

@section('title')
Склад
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

  <div class="content">
    <div class="container-fluid">

      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form class="form mb-5" action="/dashboard/stock" method="get">
        <div class="form-group mb-3">
          <label for="q">Поиск по штрихкоду</label>
          <input type="number" class="form-control input-number" name="q" id="q" maxlength="200" required>
        </div>

        @csrf
        <button type="submit" class="btn btn-primary">Найти</button>
      </form>

      @if($product)
        <div class="search-rezult">
          <div class="product-title">{{ $product->title }},&nbsp;количество&nbsp;{{ $product->stock }}</div>
        </div>

        <form class="form" action="/dashboard/stock/update" method="post">
          <div class="form-group mb-3">
            <label for="quantity">Количество</label>
            <input type="number" class="form-control input-number" name="quantity" id="quantity" min="0" step="1" required>
          </div>
          <input type="hidden" name="id" value="{{ $product->id }}">

          @csrf
          <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
      @endif

    </div>
  </div>

</div>

<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[1].classList.add('active');
</script>
@endsection