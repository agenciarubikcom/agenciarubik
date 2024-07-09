<!DOCTYPE html>
<?php include 'function.php' ?>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia Rubik</title>
    <meta name="description" content="<?php echo translate('description_default', $lang, $translations); ?>">
    <link rel="shortcut icon" href="<?php echo $baseUrl; ?>/assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $baseUrl; ?>/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $baseUrl; ?>/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $baseUrl; ?>/assets/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $baseUrl; ?>/assets/images/site.webmanifest">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/app.css">
    <link rel="canonical" href="https://agenciarubik.com/es/<?php echo isset($URLTitle) ? $URLTitle : 'Agencia Rubik'; ?>"/>
    <link rel="alternate" hreflang="es" href="https://agenciarubik.com/es/<?php echo isset($URLTitle) ? $URLTitle : 'Agencia Rubik'; ?>" />
    <link rel="alternate" hreflang="en" href="https://agenciarubik.com/en/<?php echo isset($URLTitle) ? $URLTitle : 'Agencia Rubik'; ?>" />


</head>

<body class="light">

    <div class="agenciarubik-preloader-wrap">
        <div class="agenciarubik-preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

<?php include "nav.php" ?>