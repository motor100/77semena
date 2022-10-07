@section('title', 'Добавить новость')

@extends('layouts.dashboard')

@section('content')

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

    <form class="form" action="{{ route('novosti-store') }}" method="post">
      <div class="form-group mb-3">
        <label for="title">Заголовок</label>
        <input type="rext" class="form-control" id="title" maxlength="200" required>
      </div>
      <div class="form-group mb-3">
        <label for="text">Текст</label>
        <textarea class="form-control" id="text"></textarea>
      </div>
      @csrf
      <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

  </div>
</div>

@endsection

@section('script')
  <!-- <script src="https://cdn.tiny.cloud/1/5bpy3e636t6os710b6abr6w7zmyr1d77c4px4vl6qi628r67/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="{{ asset('/js/tiny-file-upload.js') }}"></script> -->
@endsection