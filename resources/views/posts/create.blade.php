@extends('layout.blog')

@section('css')
<link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
    
@endsection

@section('container')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="card">
            <div class="card-header">
                Crear nueva publicación
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('posts.store')}}">
                    <div class="form-group">
                      <label for="postTitle">Titulo de la publicación</label>
                      <input type="text" name="title" class="form-control" id="postTitle" placeholder="Titutlo de la publicación">
                    </div>
                    <div class="form-group">
                      <label for="bodyPost">Cuerpo de la publicación</label>
                      <textarea class="form-control" id="bodyPost" name="body" rows="5"></textarea>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">Crear</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection