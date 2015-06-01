@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Add Contact</div>
{!! Form::open(array('class' => 'form')) !!}
{!! Form::close() !!}
				<div class="panel-body">
					<form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/contacts/contact_add') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="name" name="name">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
							</div>
						</div>						

						<div class="form-group">
							<label class="col-md-4 control-label">Address</label>
							<div class="col-md-6">
								<textarea name="address" id="address" cols="52" rows="4"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Photo</label>
							<div class="col-md-6">
								 {{-- Form::file('image', null) --}}
								 {!! Form::file('image', null) !!}
								 <input type="file" name="photo" id="photo" />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">ADD</button>								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
