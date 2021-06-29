<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign-Up Form</title>
<style>
.container {
  padding: 16px;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
	input[type=date]{
		  width: 7%;
		  padding: 15px;
		  margin: 5px 0 22px 0;
		  display: inline-block;
		  border: none;
		  background: #f1f1f1;
	}
	input [type=radio]{
  		padding: 5px;
  		margin: 5px 0 22px 0;
  		display: inline-block;
  		border: none;
  		background: #f1f1f1;
	}

	input[type=text]:focus, input[type=password]:focus, input[type=date] {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}
a {
  color: dodgerblue;
}
.showme {
  display: none;
}

.showhim:hover .showme {
  display: block;
  font-color:orange;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<script>
</script>
</head>
<body>
@extends('master')
@section('content')
<div class="container">
    <div class="form-group col-12 p-0">
	    <form name="frm"  action="{{route('updaterole')}}" method="POST">
        @csrf
	    <div class="container">
		    <h1>Update Role</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <input type="hidden" name="id" value="{{$data['id']}}}">
            <label for="name"><b>Role Name</b></label>
            <input type="text" placeholder="Enter The Role Name" name="name" value="{{$data['name']}}" required>
            <span class="text-danger">@error('name') {{ $message }}@enderror</span>
            <br><br>
            <br><br>
            <p><input type="checkbox" required> By updating the Role you agree to our <a href="#">Terms & Privacy</a>.Please click on the checkbox if you agree</p>
            <Button class="btn btn-success" style="width:80px;" type="submit">Update</Button>
            <Button type="reset" class="btn btn-default pull-right">Cancel</Button>
        </div>
        </form>
  </div>
</div>
@endsection('content')
</body>
</html>

