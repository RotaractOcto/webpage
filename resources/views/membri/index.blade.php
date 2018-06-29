@extends('layouts.master')

{{-- Membri  --}}

@section('content')
	<div class="row">
    @foreach($membri as $membru)
          <div class="col-lg-4" style="height: 400px;">
              <img class="rounded-circle" src=" {{ asset("$membru->foto") }}" alt="Generic placeholder image" width="140" height="140">
              <h2>{{$membru->nume }}  {{$membru->prenume}}</h2>
              <p>{{ str_limit($membru->descriere, $limit=150, $end ='...') }}</p>
              <p><a class="btn btn-secondary" href="/membri/{{ $membru->id }}" role="button">View details &raquo;</a></p>
           </div><!-- /.col-lg-4 -->
    @endforeach
  </div><!-- /.row -->
@endsection

{{-- {{ asset('images/obama.jpg') }} --}}
{{-- asset("storage/public/membru/$membru->nume"."_"."$membru->prenume.jpg") --}}
