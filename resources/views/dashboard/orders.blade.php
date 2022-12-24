@extends('dashboard.layout')

@section('title')
Заказы
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">
        <table class="table">
          <tr>
            <th>Номер</th>
            <th>Дата</th>
            <th>Статус</th>
            <!-- <th>Товары</th> -->
            <!-- <th>Имя</th> -->
            <th>Оплата</th>
            <th>Комментарий</th>
          </tr>
          @if(isset($orders))
            @foreach($orders as $order)
              <tr>
                <td>
                  <a href="/admin/order/{{ $order->id }}">{{ $order->id }}</a>
                </td>
                <td>{{ $order->date }}</td>
                <td>{{ $order->status }}</td>
                <!-- <td>{--!! $order->prds !!--}</td> -->
                <!-- <td>{{-- $order->name --}}</td> -->
                @if ($order->payment)
                  <td>
                    <div class="payment payment-green"></div>
                  </td>
                @else
                  <td>
                    <div class="payment payment-red"></div>
                  </td>
                @endif
                <td>{!! $order->comment !!}</td>
              </tr>
            @endforeach
          @endif
        </table>
        {{ $orders->links() }}
      </div>
    </div>

</div>

<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[2].classList.add('active');
</script>
@endsection 