<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Radio Latacunga</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
            margin: 0;
            padding: 0;
            background-image: url('https://th.bing.com/th/id/R.1e47c22043c76bda4575a23b4d9c203f?rik=VQMLTj83%2ft1tbg&pid=ImgRaw&r=0');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .overlay {
            background: rgba(255, 255, 255, 0.8);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .navigation {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1;
        }

        .navigation a {
            margin-right: 20px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
        }

        .content {
            text-align: center;
            color: #fff;
            margin-top: 70px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
            z-index: 100;
        }

        .social-card {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            width: 250px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .inventory-card {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            width: 500  px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .social-card img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .inventory-card p {
            color: #fff;
            margin: 10px 0;
        }
        .maintenance-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 30px;
            max-width: 800px;
            margin: 0 auto;
        }

        .maintenance-card img {
            width: 40%;
            border-radius: 10px;
            margin-right: 20px;
        }

        .maintenance-card div {
            width: 60%;
        }

        .maintenance-card h2, .maintenance-card p, .maintenance-card ul {
            color: white;
            margin: 0;
        }

        .maintenance-card ul {
            list-style-type: none;
            padding: 0;
        }

        .maintenance-card ul li {
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="overlay"></div>

    <div class="navigation" >
        @if (Route::has('login'))
            <a style="color: black;" href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a style="color: black;" href="{{ route('register') }}">Register</a>
            @endif
        @endif
    </div>

    <div class="content">
        <!-- Información sobre el aplicativo de inventario en una tarjeta negra transparente -->
        <div>
        <div class="maintenance-card" id="mantenimiento">
        <img src="https://scontent.fatf1-1.fna.fbcdn.net/v/t1.6435-9/177399067_3949225881859571_8659605914705335644_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=7a1959&_nc_eui2=AeE2hMXc7pl43uHTC7waDNWQZLPTSbDrMH1ks9NJsOswfU0KmHRRzvF8WIYAZjbN9CZ9isr9BmhlbHsjmyzUOG_4&_nc_ohc=BlDuNaxQKWMAX8J9rWg&_nc_oc=AQmhrbj7AL0kLBWpiSwmaNndPGKYAYVffmg1Npor8gR1vwQ7o2XNdV2yJIYXouPrr9rGcmzU2b6Pne1BQeBAksmF&_nc_ht=scontent.fatf1-1.fna&oh=00_AfCeX5owpNf4dH5EBP-zGLXzOAp5B_F9GzCuq5wi8WUNhg&oe=65D4FF16" alt="Mantenimiento" />
        <div>
            <h2>Aplicativo de Mantenimiento</h2>
            <p>Optimiza tus procesos de mantenimiento con nuestra herramienta especializada.</p>
            <p>Nuestro aplicativo de mantenimiento te permite:</p>
            
                <li>Registrar y programar tareas de mantenimiento preventivo.</li>
                <li>Realizar seguimiento de las actividades de mantenimiento correctivo.</li>
                <li>Controlar el inventario de repuestos y materiales necesarios.</li>
                <li>Generar informes detallados sobre el estado de los equipos y maquinarias.</li>
                <li>Notificaciones automáticas para recordar fechas de mantenimiento.</li>
            
            <p>Mantén tus instalaciones en óptimas condiciones con nuestro aplicativo de mantenimiento fácil de usar y eficiente.</p>
        </div>
</div>

    </div>

        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="card-container">
        <!-- Accesos a redes sociales en una fila -->
        <div class="social-card">
            <a href="https://www.facebook.com/radiolatacunga/" target="_blank">
                <img src="https://img.utdstc.com/icon/fe0/ab6/fe0ab67fa0de2b2681602db5708a076f50dd21106e0c2d38b9661875a37e235e:200" alt="Facebook">
            </a>
            <p style="color: white;">Facebook</p>
        </div>

        <div class="social-card">
            <a href="https://www.instagram.com/radiolatacunga/" target="_blank">
                <img src="https://w7.pngwing.com/pngs/587/616/png-transparent-logo-computer-icons-social-media-advertising-social-media-computer-network-text-photography.png" alt="Instagram">
            </a>
            <p style="color: white;">Instagram</p>
        </div>

        <div class="social-card">
            <a href="https://twitter.com/radiolatacunga" target="_blank">
                <img src="https://www.businessofapps.com/wp-content/uploads/2023/07/twitter-x-e1690183153269.webp" alt="Twitter">
            </a>
            <p style="color: white;">Twitter</p>
        </div>
    </div>
</body>
</html>
