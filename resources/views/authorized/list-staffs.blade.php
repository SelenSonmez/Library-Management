<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

</head>

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
    @extends('layout.dashboard')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Library</a>
                </li>
                <li class="breadcrumb-item active">Staff List</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Staff List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" style="text-align: center" id="dataTable">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> USERNAME </th>
                                        <th> ADDRESS </th>
                                        <th> MOBILE </th>
                                        <th> PROCESS </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th> # </th>
                                        <th> USERNAME </th>
                                        <th> ADDRESS </th>
                                        <th> MOBILE </th>
                                        <th> PROCESS </th>
                                    </tr>
                                </tfoot>
                                @foreach ($staffs as $data)
                                    <tr style="text-align:center">
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $data['username'] }} </td>
                                        <td> {{ $data['address'] }} </td>
                                        <td> {{ $data['mobile'] }} </td>
                                        <td>
                                            <a href="/authorized/{{ $data['id'] }}/removeStaff"
                                                class="btn border border-dark" style="background-color:#cc92fc">
                                                Remove
                                                Staff
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
    </div>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js'></script>
<script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/dataTables.bootstrap4.js'></script>
<script src="{{ URL::asset('js/script.js') }}"></script>

</html>
