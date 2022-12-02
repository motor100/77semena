@extends('dashboard.layout')

@section('title')
Заказы
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">
        
      </div>
    </div>

</div>

<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[2].classList.add('active');
</script>
@endsection 