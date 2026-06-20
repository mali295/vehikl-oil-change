<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehikl Oil Change Challenge</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button,
        .button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .due {
            background: #fee2e2;
            color: #991b1b;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .not-due {
            background: #dcfce7;
            color: #166534;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>