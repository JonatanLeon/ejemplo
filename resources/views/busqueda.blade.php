<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            margin-top: 10%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: larger;
        }

        .texto {
            margin: 10px;
            width: 300px;
            height: 30px;
        }

        .botones {
            cursor: pointer;
            font-size: 14px;
            height: 30px;
            width: 120px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <form action="/peliculas" method="post">
    {{ csrf_field() }}
        <input class="texto" type="text" placeholder="Introduce película" name="buscar"/>
        <br>
        <input class="botones" type="submit" value="Buscar" />
    </form>
</body>
</html>