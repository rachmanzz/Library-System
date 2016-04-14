		@if ($errors->any())
		<center>
			<div class="ui negative message">
				<div class="header">
					Check it out!
				</div>
				<p>
					@foreach ($errors->all() as $error)
						{{$error}}
					@endforeach					
				</p>
			</div>		
		</center>
		@endif