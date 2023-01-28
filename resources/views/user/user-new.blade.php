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
                <li class="breadcrumb-item active">Borrowed Books</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Books
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" style="text-align: center" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> TITLE </th>
                                        <th> AUTHOR </th>
                                        <th> YEAR </th>
                                        <th> STATUS </th>
                                        <th> SCHEDULE </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th> # </th>
                                        <th> TITLE </th>
                                        <th> AUTHOR </th>
                                        <th> YEAR </th>
                                        <th> STATUS </th>
                                        <th> SCHEDULE </th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($books as $data)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td><a href="/{{ $data['id'] }}/book-details">
                                                    {{ $data['title'] }} </a>
                                            </td>
                                            <td> {{ $data['author'] }} </td>
                                            <td> {{ $data['year'] }} </td>
                                            <td>
                                                {{ $data['isTaken'] == 1 ? 'taken untill: ' . $data['reservationDueDate'] : 'available' }}
                                            </td>
                                            <form action="/user/{{ $data['id'] }}/request-book" method="GET">
                                                <td> <input type="date" id="start" name="trip-start"
                                                        value={{ now() }} min="2022-05-10" max="2022-12-31">
                                                    <br> <br>
                                                    @if (!$data['isTaken'])
                                                        <button class="btn border border-dark"
                                                            style="background-color:#cc92fc"> Request
                                                            Book
                                                        </button><br><br>
                                                        @if (Session::has('message'))
                                                            @if (Session::get('bookId') == $data['id'])
                                                                <p>{{ Session::get('message') }}</p>
                                                            @endif
                                                        @endif
                                                    @else
                                                        <p style="color:#69047b">The book is not available for
                                                            borrowing.</p>
                                                    @endif
                                                </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

    </div>
</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js'></script>
<script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/dataTables.bootstrap4.js'></script>
<script src="{{ URL::asset('js/script.js') }}"></script>

</body>

</html>
