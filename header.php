<!DOCTYPE html>
<?php include 'function.php'?>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia Rubik</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/slick.css">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <meta name="description" content="<?php echo isset($Description) ? $Description : 'Estamos en pleno proceso de renovación de nuestro sitio web. Queremos brindarte una experiencia más rápida, moderna y amigable.<br><br>
    Durante este tiempo, seguimos disponibles para cualquier consulta o asistencia que necesites. No dudes en contactarnos.'; ?>">
    <link rel="shortcut icon" href="https://agenciarubik.com/assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="https://agenciarubik.com/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://agenciarubik.com/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://agenciarubik.com/assets/images/favicon-16x16.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="manifest" href="https://agenciarubik.com/assets/images/site.webmanifest">
    <link rel="alternate" hreflang="es" href="https://agenciarubik.com/<?php echo isset($URLTitleES) ? $URLTitleES : 'Agencia Rubik'; ?>" />
    <link rel="alternate" hreflang="en" href="https://agenciarubik.com/<?php echo isset($URLTitleEN) ? $URLTitleEN : 'Agencia Rubik'; ?>" />
    <link rel="canonical" href="https://agenciarubik.com/<?php echo isset($URLLink) ? $URLLink : 'https://agenciarubik.com/'; ?>"/>
    <meta property="og:title" content="Agencia Rubik">
    <meta property="og:description" content="Creamos experiencias digitales únicas con diseño y desarrollo web profesional. Potencia tu presencia en línea con Agencia Rubik.">
    <meta property="og:image" content="https://agenciarubik.com/assets/images/rrss.png">
    <meta property="og:url" content="https://agenciarubik.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Agencia Rubik">
    <meta property="og:locale" content="es_ES">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Agencia Rubik">
    <meta name="twitter:description" content="Creamos experiencias digitales únicas con diseño y desarrollo web profesional. Potencia tu presencia en línea con Agencia Rubik.">
    <meta name="twitter:image" content="https://agenciarubik.com/assets/images/rrss.png">
    <meta name="twitter:url" content="https://agenciarubik.com/">

    </head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <body class="light">
        <!--<div class="agenciarubik-preloader-wrap">
            <div class="agenciarubik-preloader">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>-->
        <div class="container circle">
        <div id="circle">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
    <defs>
        <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
    </defs>
    <circle cx="150" cy="100" r="75" fill="none"/>
    <g>
        <use xlink:href="#circlePath" fill="none"/>
        <text fill="#fff">
            <textPath xlink:href="#circlePath">Experiencias digitales únicas y efectivas</textPath>
        </text>
    </g>
</svg>
</div>
</div>