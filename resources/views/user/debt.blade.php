<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User New</title>
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

<!-- partial:index.partial.html -->

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
                <li class="breadcrumb-item active">Debts</li>
            </ol>
            <!-- Icon Cards-->
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Debts
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="text-align: center" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr style="text-align: center">
                                    <th> Username </th>
                                    <th> Book </th>
                                    <th> Borrow Expiration Date </th>
                                    <th> Days Passed The Date</th>
                                    <th> Debt</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th> Username </th>
                                    <th> Book </th>
                                    <th> Borrow Expiration Date </th>
                                    <th> Days Passed The Date</th>
                                    <th> Debt</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @for ($i = 0; $i < count($debts); $i++)
                                    <tr style="text-align:center">
                                        <td>{{ $user['username'] }} </td>
                                        @if (!is_null($books_passed))
                                            <td>
                                                {{-- <p>{{ dd($books_passed[$i + 2]->book->title) }}</p> --}}
                                                <a
                                                    href="/{{ $books_passed[$i + 1]->book->id }}/book-details">{{ $books_passed[$i + 1]->book->title }}</a>
                                            </td>
                                            <td>
                                                {{ $books_passed[$i + 1]->book->reservationDueDate }} </td>
                                        @endif
                                        <td>{{ $debts[$i] }} </td>
                                        <td>{{ $debts[$i] * 5 }} </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <div style="text-align:center">
                            <p style="color:#f600ff">For every due date passed 5$ is added to your debt</p>
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
