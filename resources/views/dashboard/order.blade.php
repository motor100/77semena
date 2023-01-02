@extends('dashboard.layout')

@section('title')
Заказы
@endsection

@section('dashboardcontent')

<div class="dashboard-home">
  <div class="content">
    <div class="container-fluid">

      <div class="order-content">
        <p>{{ $order->id }}</p>
        <p>{{ $order->date }}</p>
        <p>{{ $order->status }}</p>
        <p>{!! $order->prds !!}</p>
      </div>

      <div class="order-edit">
        <form class="form" action="/dashboard/edit-order" method="post">
          <div class="form-group mb-3">
            <div class="label-text mb-1">Статус</div>
            <select name="status" id="status" class="form-select">
              <option value="В обработке">В обработке</option>
              <option value="Завершен">Завершен</option>
              <option value="Оплачен">Оплачен</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <label for="comment" class="form-check-label d-block mb-1">Комментарий</label>
            <input type="text" name="comment" id="comment" class="form-control" value="{{ $order->comment }}">
          </div>
          <input type="hidden" name="id" value="{{ $order->id }}">
          @csrf
          <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
      </div>

    </div>
  </div>
</div>

<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[2].classList.add('active');
</script>
@endsection