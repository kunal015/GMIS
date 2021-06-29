<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login Form</title>
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
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
</style>
<body>
<h1 style="text-align:center;"> Admin Login Form </h1>
<form action="{{route('checknew')}}" method="post">
@csrf
    <div class="results">
        @if(Session::get('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Your Email" name="email" value="{{old ('email')}}"required>
    <span class="text-danger">@error('email') {{ $message }}@enderror</span>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <span class="text-danger">@error('password') {{ $message }}@enderror</span>
    <button type="submit">Login</button>
    <br/>
    <br/>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br>
    <p><span style="padding-right:10px;">Want To Login As A Non-admin User.</span><a href="login">Click Here</a></p>
  </div>
</form>
</body>
