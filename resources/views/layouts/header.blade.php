
	<title>header</title>
	<link rel="stylesheet" href="{{asset('css/layout1.css')}}">
	
	<link href="{{asset('css/layout2.css')}}" rel="stylesheet">
	<header>
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">My Application</a>
 
  <div class="collapse navbar-collapse" id="navbarNav">

        <a class="nav-link navbar-brand" href="/">Home <span class="sr-only">(current)</span></a>

         @if(Auth::check())
        <a class="nav-link navbar-brand" href="/post/create">create Post</a>
        @endif

        <a class="nav-link navbar-brand" href="/register">Register</a>

        @if(Auth::check())
        <a class="nav-link ml-auto navbar-brand" href="/profile">{{ Auth::user()->name }}</a>
        @endif

  </div>
</nav>
</div>
</header>