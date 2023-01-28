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
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
            height: 100%;
        }

        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        body {
            background: rgb(197, 163, 253);
            /* fallback for old browsers */
            background: linear-gradient(90deg, rgb(213, 192, 247) 0%, rgb(213, 192, 247) 50%);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }



        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: 'Exo', sans-serif;
        }


        .context {
            width: 100%;
            position: absolute;
            top: 50vh;

        }

        .context h1 {
            text-align: center;
            color: #fff;
            font-size: 50px;
        }


        .area {
            background: rgb(213, 192, 247);
            background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
            width: 100%;
            height: 100vh;


        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;

        }

        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }


        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }



        @keyframes animate {

            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }

        }
    </style>


</head>

<body>
    @extends('layout.dashboard')
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div>
            <figure style="margin-left:45%;margin-top:11%" class="snip1336">
                <img src="https://img.freepik.com/premium-vector/abstract-blue-purple-gradient-color-background-website-banner-graphic-design_120819-729.jpg?w=360"
                    alt="sample87" />
                <figcaption>
                    <img src="https://cdn-icons-png.flaticon.com/128/3899/3899618.png" alt="profile-sample4"
                        class="profile" />
                    <h2>{{ session('username') }}<span>{{ session('user_type') }}</span></h2>
                    {{-- <p>Total Books Borrowed:</p> --}}
                    <div class="container">
                        <div class="row">
                            <div class="col-sm" style="margin-left:7%">
                                <label style="opacity:0.8;font-weight:bold" for="books">Name</label>
                            </div>
                            <div class="col-sm" style="margin-left:7%">
                                <label style="opacity:0.8;font-weight:bold" for="books">Adrss</label>
                            </div>
                            <div class="col-sm" style="margin-left:7%">
                                <label style="opacity:0.8;font-weight:bold" for="books">GSM</label>
                            </div>
                            {{-- <div class="col-sm">
                            <a href="#" id="active" name="active"class="info">100</a>
                        </div> --}}
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm" style="margin-left:7%">
                                <label style="opacity:0.8;" for="books">{{ $user->username }}</label>
                            </div>
                            <div class="col-sm" style="margin-left:7%">
                                <label style="opacity:0.8;" for="books">{{ $user->address }}</label>
                            </div>
                            <div class="col-sm" style="margin-left:7%">
                                <label style="opacity:0.8;" for="books">{{ $user->mobile }}</label>
                            </div>
                            {{-- <div class="col-sm">
                            <a href="#" id="books" name="books" class="follow">99</a>
                        </div> --}}
                        </div>
                    </div>
                    <div style="text-align:center">
                        <div class="container">
                            <div class="row">
                                <div class="col-8" style="font-size: 14px;">
                                    Total Books Borrowed: {{ $books }}
                                </div>
                                <div class="col-4">
                                    <a href="/user/borrowed-books" style="btn btn-border-dark;width:100%">view</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </figcaption>
        </div>
        </figure>
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
