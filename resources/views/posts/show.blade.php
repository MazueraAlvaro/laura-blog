@extends('layout.blog')
@section('css')
<link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
@endsection
@section('container')
<div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-10 offset-md-1">
      <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

      <!-- Author -->
      {{-- <p class="lead">
        by
        <a href="#">Start Bootstrap</a>
      </p> --}}

      <hr>

      <!-- Date/Time -->
        <p>Posted on {{$post->created_at}}</p>

      <hr>

      <!-- Preview Image -->
      {{-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> --}}

      <hr>

      <!-- Post Content -->
      <p>
          {{$post->body}}
      </p>
      <hr>

      <!-- Comments Form -->
      <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
        <form method="POST" action="{{route('comments.store')}}">
            <div class="form-group">
                @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">
              <textarea class="form-control" rows="3" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

      @foreach ($post->comments as $comment)
      <!-- Single Comment -->
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
          {{-- <h5 class="mt-0">Commenter Name</h5> --}}
          {{$comment->comment}}
        </div>
      </div>
      @endforeach

    </div>

  </div>    
@endsection