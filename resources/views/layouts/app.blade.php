
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SweetBite</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #FFF9F2;
            color: #49352A;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        .content {
            min-height: 75vh;
            padding: 35px 0;
        }

        h1, h2, h3 {
            color: #754C38;
        }

        button {
            background-color: #A66B4F;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 7px;
            cursor: pointer;
        }

        button:hover {
            background-color: #805039;
        }

        @media (max-width: 600px) {
            .container {
                width: 94%;
            }
        }
    </style>
</head>

<body>

    @include('components.navbar')

    <main class="container content">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
