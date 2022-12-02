@extends('dashboard.layout')

@section('title')
Пункты выдачи заказов
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

  <div class="content">
    <div class="container-fluid">

      <a href="{{ route('offices-create') }}" class="btn btn-success mb-3">Добавить</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="number-column" scope="col">№</th>
            <th scope="col">Название</th>
            <th class="button-column"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($offices as $office)
            <tr>
              <th scope="row">{{ $office->id}}</th>
              <td>{{ $office->city->title }},&nbsp;{{ $office->title }},&nbsp;{{ $office->address }}</td>
              <td class="table-button">
                <a href="#" class="btn btn-success">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('offices-edit', $office->id) }}" class="btn btn-primary">
                  <i class="fas fa-pen"></i>
                </a>
                <button type="submit" class="btn btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>

</div>

<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[6].classList.add('active');
</script>
@endsection