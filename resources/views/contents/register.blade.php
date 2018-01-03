
@extends('layouts.master')

@section('content')
<div class="container">
	<div id="blog" class="row"> 
    <div class="col-md-12 gap10">
            <form method="post" action="/register/create">
    			{{ csrf_field() }}
            	<h2>Register</h2>
            	<hr>
 				 <div class="form-group">
   					 <label for="name">Name</label>
   					 <input type="text" class="form-control" id="name" name="name">
 				 </div>

				<div class="form-group">
   					<label for="email">Email</label>
   					<input type="text" class="form-control" id="email" name="email">
 				</div>

        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="Password">Conform Password</label>
            <input type="password" class="form-control" id="conformPassword" name="conformPassword">
        </div>

 				<div class="form-group">
  				<button type="submit" class="btn btn-primary">Submit</button>
  			</div>
			</form>
	</div>
</div>
</div>
   @include('contents/errors')    
@endsection

