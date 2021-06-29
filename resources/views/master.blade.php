<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.live-topbar {
    height: 82px;
    background: #252733;
    background-color: #8950e1;
    transition: background-color 0.2s ease;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
    color: #fff;
    border-bottom: #fff solid 2px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0 0 0 1.6666666667rem;
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1;
    background-image: linear-gradient(
    90deg
    , #8950e1, #40c4c1);
}
.dashpack-header-sm {
    width: 42px;
    height: 42px;
    line-height: 42px;
    text-align: center;
    display: block;
    font-weight: 400;
    font-size: 1.7rem;
    color: rgba(255, 255, 255, .7);
    border-radius: .25rem;
}
.theme-options-vis {
    opacity: 1;
    visibility: visible;
    position: static;
}
.ml-auto, .mx-auto {
    margin-left: auto !important;
    margin-right:40px;
}
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  background-color:#7fc4c3;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 10px 10px 8px 15px;
  text-decoration: none;
  font-size: 22px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 30px;
  margin-left: 50px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.sidenav-link.active,
.sidenav-link:active,
.sidenav-link:target,
.sidenav-link:focus,
.sidenav-link:hover{
  background: #e2e8ed;
  color: grey !important;
  text-decoration: none;
}
#contents {
    padding-bottom: 100px;
    padding-left:300px;
}
#page-container {
  position: relative;
  min-height: 92.5vh;
}
.sidenav.active .a{
    background: #e2e8ed;
    color: grey !important;
    text-decoration: none;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
}
.live{
    height: 82px;
    background: #252733;
    width:100%;
    background-color: #8950e1;
    transition: background-color 0.2s ease;
    color: #fff;
    border-bottom: #fff solid 2px;
    z-index: 1;
    background-image: linear-gradient(
    90deg
    , #8950e1, #40c4c1);
}
</style>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script>
            function myFunction()
            {
                @if(Session()->has('success'))
                {
                    alert('{{Session::get('success')}}');
                }
                @endif
                @if(Session()->has('fail'))
                {
                    alert('{{Session::get('fail')}}');
                }
                @endif
            }
            window.onload = myFunction();
        </script>
</head>
<body>
<div class="live-topbar">
  <span class="dashpack-header-sm" style="font-size:30px;cursor:pointer;margin-bottom:20px;text-decoration:none;background-image: linear-gradient(135deg, #667eea 0, #764ba2 100%);"
    onclick="openNav()"><b>&#9776;</b></span>
    <a class="dashpack-header-sm ml-auto" href="profile" title="" ><img src="https://lifevitae.co/assets/img/logo.svg" style="height:30px;" alt="image">
    </a>
  <div class="theme-options theme-options-vis ml-auto">
    <a class="btn btn-warning" href="profile" data-toggle="tooltip" title="" data-original-title="View Details">HOME
        <i class="fa fa-home fa-lg"></i>
    </a>
    <a class="btn btn-warning" href="logout" data-toggle="tooltip" title="" data-original-title="View Details">LOGOUT
        <i class="fa fa-sign-out-alt fa-lg"></i>
    </a>
  </div>
</div>
<br/><br/><br/>
    <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</span>
                <a href={{"profile"}} class="sidenav-link text-muted"><i class="fas fa-home fa-fw"></i> Home </a>
                @foreach($permission as $singlepermission)
                    @if($singlepermission->name==="user_read")<a href={{"list"}} id="list" class="sidenav-link text-muted"><i class="fa fa-list fa-lg"></i> List All Existing Users </a>@endif
                    @if($singlepermission->name==="user_create")<a href={{"register"}}  class="sidenav-link text-muted"><i class="fa fa-user fa-lg"></i> Create A New User </a>@endif
                    @if($singlepermission->name=="role_permission_update")<a href={{"permission"}} id="permission" class="sidenav-link text-muted">Roles and Permission </a>@endif
                    @if($singlepermission->name=="permission_read")<a href={{"addpermission"}} id="addpermission" class="sidenav-link text-muted"> Add or Delete Permissions </a>@endif
                    @if($singlepermission->name=="role_read")<a href={{"addrole"}} id="addrole" class="sidenav-link text-muted">Add or Delete Roles</a>@endif
                @endforeach
                <a href="logout" class="sidenav-link text-muted">Logout <i class="fa fa-sign-out-alt fa-lg"></i></a>
    </div>
<div id="page-container">
    <div id="contents" style="padding-top:60px;position:relative;">
    @yield('content')
    </div>
    <div class="footer live ml-auto">
        <p style="text-align:center;">Copyright © 2021 lifevitae.com. All rights reserved.</p>
    </div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  var width = Math.max(window.screen.width);
  if(width>1020)
  {
    document.getElementById("contents").style.paddingLeft="300px";
    console.log(width);
  }
  else
  {
    document.getElementById("contents").style.paddingleft="0px";
  }

}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0px";
  document.getElementById("contents").style.paddingLeft="0px";
}
</script>
<script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;
        // passes on every "a" tag
        $(".sidenav a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("a").addClass("active");
            }
            else if(url.includes("http://127.0.0.1:8000/editpermission"))
            {
                $("#addpermission").closest("a").addClass("active");
            }
            else if(url.includes("http://127.0.0.1:8000/editrole"))
            {
                $("#addrole").closest("a").addClass("active");
            }
            else if((url.includes("http://127.0.0.1:8000/edit")) && !(url.includes("http://127.0.0.1:8000/editrole")) && !(url.includes("http://127.0.0.1:8000/edipermission")) )
            {
                $("#list").closest("a").addClass("active");
            }
        });
    });
</script>
</body>
</html>
