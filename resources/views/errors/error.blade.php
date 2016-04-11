		@if ($errors->any())
		<center>
			<ul class="alert alert-danger">
				@foreach ($errors->all() as $error)
					{{$error}}
				@endforeach
			</ul>		
		</center>

		@endif