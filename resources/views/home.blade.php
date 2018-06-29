@extends('layouts.master')

@section('content')
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
	  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="{{ asset('images/slide01.jpg') }}" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src=" {{ asset('images/slide02.jpg') }}" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{ asset('images/slide03.jpg') }}" alt="Third slide">
		    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
	  </a>
	</div>



	<div class="card">
		<div class="card-body">
			<h1 class="card-title">Cine suntem</h1>
			<p class="card-text"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eveniet neque numquam ullam. Distinctio explicabo tenetur est minima delectus et qui eligendi dolore, autem, possimus, dignissimos atque error enim quis.</h4></p>
		</div>
	</div>

	<hr>

    <div class="row">
    	<div class="col-sm">
	    	<div class="card">
				  <div class="card-header  text-white text-center bg-primary">
				    <a href="https://my.rotary.org/en" style=" color: white">About Rotaract</a>
				  </div>

				  <div class="card-body">
				  	<blockquote class="blockquote mb-0">
					 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				      <footer class="blockquote-footer">Persoana care se ocupa de sectiunea respectiva</footer>
				    </blockquote>
				  </div>
			</div>
    	</div>
    	<div class="col-sm">
	    	<div class="card">
				  <div class="card-header  text-white text-center bg-success" >
				    <a href="/post" style=" color: white">Proiecte</a>
				  </div>

				  <div class="card-body">
				  	<blockquote class="blockquote mb-0">
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				      <footer class="blockquote-footer">Persoana care se ocupa de sectiunea respectiva</footer>
				    </blockquote>
				  </div>
			</div>
    	</div>
    	<div class="col-sm">
	    	<div class="card">
	    		 <div class="card-header text-white text-center bg-danger" >
				    <a href="/membrii" style=" color: white">Membrii</a>
				  </div>
				  <div class="card-body">
				    <blockquote class="blockquote mb-0">
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				      <footer class="blockquote-footer">Persoana care se ocupa de sectiunea respectiva</footer>
				    </blockquote>
				  </div>
			</div>
    	</div>
    </div>
@endsection
