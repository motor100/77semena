@extends('profile.layout')

@section('title')
Выданные заказы
@endsection

@section('profilecontent')

<div class="orders done-orders">
    <div class="content">

      <table class="orders-table">
        <tr class="table-header">
          <th class="number-cell">№</th>
          <th class="name-cell">ФИО</th>
          <th class="phone-cell">Телефон</th>
        </tr>
        @foreach($orders as $order)
          <tr class="orders-table-row" onclick="window.location.href='/order/{{ $order->id }}'; return false">
            <td>{{ $order->id }}</td>
            <td class="name-cell">{{ $order->name }}</td>
            <td>{{ $order->phone }}</td>
          </tr>
        @endforeach
      </table>
        
    </div>
</div>

@endsection 