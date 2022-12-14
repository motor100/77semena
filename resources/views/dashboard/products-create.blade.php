@extends('dashboard.layout')

@section('title')
Добавить товар
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

    <form class="form" action="{{ route('products-store') }}" method="post" enctype="multipart/form-data">
      <div class="form-group mb-3">
        <label for="title">Название</label>
        <input type="text" class="form-control" name="title" id="title" maxlength="200" required value="{{ old('title') }}">
      </div>
      <div class="form-group mb-3">
        <label for="text">Описание</label>
        <textarea class="form-control" name="text" id="text"></textarea>
      </div>
      <div class="form-group mb-3">
        <div class="label-text mb-1">Категория</div>
        <select name="category" id="category" class="form-select mt-1">
          @foreach($category as $ct)
            <option value="{{ $ct->id }}">{{ $ct->title }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group mb-3">
        <div class="label-text mb-1">Изображение</div>
        <input type="file" name="input-main-file" id="input-main-file" class="inputfile" required accept="image/jpeg,image/png">
        <label for="input-main-file" class="custom-inputfile-label">Выберите файл</label>
        <span class="namefile main-file-text">Файл не выбран</span>
      </div>
      <div class="form-group mb-3">
        <div class="label-text mb-1">Галерея</div>
        <input type="file" name="input-gallery-file[]" id="input-gallery-file" class="inputfile" accept="image/jpeg,image/png" multiple>
        <label for="input-gallery-file" class="custom-inputfile-label">Выберите файлы</label>
        <span class="namefile gallery-file-text">Файлы не выбраны</span>
      </div>
      <div class="form-group mb-3">
        <label for="code">Штрихкод</label>
        <input type="number" class="form-control input-code input-number" name="code" id="code" min="0" step="1" minlength="8" maxlength="15" required>
      </div>
      <div class="form-group mb-3">
        <label for="stock">Количество</label>
        <input type="number" class="form-control input-stock input-number" name="stock" id="stock" min="0" step="1" required>
      </div>
      <div class="form-group mb-3">
        <label for="buying-price">Закупочная цена</label>
        <input type="number" class="form-control input-buying-price input-number" name="buying-price" id="buying-price" min="0" step="1">
      </div>
      <div class="form-group mb-3">
        <label for="wholesale-price">Оптовая цена</label>
        <input type="number" class="form-control input-wholesale-price input-number" name="wholesale-price" id="wholesale-price" min="0" step="1" required>
      </div>
      <div class="form-group mb-3">
        <label for="retail-price">Розничная цена</label>
        <input type="number" class="form-control input-retail-price input-number" name="retail-price" id="retail-price" min="0" step="1" required>
      </div>
      <div class="form-group mb-3">
        <label for="promo-price">Акционная цена</label>
        <input type="number" class="form-control input-promo-price input-number" name="promo-price" id="promo-price" min="0" step="1">
      </div>
      <div class="form-group mb-3">
        <label for="weight">Вес, гр.</label>
        <input type="number" class="form-control input-weight input-number" name="weight" id="weight" min="1" step="1" required>
      </div>
      <div class="form-group mb-3">
        <label for="brand">Производитель</label>
        <input type="text" class="form-control" name="brand" id="brand" maxlength="200">
      </div>
      <div class="form-group mb-3">
        <label for="position">Позиция на складе</label>
        <input type="number" class="form-control input-position input-number" name="position" id="position" max="1000000" required>
      </div>

      @csrf
      <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

  </div>
</div>

<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[0].classList.add('active');
</script>

<script>
  // Выбор файла Изображение
  let inputMainFile = document.querySelector('#input-main-file'),
      mainFileText = document.querySelector('.main-file-text');

  if (inputMainFile) {
    inputMainFile.onchange = function() {
      mainFileText.innerHTML = this.files[0].name;
    }
  }

  // Выбор файлов Галерея
  let inputGalleryFile = document.querySelector('#input-gallery-file'),
      galleryFileText = document.querySelector('.gallery-file-text');

  inputGalleryFile.onchange = function() {
    let filesName = '';
    for (let i = 0; i < this.files.length; i++) {
      filesName += this.files[i].name + ' ';
    }
    galleryFileText.innerHTML = filesName;
  }
</script>

@endsection

@section('script')
  <script src="https://cdn.tiny.cloud/1/5bpy3e636t6os710b6abr6w7zmyr1d77c4px4vl6qi628r67/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="{{ asset('/js/tiny-file-upload.js') }}"></script>
@endsection