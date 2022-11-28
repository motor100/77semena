@extends('profile.layout')

@section('title')
Выданные заказы
@endsection

@section('profilecontent')

<div class="done-orders">
    <div class="content">

        <div class="row">
          <div class="col-md-6">
            <table class="orders-table">
              <tr class="table-header">
                <th>№</th>
                <th class="middle-cell">ФИО</th>
                <th>Телефон</th>
              </tr>
              <tr>
                <td>178G541R</td>
                <td class="middle-cell">Никитин Алексей Михайлович</td>
                <td>+7 921 654 45 85</td>
              </tr>
            </table>
          </div>
        </div>
        
    </div>
</div>

@endsection 