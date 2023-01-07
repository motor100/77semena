@extends('profile.layout')

@section('title')
Расчеты
@endsection

@section('profilecontent')

<div class="calc">
  <div class="content">

    <table class="orders-table">
      <tr class="table-header">
        <th class="number-cell">№</th>
        <th class="date-cell">Дата</th>
        <th class="summ-cell">Сумма</th>
      </tr>
      @foreach($orders as $order)
        <tr class="orders-table-row" onclick="window.location.href='/order/{{ $order->id }}'; return false">
          <td>{{ $order->id }}</td>
          <td>{{ $order->updated_at->format("H-i d-m-Y") }}</td>
          <td>{{ $order->order_summ }}</td>
        </tr>
      @endforeach
    </table>
      
  </div>
</div>

@endsection 