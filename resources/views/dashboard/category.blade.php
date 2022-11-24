@extends('dashboard.layout')

@section('title')
Категории
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

  <div class="content">
    <div class="container-fluid">

      <a href="{{ route('category-create') }}" class="btn btn-success mb-3">Добавить</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="number-column" scope="col">№</th>
            <th scope="col">Название</th>
            <th class="button-column"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $ct)
            <tr>
              <th scope="row">{{ $ct->id}}</th>
              <td>{{ $ct->title}}</td>
              <td class="table-button">
                <a href="/catalog/?category={{ $ct->slug }}" class="btn btn-success" target="_blank">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('category-edit', $ct->id) }}" class="btn btn-primary">
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

      <div class="content-header mb-2">
        <div class="container-fluid">
          <h1 class="m-0">Подкатегории</h1>
        </div>
      </div>

      <a href="{{ route('subcategory-create') }}" class="btn btn-success mb-3">Добавить</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="number-column" scope="col">№</th>
            <th scope="col">Название</th>
            <th class="button-column"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($subcategories as $ct)
            <tr>
              <th scope="row">{{ $ct->id}}</th>
              <td>{{ $ct->title}}</td>
              <td class="table-button">
                <a href="/catalog/?category={{ $ct->slug }}" class="btn btn-success" target="_blank">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('category-edit', $ct->id) }}" class="btn btn-primary">
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