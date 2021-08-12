<!doctype html>
<head>
<meta charset="utf-8">
<title>Student Login</title>
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
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    justify-content: center;
}
.align-self-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
}
.col-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
div {
    display: block;
}
.text-center {
    text-align: center !important;
}
.details-section h1 {
    font-size: 40px;
    font-weight: 300;
    color: #fff;
    margin-bottom: 10px;
    line-height: 1.5;
}
.login__form {
    text-align: left;
}
form {
    display: block;
    margin-top: 0em;
}
input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button, input {
    overflow: visible;
}
.form-group {
    margin-bottom: 1rem;
    position: relative;
}
.login__form label {
    display: block;
    font-weight: 600;
    line-height: 1.71;
    margin-bottom: 5px;
    color: #fff;
}
.login__form .form-control {
    display: block;
    border-radius: 10px;
    box-shadow: inset 0 2px 3px 0 rgb(0 0 0 / 10%);
    background-color: #fff;
    height: 50px;
    border: 1px solid #ccc;
    width: 100%;
    outline: none;
    padding: 0 20px;
    color: #33323f;
    font-size: 16px;
}
button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
    cursor: pointer;
}
.app-input__show-password {
    background: #fff url(https://lifevitae.co/assets/img/eye.png);
    background-size: cover;
    width: 23px;
    height: 13px;
    border: none;
    outline: none;
    position: absolute;
    right: 20px;
    top: 62%;
}
button, [type="button"], [type="reset"], [type="submit"] {
    -webkit-appearance: button;
}
button, select {
    text-transform: none;
}
button, input {
    overflow: visible;
}
.login__form .btn-green {
    display: block;
    border-radius: 8px;
    padding: 12px;
    border: none;
    width: 100%;
    outline: none;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    box-shadow: 0 10px 10px 0 rgb(0 0 0 / 10%);
    font-size: 15px;
    font-weight: 700;
    text-decoration: none;
    background-color: #40c4c1;
}
button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
    cursor: pointer;
}
</style>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script type="text/javascript">
            function myFunction() {
                 @if(Session::has('fail'))
                    alert('{{Session::get('fail')}}');
                 @endif
                 @if(Session::has('success'))
                    alert('{{Session::get('success')}}');
                 @endif
             }
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
</script>
<body onLoad="myFunction()" style="background-image: linear-gradient(to right, #8950e1 0, #40c4c1 100%);">
<div class="row text-center" style="padding-top:40px;">
    <div class="col-12 align-self-baseline">
        <img class="login-logo" src="https://lifevitae.co/assets/img/login-logo.svg">
    </div>
</div>
  <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-sm-6">
                  <div class="row text-center">
                    <div class="col-12 align-self-baseline">
                                 <div style="margin: 20px 0;"> </div>
                                    <h1 class="text-white text-center mt-3 mb-3">Password Creation Portal</h1>
                                      <form id="login" method="POST" class="login__form" action="{{route('createpassword')}}" novalidate="novalidate">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user['id']}}">
                                        <div class="form-group">
                                            <label for="email">Password</label>
                                              <input name="password" maxlength="255" autocomplete="on" type="text" placeholder="Enter Your Password" value="{{old ('password')}}" class="form-control valid" aria-invalid="false">
                                              <span class="text-danger">@error('Password') {{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group" style="position: relative;">
                                          <label for="repeat">Repeat Password</label>
                                          <input type="password" name="repeatpassword" autocomplete="on" id="repeatpassword" class="form-control valid" aria-invalid="false" placeholder="Enter The Password Once Again">
                                          <span class="text-danger">@error('Repeat Password') {{ $message }}@enderror</span>
                                          <button type="button" class="app-input__show-password" id="show_password" onclick="show()"></button>
                                        </div>
                                        <button type="submit" class="mt-5 btn btn-green">
                                          <span>Set Password</span>
                                        </button>
                                      </form>
                    </div>
                  </div>
                </div>
              </div>
  </div>
  <script>
      function show()
      {
          var x=document.getElementById("repeatpassword");
          if (x.type === "password") {
            x.type = "text";
          }
          else {
            x.type = "password";
          }
      }
</script>
</body>
