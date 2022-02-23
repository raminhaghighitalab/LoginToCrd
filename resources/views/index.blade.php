@extends('parent')

@section('main')


<div align="right">
	<a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add</a>
	<a class="btn btn-danger btn-sm" href="{{ route('logout') }}"
            onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
             </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Image</th>
		<th width="15%">Name</th>
		<th width="20%">Address</th>
		<th width="20%">email</th>
		<th width="10%">phone</th>

		<!--<th width="20%">Website</th>
		<th width="20%">Email</th>-->
		<th width="35%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->first_name }}</td>
			<td>{{ $row->address }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->phone }}</td>

			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection