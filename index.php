<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apis javascript</title>
</head>

<body>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            margin: 0 auto;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #696969ff;
        }

        .title {
            text-align: center;
            letter-spacing: 1px;
        }

        select {
            display: block;
            margin: auto;
            width: 20rem;
            padding: 6px 10px;
            border-radius: 8px;
            border: 1px solid #92C1FC;
            background-color: #fff;
            color: #747373ff;
            font-size: 1rem;
            cursor: pointer;
            line-height: 1.4rem;
            height: 2.4rem;
            /* un poco más alto */
            box-sizing: border-box;
        }

        select:focus {
            border: 2px solid #5B9BD5;
            background-color: #E2EAF4;
        }

        option {
            background-color: #fff;
            color: #333;
        }

        option:checked {
            background-color: #E2EAF4;
            /* Algunos navegadores lo respetan */
            color: #000;
        }
    </style>

    <h3 class="title">Listado de apis</h3>

    <select name="api_list" id="apiList">
        <option value=""></option>
        <option value="broadcast">api broadcast</option>
    </select>

    <div id="container"></div>

    <script type="module" src="./public/js/index.js"></script>
</body>

</html>