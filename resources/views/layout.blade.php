
@extends('master')

@section('content')
	<div class="container">
	 <div id="blog" class="row"> 
                <div class="col-md-12 gap10">
                	@foreach($posts as $post)
                     <a href="/post/{{ $post->id }}"><h2>{{ $post->title }} </h2></a>
                     <h6>{{ $post ->created_at->toFormattedDateString() }}</h6>
                   <p>
                   	{{ $post->body}} 
                   </p>
                   <hr>  
                   @endforeach
				        </div> 	         
    </div>
</div>

@endsection



