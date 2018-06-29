
	<header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">

            <div class="col-4 pt-1">
              <img src="{{ asset('images/Rotaract_logo.png') }}" alt="The Image not exist" style="width: 108px;">
            </div>

          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/">Rotaract Club Bucuresti OCTO</a>
          </div>

          <div class="col-4 d-flex justify-content-end align-items-center">
             <a class="text-muted" href="{{ route('register') }}">Registration</a> &nbsp&nbsp&nbsp
			       <a class="text-muted" href="{{ route('login') }}">Login</a>
          </div>

        </div>
 </header>

	<div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="/">Home</a>
          <a class="p-2 text-muted" href="#">About</a>
          {{-- Rotaract Octo + Rotaract General --}}
          <a class="p-2 text-muted" href="post">Proiecte</a>
          <a class="p-2 text-muted" href="/membrii">Membri</a>
          <a class="p-2 text-muted" href="stiri">Stiri</a>
          <a class="p-2 text-muted" href="info">Contact</a>
        </nav>
 </div>
 &ensp;
 &ensp;


