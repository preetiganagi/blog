@if(count($errors))

<div class="container">
		
			<div class="alert alert-danger">
				<div class="form-group">
			<ul>
				@foreach($errors->all() as $error)
				<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
		</div>
</div>
@endif
