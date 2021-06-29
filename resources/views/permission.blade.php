<html>
    <head>
        <title> Permission Page </title>
        <style>
        </style>
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
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </head>
    <body onLoad="myFunction()">
    @extends('master')
    @section('content')
            <div class="container">
                <form action="{{route('store_role_permission')}}" method="post">
                    @csrf
                    <h1 style="text-align:center;">Select the permission for various users</h1>
                    <div class="row">
                        @foreach( $roles as $role)
                            <div class="col-md-6" style="padding-top:60px;">
                                <h2>{{$role['name']}} Permissions</h2>
                                @foreach( $permissions as $permission1)
                                    <input type="checkbox" name="checkbox[]" value="{{$role['id']}},{{$permission1['id']}}"
                                    <?php
                                        foreach($roles_permissions as $r_p)
                                        {
                                            if(($r_p['role_id']==$role['id'])&&($r_p['permission_id']==$permission1['id']))
                                            {
                                                echo "checked";
                                            }
                                        }
                                    ?>/>
                                    <label for="{{$permission1['name']}}">{{$permission1['name']}} Permission</label><br/>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="col-sm-10 text-center">
                        <input type="submit" class="btn btn-success btn-lg" style="margin-top:40px;width:200px;">
                    </div>
                </form>
            </div>
        @endsection('content')
    </body>
</html>
