@extends('profile.layout')

@section('title')
Заказ {{ $order->id }}
@endsection

@section('profilecontent')

<div class="order">
  <div class="content">

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
        <div class="label-text mb-1">Покупатель</div>
        <div class="order-info">{{ $order->name }}</div>
        <div class="order-info">{{ $order->phone }}</div>
      </div>
    </div>

    <div class="order-edit">
      <form class="form" action="{{ route('profile-order-update') }}" method="post">
        <div class="form-group mb-3">
          <div class="label-text mb-1">Статус</div>
          @if($order->status == "Выдан")
            <div class="order-info">{{ $order->status }}</div>
          @else
            <div class="form-group mb-3">
              <input type="checkbox" name="status" id="status" value="Выдан">
              <span>Выдан</span>
            </div>
          @endif
        </div>

        @if($order->status != "Выдан")
          <input type="hidden" name="id" value="{{ $order->id }}">
          @csrf

          <input type="submit" class="btn btn-primary" value="Обновить">
        @endif
      </form>
    </div>

  </div>
</div>

@endsection 