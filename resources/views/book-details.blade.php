<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

    <title>Details</title>
    <style>
        .multiline {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>

@extends('layout.dashboard')
@yield('content')

<body style="background-color:rgb(246, 224, 253)">
    <div style="text-align: center">
        <div style="margin-left:8%">
            <img style="width: 15%;box-shadow: 5px 5px rgb(187, 161, 240);margin-top:9%;margin-bottom:5px"
                src={{ $book->image }}>
            <p><b>Title:</b> {{ $book->title }} </p>
            <p><b>Author:</b> {{ $book->author }}</p>
            <p><b>Year:</b> {{ $book->year }}</p>
            <div style="width:40%; margin-left:30%" class="mulitline">
                <p> {{ $book->description }}</p>
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
