@section('title', 'Новости')

@extends('layouts.dashboard')

@section('content')

<div class="content">
  <div class="container">
    <a href="{{ route('novosti-create') }}" class="btn btn-success mb-3">Добавить</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($news as $nw)
          <tr>
            <th scope="row">{{ $nw->id}}</th>
            <td>{{ $nw->title}}</td>
            <td class="table-button">
              <a href="/novosti/{{ $nw->slug }}" class="btn btn-success" target="_blank">
                <i class="fa-solid fa-eye"></i>
              </a>
              <a href="{{ route('novosti-edit', $nw->id) }}" class="btn btn-primary">
                <i class="fa-solid fa-pencil"></i>
              </a>
              <form class="form" action="" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">
                  <i class="fa-solid fa-trash-can"></i>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="pagination-links">
      <div class="container">
        {{  $news->links() }}
      </div>
    </div>
  </div>
</div>

@endsection