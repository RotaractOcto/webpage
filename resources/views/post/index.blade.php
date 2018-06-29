@extends('layouts.master')

@section('content')

      <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ asset('images/pic01.jpg') }}" alt="Card image cap" >
                    <div class="card-body">
                      <h2 class="card-title">{{ str_limit($post->title, $limit = 20, $end = '...') }}</h2>
                      <p class="card-text">{{ str_limit($post->body, $limit = 150, $end = ' ... ') }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="post/{{$post->id}}" class="btn btn-primary"> View</a>
                        </div>
                        <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                      </div>
                    </div>
                  </div>
                </div>
         @endforeach
        </div>

@endsection





 {{-- Fiecare post trebuie sa fie incarcat in sectiunea lui --}}
 {{-- Body trebuie sa aiba o dimensiune exacta --}}

