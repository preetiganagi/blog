
	<title>header</title>
	<link rel="stylesheet" href="{{asset('css/layout1.css')}}">
	
	<link href="{{asset('css/layout2.css')}}" rel="stylesheet">
	<header>
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">My Application</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/post/create">create Post</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>

      <li class="nav-item">
        @if(Auth::check())
        <a class="nav-link ml-auto" href="/profile">{{ Auth::user()->name }}</a>
        @endif
      </li>
    
    </ul>
  </div>
</nav>
</div>
</header>