<?php
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    return $protocol . $domainName;
}

function getPreferredLanguage($availableLangs, $default = 'en') {
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

$baseUrl = getBaseUrl();
header("Location: $baseUrl/$lang/");
exit();
?>