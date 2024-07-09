<!DOCTYPE html>
<?php
function getPreferredLanguage($availableLangs, $default = 'en') {
    // Detectar el idioma basado en la URL
    $uri = $_SERVER['REQUEST_URI'];
    $segments = explode('/', trim($uri, '/'));

    if (isset($segments[0]) && in_array($segments[0], $availableLangs)) {
        return $segments[0];
    }

    // Mantener la detección por URL y navegador como respaldo
    if (isset($_GET['lang']) && in_array($_GET['lang'], $availableLangs)) {
        return $_GET['lang'];
    }
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        foreach ($langs as $lang) {
            $lang = substr($lang, 0, 2);
            if (in_array($lang, $availableLangs)) {
                return $lang;
            }
        }
    }
    return $default;
}

$availableLangs = ['en', 'es']; // Agrega aquí todos los idiomas disponibles
$lang = getPreferredLanguage($availableLangs);

$translations = include(__DIR__ . '/assets/translations.php');
if (!is_array($translations)) {
    die('Error: Archivo de traducción no válido.');
}

function translate($key, $lang, $translations) {
    $langKey = $lang . '_' . $key;
    return isset($translations[$langKey]) ? $translations[$langKey] : (isset($translations['en_' . $key]) ? $translations['en_' . $key] : 'Translation not found');
}
?>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia Rubik</title>
    <meta name="description" content="<?php echo translate('description_default', $lang, $translations); ?>">

    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!--- End favicon-->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <!-- End google font  -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">


    <!-- Code Editor  -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/app.min.css">
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