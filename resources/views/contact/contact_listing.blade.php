@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
				<a class="thickbox" href="{{ url('/contacts/add') }}">Add Contact</a>
				<table class="table">
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Email</td>
						<td>Address</td>
						<td>Actions</td>
					</tr>
				@if( count($contacts)>0 ) 
				@else
					<tr><td colspan="5"> No records found</td></tr>
				
				@endif
				@foreach( $contacts as $contact )
					<tr>
						<td>{{$contact->id}}</td>
						<td>{{$contact->name}}</td>
						<td>{{$contact->email}}</td>
						<td>{{$contact->address}}</td>
						<td><a href="">Edit</a>&nbsp;&nbsp;&nbsp;
							<a href="{{ url('/contacts/delete/'.$contact->id) }}">Delete</a></td>
					</tr>
				@endforeach
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
