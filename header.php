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
    <link rel="icon" href="<?php echo $baseUrl; ?>/assets/images/favicon.ico" type="image/x-icon">
    <!--- End favicon-->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <!-- End google font  -->

    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/fontawesome.css">


    <!-- Code Editor  -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/app.min.css">
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