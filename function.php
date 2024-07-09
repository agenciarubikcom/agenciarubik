<?php
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    return $protocol . $domainName;
}

$baseUrl = getBaseUrl();

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

function setTitleFromH1($htmlContent, $additionalText) {
    $dom = new DOMDocument();
    @$dom->loadHTML($htmlContent);
    $h1Tags = $dom->getElementsByTagName('h1');
    if ($h1Tags->length > 0) {
        $h1Content = $h1Tags->item(0)->textContent;
        $titleContent = $h1Content . ' | ' .$additionalText;
        $titleTag = $dom->createElement('title', $titleContent);
        $headTags = $dom->getElementsByTagName('head');
        if ($headTags->length > 0) {
            $head = $headTags->item(0);
            $existingTitleTags = $dom->getElementsByTagName('title');
            if ($existingTitleTags->length > 0) {
                $existingTitle = $existingTitleTags->item(0);
                $head->replaceChild($titleTag, $existingTitle);
            } else {
                $head->appendChild($titleTag);
            }
        }
        return $dom->saveHTML();
    } else {
        return $htmlContent;
    }
}
ob_start();
?>