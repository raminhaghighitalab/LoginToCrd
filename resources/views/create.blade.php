@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Full Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" class="form-control input-lg"value="{{old('first_name')}}" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Address</label>
		<div class="col-md-8">
			<input type="text" name="address" class="form-control input-lg" value="{{old('address')}}"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Email</label>
		<div class="col-md-8">
			<input type="email" name="email" class="form-control input-lg" value="{{old('email')}}"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">phone</label>
		<div class="col-md-8">
			<input type="text" name="phone" class="form-control input-lg"value="{{old('phone')}}" />
		</div>
	</div>
	<br />
	<br />
	<br />
	 <div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
	</div>

	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection



