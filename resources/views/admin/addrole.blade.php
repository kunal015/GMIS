<html>
    <head>
    <meta charset="utf-8">
        <title>Add Role Page</title>
         <style>
                    tr:nth-child(even) {
                    background-color: white;
                }
                .table-striped tbody tr:nth-child(odd) {
                    background-color: rgba(0,0,0,0.03);
                }
                thead {
                    display: table-header-group;
                    vertical-align: middle;
                    border-color: inherit;
                }
                table.dataTable {
                    clear: both;
                    margin-top: .75rem !important;
                    margin-bottom: .75rem !important;
                    max-width: none !important;
                    border-collapse: separate !important;
                    border-spacing: 0;
                }
                .table-bordered {
                    border: 1px solid #e9ecef;
                }
                thead {
                    display: table-header-group;
                    vertical-align: middle;
                    border-color: inherit;
                }
                tr {
                    display: table-row;
                    vertical-align: inherit;
                    border-color: inherit;
                }
                table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {
                    padding-right: 30px;
                }
                table.table-bordered.dataTable th, table.table-bordered.dataTable td {
                    border-left-width: 0;
                }
                table.dataTable thead .sorting, table.dataTable thead .sorting_asc, table.dataTable thead .sorting_desc, table.dataTable thead .sorting_asc_disabled, table.dataTable thead .sorting_desc_disabled {
                    cursor: pointer;
                    position: relative;
                }
                tbody {
                    display: table-row-group;
                    vertical-align: middle;
                    border-color: inherit;
                }
                table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {
                    border-bottom-width: 0;
                }
                table.table-bordered.dataTable th, table.table-bordered.dataTable td {
                    border-left-width: 0;
                }
                table{
                    margin: 0;
                    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                    font-size: .88rem;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #495057;
                    text-align: left;
                    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                }
                .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
                    background-color:#d1edf2;
                }
                tr:nth-child(even) {
                background-color: white;
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
    </head>
<body>
@extends('master')
@section('content')
<div class="container" style="overflow-x:auto;">
    <section>
    <h1 style="text-align:center;">Role List</h1>
    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
        <?php $flag=0;$flag1=0; ?>
        <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Role Name</th>
                @foreach($permission as $spermission)
                @if($spermission->name=="role_delete")<?php $flag=1; ?><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Operation</th>@endif
                @if($spermission->name=="role_update")<?php $flag1=1; ?><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Operation</th>@endif
                @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach( $roles as $item)
                <tr role="row">
                        <td class="sorting_1 dtr-control" tabindex="0">{{$item['id']}}</td>
                        <td>{{$item['name']}}</td>
                        @if($flag==1)<td><a href={{"deleterole/".$item['id']}} class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the Role?\nNote: Once Deleted the Data Cannot Be Retrieved. ')"><i class="fa fa-trash-alt fa-lg"></i> Delete</a> </td>@endif
                        @if($flag1==1)<td><a href={{"editrole/".$item['id']}} class="btn btn-primary"><i class="fa fa-edit fa-lg"></i> Update</a> </td>@endif
                </tr>
                @endforeach
            </tbody>
    </table>
    </section>
    <br/>
    <section>
        @foreach($permission as $spermission)
        @if($spermission->name=="role_create")
            <form name="frm"  action="{{route('storerole')}}" method="POST">
                @csrf
                <div class="container">
                    <h1>Register</h1>
                    <p>Please fill in this form to create a New Role</p>
                    <hr>
                    <label for="name"><b>Role Name</b></label>
                    <input type="text" placeholder="Enter The Role Name" name="name" value="{{old ('name')}}" required>
                    <span class="text-danger">@error('name') {{ $message }}@enderror</span><br/>
                    <Button class="btn btn-success" onclick="val()" style="width:80px;">Register</Button>
                </div>
            </form>
        @endif
        @endforeach
    </section>
</div>
@endsection('content')
</body>
</html>
