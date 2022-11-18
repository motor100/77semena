@extends('dashboard.layout')

@section('title')
Добавить новость
@endsection

@section('dashboardcontent')

<div class="content">
  <div class="container">
    
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form class="form" action="{{ route('novosti-store') }}" method="post" enctype="multipart/form-data">
      <div class="form-group mb-3">
        <label for="title">Заголовок</label>
        <input type="rext" class="form-control" name="title" id="title" maxlength="200" required>
      </div>
      <div class="form-group mb-3">
        <label for="text">Описание</label>
        <textarea class="form-control" name="text" id="text"></textarea>
      </div>
      <div class="form-group mb-3">
        <div class="label-text mb-1">Изображение</div>
        <input type="file" name="input-main-file" id="input-main-file" class="inputfile" required accept="image/jpeg,image/png">
        <label for="input-main-file" class="custom-inputfile-label">Выберите файл</label>
        <span class="namefile main-file-text">Файл не выбран</span>
      </div>

      @csrf
      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

  </div>
</div>

<script>
  // Выбор файла Изображение
  let inputMainFile = document.querySelector('#input-main-file'),
      mainFileText = document.querySelector('.main-file-text');

  if (inputMainFile) {
    inputMainFile.onchange = function() {
      mainFileText.innerHTML = this.files[0].name;
    }
  }
</script>

@endsection

@section('script')
  <script src="https://cdn.tiny.cloud/1/5bpy3e636t6os710b6abr6w7zmyr1d77c4px4vl6qi628r67/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="{{ asset('/js/tiny-file-upload.js') }}"></script>
@endsection