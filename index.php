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

        .logo {
            margin: auto;
            background-color: #000;
            text-align: center;
            margin-bottom: 2rem
        }
    </style>

    <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" height="64px" viewBox="0 -960 960 960" width="64px" fill="#FFFF55">
            <path
                d="M274-360q-15 0-24.5-9.5T240-394v-66h48v52h84v-192h48v206q0 15-9.5 24.5T386-360H274Zm240 0q-15 0-24.5-9.5T480-394v-46h48v32h104v-53H514q-14 0-24-10t-10-24v-71q0-15 9.5-24.5T514-600h132q15 0 24.5 9.5T680-566v46h-48v-32H528v53h118q14 0 24 10t10 24v71q0 15-9.5 24.5T646-360H514Z" />
        </svg>
    </div>

    <h3 class="title">Listado de apis</h3>

    <select name="api_list" id="apiList">
        <option>seleccionar api</option>
        <option value="broadcast">API Broadcast</option>
        <option value="notification">API Notification</option>
        <option value="workers">API Worker</option>
    </select>

    <div id="container"></div>

    <script type="module" src="./public/js/index.js"></script>
</body>

</html>