<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-secondary">
            <div class="container text-dark">
                <div class="container mt-5 pt-5">
                    <div class="text-center mt-5 pt-5">
                        <h1>Bible Study Request</h>
                    </div>

                    <div class="container text-center d-flex justify-content-center">
                        <div class="row text-center">
                            <div class="col"> 
                                <a class="ml-5" href="/bible-study-request">
                                        <button class="btn-lg btn- dark">Show Requests</button>
                                </a>

                                <a class="ml-5" href="/bible-study-request-form">
                                    <button class= "btn-lg btn- dark">Request a Bible Study</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
