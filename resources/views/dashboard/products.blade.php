@extends('dashboard.layout')

@section('title')
Товары
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

  <div class="content">
    <div class="container-fluid">

      <a href="{{ route('novosti-create') }}" class="btn btn-success mb-3">Добавить</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">№</th>
            <th scope="col">Название</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $pr)
            <tr>
              <th scope="row">{{ $pr->id}}</th>
              <td>{{ $pr->title}}</td>
              <td class="table-button">
                <a href="/novosti/{{ $pr->slug }}" class="btn btn-success" target="_blank">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('novosti-edit', $pr->id) }}" class="btn btn-primary">
                  <i class="fas fa-pen"></i>
                </a>
                <form class="form" action="{{ route('novosti-destroy', $pr->id) }}" method="get">
                  @csrf
                  <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
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