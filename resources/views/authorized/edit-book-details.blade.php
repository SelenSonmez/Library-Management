<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book Details</title>
    <style>
        .login-page {
            /* width: 360px; */
            padding: 5% 0 0;
            margin: auto;
            height: 50%;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            width: 35%;
            margin: 0 auto 100px;
            padding: 45px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: "Roboto", sans-serif;
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

        .form label {
            text-align: left;
            font-weight: bold;
        }

        .form textarea {
            font-size: 14px;
            width: 100%;
        }

        .form button {
            font-family: "Roboto", sans-serif;
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

<body>
    @extends('layout.dashboard')
    @section('content')
        <div class="login-page">
            <div class="form">
                <div>
                    <form class="register-form" action="/authorized/{{ $book['id'] }}/update-book" method="post">
                        @csrf
                        <label for="name">Title:</label>
                        <input type="text" id="title" name="title" required value="{{ $book['title'] }}"><br><br>
                        <label for="author">Author: </label>
                        <input type="text" id="author" name="author" required value="{{ $book['author'] }}"><br><br>
                        <label for="year">Year: </label>
                        <input type="text" id="year" name="year" required value="{{ $book['year'] }}"><br><br>
                        <label for="description">Description: </label>
                        <textarea type="text" id="description" name="description"rows="5" cols="50" required>{{ $book['description'] }}</textarea><br><br>
                        <label for="image">Image: </label>
                        <input type="text" id="image" name="image" required value="{{ $book['image'] }}"><br><br>
                        <button name="update_book" value="Update Book" class="icon-block">Update Book</button>
                    </form>
                </div>
    </body>

    </html>
