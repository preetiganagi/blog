
@extends('master')

@section('content')
<div class="container">
	<div id="blog" class="row"> 
    <div class="col-md-12 gap10">
            <form method="post" action="/post">
    			{{ csrf_field() }}
            	<h2>Create Post</h2>
            	<hr>
 				 <div class="form-group">
   					 <label for="title">Title</label>
   					 <input type="text" class="form-control" id="title" name="title">
 				 </div>
				<div class="form-group">
   					<label for="body">Body</label>
   					<textarea class="form-control" id="body" name="body"></textarea>
 				</div>
 				<div class="form-group">
  				<button type="submit" class="btn btn-primary">Publish</button>
  			</div>
			</form>
	</div>
</div>
</div>
   @include('errors')    
@endsection

