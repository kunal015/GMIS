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
<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
<script>
    function myFunction()
    {
       @if(Session()->has('success'))
        {
            alert('User Created Successfully');
        }
        @endif
    }
	function val()
	{
		if(document.frm.password.value!=document.frm.psw1.value)
			{
				alert("Error in repeating the password");
			}
	}
</script>
</head>
<body>
@extends('master')
@section('content')
<div class="container">
    <div class="form-group col-12 p-0">
            <div>
                @if(Session()->has('success'))
                <div class="alert alert-success">
                    {{Session()->get('success')}}
                </div>
                @endif
            </div>
	    <form name="frm"  action="{{route('store')}}" method="POST">
        @csrf
	    <div class="container">
		    <h1>Register</h1>
            <p>Please fill in this form to create a User</p>
            <hr>
            <label for="name"><b>Full Name</b></label>
            <input type="text" placeholder="Enter Your Full Name" name="name" value="{{old ('name')}}" required>
            <span class="text-danger">@error('name') {{ $message }}@enderror</span>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" value="{{old ('email')}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Invalid Email Address" required>
            <span class="text-danger">@error('email') {{ $message }}@enderror</span><br/>
            <label for="password"><b>Password</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="showhim">info<div class="showme">Password must be atleast 8 characters long</div></span>
            <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <span class="text-danger">@error('password') {{ $message }}@enderror</span>
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}" required>
            <br/><br/>
            <label for="role"><b>Select The Role</b></label><br/>
            @foreach( $roles as $role)
                <input type="radio" id="{{$role['name']}}" name="role" value="{{$role['name']}}" required>
                <label for="{{$role['name']}}">{{$role['name']}}</label><br/>
            @endforeach
            <br><br>
            <label for="Description"><b>Description</b></label><br>
            <textarea rows = "5" cols = "50" name = "desc" placeholder="Type Your Desription"></textarea>
            <hr>
            <Button class="btn btn-success" onclick="val()" style="width:80px;">Register</Button>
        </div>
        </form>
        <br/>
        <div class="container signin">
            <p>Want to check if the user already exists? <a href='list'>List</a>.</p>
        </div>
  </div>
</div>
@endsection('content')
</body>
</html>
