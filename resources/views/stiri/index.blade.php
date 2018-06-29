@extends('layouts.master')

{{-- Stiri --}}

@section('content')
&nbsp
&nbsp
&nbsp
    @foreach($stiri as $stire)

         @if($stire->id % 2)
            <div class="row featurette">
                <div class="col-md-7">
                      <a href="/stiri/{{ $stire->id }}"><h2 class="featurette-heading">{{ $stire->titlu }}</h2></a>
                        <p class="lead">{{ $stire->corp }}</p>
                </div>
               <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/slide01.jpg') }}" alt="Generic placeholder image">
               </div>
              </div>

             <hr class="featurette-divider">
         @else

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <a href="/stiri/{{ $stire->id }}"><h2 class="featurette-heading">{{ $stire->titlu }}</h2></a>
                  <p class="lead"> {{ $stire->corp }}</p>
                </div>
                <div class="col-md-5 order-md-1">
                  <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/slide02.jpg') }}" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">
      @endif
  @endforeach

@endsection
