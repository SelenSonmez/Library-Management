<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Enter Book</title>
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
    <style>
        .login-page {
            /* width: 360px; */
            margin-right: 10%;
            /* margin: auto; */
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            width: 550px;
            margin: 0 auto 100px;
            padding: 45px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            /* font-family: "Roboto", sans-serif; */
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.24);

        }

        /* .form label {
            text-align: left;
            font-weight: bold;
        } */

        .form button {
            /* font-family: "Roboto", sans-serif; */
            text-transform: uppercase;
            outline: 0;
            background: #e77cea;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);

        }

        .form button:hover,
        .form button:active,
        .form button:focus {
            background: #fa51e9;
        }
    </style>

</head>


<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
    @extends('layout.new-sidebar')
    <div class="content-wrapper">
        {{-- <div class="home"style="text-align:center; margin-top:10%;"> --}}

        <div class="login-page">
            <div class="form">
                <form class="register-form" action="/authorized/insert" method="post">
                    @csrf
                    <h3 style="font-family:Roboto, sans serif"><b>Enter Book </h3>
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required placeholder="title" />
                    <label for="author">Author:</label>
                    <input type="text" name="author" id="author" required placeholder="author" />
                    <label for="year">Year:</label>
                    <input type="text"name="year" id="year" required placeholder="year" />
                    <label for="description">Description:</label>
                    <input type="text"name="description" id="description" placeholder="Description" required />
                    <label for="image">Image:</label>
                    <input type="text"name="image" id="image" placeholder="Image" />
                    {{-- <input style="background-color:#cc92fc;width:50%;margin-left:24% " type="submit" name="submit_book"
                        value="Enter Book"> --}}
                    <button>create</button>
                </form>
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
