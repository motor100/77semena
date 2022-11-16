@extends('dashboard.layout')

@section('title')
О компании
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

  <div class="content">
    <div class="container-fluid">

    <form class="form" action="/dashboard/o-kompanii-update" method="post">

      <div class="form-group mb-3">
        <label for="text" class="form-check-label">Описание</label>
        <textarea name="text" id="text" required>{{ $text }}</textarea>
      </div>

      @csrf
      <button type="submit" class="btn btn-primary">Обновить</button>

    </form>

    </div>
  </div>

</div>
<!-- 
<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .menu-item > .nav-link');
  navLink[7].classList.add('active');
</script>
 -->
@endsection

@section('script')
  <script src="https://cdn.tiny.cloud/1/5bpy3e636t6os710b6abr6w7zmyr1d77c4px4vl6qi628r67/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="{{ asset('admin/js/tiny-file-upload.js') }}"></script>
@endsection