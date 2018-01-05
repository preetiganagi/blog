@extends('layouts.master')

@section('content')
	<div class="container">
	 <div id="blog" class="row"> 
                <div class="col-md-12 gap10">
               
                    <h2>{{ $showPost->title }} </h2>
                     <h6>{{ $showPost->user->name }} on {{$showPost ->created_at->toFormattedDateString() }}</h6>
                   <p>
                   	{{ $showPost->body}} 
                   </p>
                    <hr> 
				        </div>  
                <div class="col-md-12 gap10">
                  <h4><b>Comments:</b></h4>
                @foreach($showPost->comment as $comment)
                  <ul class='list-group'>
                    <li class='list-group-item'>
                      {{ $comment->user->name }} on
                     {{ $comment->created_at->diffForHumans() }}:
                      <strong>{{ $comment->body}} </strong>
                    </li>
                  </ul>
                @endforeach
                </div> 
                <div class="col-md-12 gap10">
                  <form method="post" action="/comment/{{ $showPost->id }}">
                    {{ csrf_field() }}
                    <div class="form-group card-block">
                        <textarea name="body" placeholder ="Your comment here."" class="form-control">
                        </textarea>   
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary"> Add Comment</button>
                    </div>
                  </form> 
                </div>
    </div>
</div>
 @include('contents/errors')    
@endsection
