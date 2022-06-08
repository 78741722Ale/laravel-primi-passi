<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Styles -->
    <style>
        /* Regole */
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        /* Center */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* H1 */
        h1 {
            font-size: 60px;
        }
        /* Container */
        .container {
            width: 100%;
            height: 100%;
        }
        /* Flex Cent */
        .flex_cent {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        ul {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            list-style: none;
        }
        li {
            padding: 1rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Stamp di Hello World -->
    <div class="container bordo flex_cent">
        <h1>Hello World</h1>
        <!-- Dynamic data (no foreach) -->
        <!-- <ul class="bordo">
            <li>il mio nome è : {{$name}}</li>
            <li>il mio cognome è : {{$surname}}</li>
            <li>il mio ruolo è : {{$role}}</li>
        </ul> -->
        <!-- Array Associativo -->
        <ul>
        @foreach ($users as $user)
            <!-- Stampa tutto quello presente nel mio array associativo -->
            <li>{{$user}}</li>
        @endforeach
        </ul>
    </div>
</body>
</html>