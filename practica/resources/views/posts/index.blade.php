@extends('layouts.app')
@section('content')
<div class="container">
  <div class="titlebar">
    <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">Crear Publicación</a>
    <h1 style="align-content: center">Mini post list</h1>
  </div>
    
  <hr>
  
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
         @if (count($posts) > 0)  
    @foreach ($posts as $post)
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-2">
              <img class="img-fluid" style="max-width:100%;" src="{{ asset('images/'.$post->image)}}" alt="">
            </div>
            <div class="col-10">
              <h4>{{$post->title}}</h4>
              <p>{{$post->descripcion}}</p>
            </div>
          </div>
           
          <hr>
        </div>
      </div>
    @endforeach
  @else
    <p>No Posts found<!--SE MOSTRARA EN MINI POST LIST, publicaciones creadas --></p>
  @endif
</div>
@endsection