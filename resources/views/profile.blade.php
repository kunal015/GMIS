<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile Page</title>
         <style>
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
        </style>
    </head>
    <body>
    @extends('master')
    @section('content')
        <div class="container" style="overflow-x:auto;">
            <h1 style="text-align:center;">Profile</h1>
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Email</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Role</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Description</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Operation</th>
                @foreach($permission as $singlepermission)
                    @if($singlepermission->name==="user_read")<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Operation</th>@endif
                    @if($singlepermission->name==="user_update")<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Operation</th>@endif
                @endforeach
                </tr>
            </thead>
                <tbody>
                    <tr role="new">
                    <td class="sorting_1 dtr-control" tabindex="0">{{$LoggedUserInfo->name}}</td>
                        <td>{{$LoggedUserInfo->email}}</td>
                        <td>{{$LoggedUserInfo->role}}</td>
                        <td>{{$LoggedUserInfo->desc}}</td>
                        <td><a href="logout">Logout</a></td>
                        @foreach($permission as $singlepermission)
                        @if($singlepermission->name==="user_read")<td><a href="list" class="btn btn-info" style="color:white;"><i class="fa fa-list fa-lg"></i> List </a> </td>@endif
                        @if($singlepermission->name==="user_update")<td><a href={{"edit/".$LoggedUserInfo['id']}} class="btn btn-primary"><i class="fa fa-user-edit fa-lg"></i> Update </a>  </td>@endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection('content')
    </body>
</html>
