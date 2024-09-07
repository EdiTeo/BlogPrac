@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="bd-title" style="text-align: center;"> <mark>Agregar Post</mark></h1>
    <section class="mt-3">
    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
      @csrf
      
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="card p-3">
        <label for="floatingInput">Titulo</label>
        <input class="form-control" type="text" name="title">
        <label for="floatingTextArea">Descripcion</label>
        <textarea class="form-control" name="descripcion" id="floatingTextarea" cols="30" rows="10"></textarea>
        <label for="formFile" class="form-label">Agregar imagen</label>
        <img src="" alt="" class="img-blog">
        <input class="form-control" type="file" name="image">
      </div>
      <button class="btn btn-secondary m-3">Guardar</button>
    </form>
  </section>
    
</div>
@endsection