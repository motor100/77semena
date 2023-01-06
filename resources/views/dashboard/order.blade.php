@extends('dashboard.layout')

@section('title')
Заказ {{ $order->id }}
@endsection

@section('dashboardcontent')

<div class="dashboard-home">
  <div class="content">
    <div class="container-fluid">

      <div class="order-content">
        <div class="form-group mb-3">
          <div class="label-text mb-1">Товары</div>
          <div class="order-info">{!! $order->prds !!}</div>
        </div>
        <div class="form-group mb-3">
          <div class="label-text mb-1">Сумма</div>
          <div class="order-info">{{ $order->price }}р</div>
        </div>
        <div class="form-group mb-3">
          <div class="label-text mb-1">Оплата</div>
          @if($order->payment)
            <div class="order-info">Оплачен</div>
          @else
            <div class="order-info order-info-red">Оплаты нет</div>
          @endif
        </div>
        <div class="form-group mb-3">
          <div class="label-text mb-1">ПВЗ</div>
          <div class="order-info">{{ $order->office }}</div>
        </div>
        <div class="form-group mb-3">
          <div class="label-text mb-1">Время</div>
          <div class="order-info">{{ $order->date }}</div>
        </div>
        <div class="form-group mb-3">
          <div class="label-text mb-1">Покупатель</div>
          <div class="order-info">{{ $order->name }}</div>
          <div class="order-info">{{ $order->phone }}</div>
        </div>
      </div>

      <div class="order-edit">
        <form class="form" action="{{ route('order-update') }}" method="post">
          <div class="form-group mb-3">
            <div class="label-text mb-1">Статус</div>
            @if($order->status == "Выдан")
              <div class="order-info">{{ $order->status }}</div>
            @else
              <select name="status" id="status" class="form-select">
                <option value="{{ $order->status }}" selected>{{ $order->status }}</option>
                <option value="В обработке">В обработке</option>
                <option value="Склад">Склад</option>
                <option value="Отправлен в ПВЗ">Отправлен в ПВЗ</option>
                <option value="Отменен">Отменен</option>
              </select>
            @endif
          </div>

          @if($order->status != "Выдан")
            <div class="form-group mb-3">
              <label for="comment" class="form-check-label d-block mb-1">Комментарий</label>
              <input type="text" name="comment" id="comment" class="form-control" maxlength="250" value="{{ $order->comment }}">
            </div>
            <input type="hidden" name="id" value="{{ $order->id }}">
            @csrf

            <input type="submit" class="btn btn-primary" value="Обновить">
          @endif
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