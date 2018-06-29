@extends('layouts.master')

@section('content')
                <div class="card box-shadow">
                    <img class="card-img-top" src="{{ asset('images/pic01.jpg') }}" alt="Card image cap" >
                    <div class="card-body">
                      <h2 class="card-title">{{ $p->title }}</h2>
                      <p class="card-text">{{ $p->body }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ $p->created_at->diffForHumans() }}</small>
                     </div>
                    </div>
                  </div>
@endsection










