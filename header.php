<!DOCTYPE html>
<?php include 'function.php'?>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia Rubik</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/slick.css">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/animate.css">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/main.css">
    <link rel="stylesheet" href="https://agenciarubik.com/assets/css/app.css">
    <meta name="description" content="<?php echo isset($Description) ? $Description : 'Estamos en pleno proceso de renovación de nuestro sitio web. Queremos brindarte una experiencia más rápida, moderna y amigable.<br><br>
    Durante este tiempo, seguimos disponibles para cualquier consulta o asistencia que necesites. No dudes en contactarnos.'; ?>">
    <link rel="shortcut icon" href="https://agenciarubik.com/assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="https://agenciarubik.com/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://agenciarubik.com/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://agenciarubik.com/assets/images/favicon-16x16.png">
    <link rel="manifest" href="https://agenciarubik.com/assets/images/site.webmanifest">
    <link rel="alternate" hreflang="es" href="https://agenciarubik.com/<?php echo isset($URLTitleES) ? $URLTitleES : 'Agencia Rubik'; ?>" />
    <link rel="alternate" hreflang="en" href="https://agenciarubik.com/<?php echo isset($URLTitleEN) ? $URLTitleEN : 'Agencia Rubik'; ?>" />
    <link rel="canonical" href="https://agenciarubik.com/<?php echo isset($URLLink) ? $URLLink : 'https://agenciarubik.com/'; ?>"/>
    </head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div id="yourElement" style="display:none;">HOLA</div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hacer una solicitud a ipinfo.io para obtener la información de IP
            fetch("https://ipinfo.io?token=836d47664a56eb")
                .then(response => response.json())
                .then(data => {
                    // Lista de países permitidos
                    var allowedCountries = ["VE", "BR", "CL", "PE", "AR", "EC", "CO", "US", "UY"];

                    // Comprobar si el país está en la lista de permitidos
                    if (allowedCountries.includes(data.country)) {
                        console.log("El visitante está en un país permitido: " + data.country);
                        // Mostrar el div si está permitido
                        document.getElementById("yourElement").style.display = "block";
                    } else {
                        console.log("El visitante no está en un país permitido: " + data.country);
                    }
                })
                .catch(error => console.error('Error al obtener la geolocalización:', error));
        });
    </script>



<body class="light">
    <div class="agenciarubik-preloader-wrap">
        <div class="agenciarubik-preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>