<html>
    <head>
    <meta charset="utf-8">
        <title>Profile Page</title>
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
        </style>
    </head>
<body>
@extends('master')
@section('content')
<div class="container" style="overflow-x:auto;">
    <h1 style="text-align:center;">Member List</h1>
    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Email</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Role</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Description</th>
                    <?php $flag=0;
                        $flag1=0;
                    ?>
                    @foreach($permission as $singlepermission)
                        @if($singlepermission->name=="user_delete")<?php $flag=1; ?> <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Operation</th>@endif
                        @if($singlepermission->name=="user_update")<?php $flag1=1; ?> <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Operation</th>@endif
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach( $members as $item)
                    <tr role="row">
                        <td class="sorting_1 dtr-control" tabindex="0">{{$item['name']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>{{$item['role']}}</td>
                        <td>{{$item['desc']}}</td>
                        @if($flag==1)<td>@if($data!=$item->id)<a href={{"delete/".$item['id']}} class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the user?\nNote: Once Deleted the Data Cannot Be Retrieved. ')"> <i class="fa fa-user-minus fa-lg"></i> Delete </a> </button>@endif</td>@endif
                        @if($flag1==1)<td><a href={{"edit/".$item['id']}} class="btn btn-primary"><i class="fa fa-user-edit fa-lg"></i> Update </a> </td>@endif
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection('content')
</body>
</html>
