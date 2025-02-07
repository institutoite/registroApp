{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: auto;
        }
        h1 {
            color: #27ae60;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        .socials {
            margin-top: 20px;
        }
        .socials a {
            display: inline-block;
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
            color: #3498db;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✅ ¡Ya estás registrado!</h1>
        <p>Gracias por unirte. No olvides seguirnos en nuestras redes sociales:</p>
        <div class="socials">
            <a href="https://facebook.com" target="_blank">📘 Facebook</a>
            <a href="https://instagram.com" target="_blank">📷 Instagram</a>
            <a href="https://twitter.com" target="_blank">🐦 Twitter</a>
        </div>
    </div>
</body>
</html> --}}



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    background-color: #26baa5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Contenedor principal */
.container {
    text-align: center;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

/* Título */
h1 {
    font-size: 24px;
    color: green;
    margin-bottom: 20px;
}

/* Párrafo */
p {
    font-size: 16px;
    color: #666666;
    margin-bottom: 30px;
}

/* Enlaces de redes sociales */
.social-links {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.social-link {
    text-decoration: none;
    color: #ffffff;
    background-color: #26baa5;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 25px;
    transition: background-color 0.3s ease;
}

.social-link:hover {
    background-color: rgb(55,95,122);
}
    </style>
    <link rel="stylesheet" href="{{ asset('colorib/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
    <div class="container">
        <h1>¡Ya estás registrado!</h1>
        <p>Gracias por unirte a nosotros. No te olvides de seguirnos en nuestras redes sociales para estar al tanto de las últimas novedades.</p>
        <div class="social-links">
            <a href="https://www.facebook.com/ite.educabol" target="_blank" class="social-link"><i class="zmdi zmdi-facebook"></i></a>
            <a href="https://www.tiktok.com/@ite_educabol" target="_blank" class="social-link"><i class="fa-brands fa-tiktok"></i></a>
            <a href="https://www.instagram.com/ite.educabol/" target="_blank" class="social-link"><i class="zmdi zmdi-instagram"></i></a>
            <a href="https://www.youtube.com/@ite_educabol" target="_blank" class="social-link"><i class="zmdi zmdi-youtube"></i></a>
        </div>
    </div>
</body>
</html>