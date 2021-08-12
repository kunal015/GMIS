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
        <div class="container" style="overflow-x:auto;">
            <h1 style="text-align:center;">Profile</h1>
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 126.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Email</th>
                </tr>
            </thead>
                <tbody>
                    <tr role="new">
                    <td class="sorting_1 dtr-control" tabindex="0">{{$LoggedUserInfo->full_name}}</td>
                        <td>{{$LoggedUserInfo->email}}</td>
                        <td><a href={{route('studentlogout')}} class="btn btn-secondary" style="color:white;"><i class="fa fa-sign-out-alt fa-lg"></i> Logout</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
