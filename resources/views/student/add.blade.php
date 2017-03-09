@extends('layouts.app')

@section('content')
<h1> Add new student </h1>
<form action="/student/add" method="POST">
	{{ csrf_field() }}
	<div class="form-group">
    	<label>First Name</label>
    	<input type="firstname" class="form-control" name="firstname" placeholder="First Name">
  	</div>
  	<div class="form-group">
    	<label>Last Name</label>
    	<input type="lastname" class="form-control" name="lastname" placeholder="Last Name">
  	</div>
  	<div class="form-group">
    	<label>Email</label>
    	<input type="email" class="form-control" name="email" placeholder="Email">
  	</div>
  	<div class="form-group">
    	<label>Address</label>
    	<input type="address" class="form-control" name="address" placeholder="Address">
  	</div>
  	<div class="form-group">
    	<label>Contact</label>
    	<input type="tel" class="form-control" name="contact" placeholder="Contact">
  	</div>
  	
  	<button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection
