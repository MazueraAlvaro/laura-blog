@extends('layout.blog')
@section('css')
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
@endsection
@section('container')
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-10 offset-md-1">
  
          <div class="row">
            <div class="col-md-10">
              <h1 class="my-4">Publicaciones recientes</h1>
            </div>
            <div class="col-md-2">
              <a class="btn btn-primary btn-lg mt-4 " href="{{route("posts.create")}}">Nueva</a>
            </div>
          </div>
            
          @foreach ($posts as $post)              
          <!-- Blog Post -->
          <div class="card mb-4">
            {{-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> --}}
            <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{{substr($post->body, 0, 200)}} ...</p>
            <a href="{{route("post.show", $post->id)}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on {{$post->created_at}}
            </div>
          </div>
          @endforeach

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
              {{$posts->render()}}
          </ul>
  
        </div>  
      </div>
@endsection