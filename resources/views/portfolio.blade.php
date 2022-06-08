<?php echo route('portfolio', ['']); ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Davide Mucci</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 3rem;
            margin-bottom: 5rem;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }


    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class=" title">
            <h2 style="margin-bottom: 0;">Portfolio</h2>
                
            </div>
            <div class="user_info">
            <h3>{{ $name }}</h3>
            <p>
                {{ $job }}
            </p>

            </div>

            <div style="margin-bottom: 4rem;">
                <div class="img-box">
                    <img src='https://picsum.photos/300/200' alt='default img'>
                    <img src='https://picsum.photos/300/200' alt='default img'>
                    <img src='https://picsum.photos/300/200' alt='default img'>
                    <img src='https://picsum.photos/300/200' alt='default img'>

                </div>
                <div class="img-box">
                    <img src='https://picsum.photos/300/200' alt='default img'>
                    <img src='https://picsum.photos/300/200' alt='default img'>
                    <img src='https://picsum.photos/300/200' alt='default img'>
                    <img src='https://picsum.photos/300/200' alt='default img'>

                </div>
            </div>
        </div>
    </div>
</body>

</html>