<?php
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    return $protocol . $domainName;
}

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

// Redirigir si no se ha especificado un idioma en la URL
$uri = $_SERVER['REQUEST_URI'];
if (!preg_match('/^\/(en|es)\//', $uri)) {
    $baseUrl = getBaseUrl();
    header("Location: $baseUrl/$lang/");
    exit();
}

$translations = include(__DIR__ . '/translations.php');
if (!is_array($translations)) {
    die('Error: Archivo de traducción no válido.');
}

function translate($key, $lang, $translations) {
    $langKey = $lang . '_' . $key;
    return isset($translations[$langKey]) ? $translations[$langKey] : (isset($translations['en_' . $key]) ? $translations['en_' . $key] : 'Translation not found');
}

function setTitleFromH1AndBreadcrumb($htmlContent, $additionalText) {
    $dom = new DOMDocument();
    @$dom->loadHTML($htmlContent);

    $titleContent = '';

    // Capturar contenido del <h1>
    $h1Tags = $dom->getElementsByTagName('h1');
    if ($h1Tags->length > 0) {
        $h1Content = $h1Tags->item(0)->textContent;
        $titleContent = $h1Content;
    }

    // Capturar contenido del <li aria-current="page">
    $xpath = new DOMXPath($dom);
    $breadcrumbNode = $xpath->query("//li[@aria-current='page']");
    if ($breadcrumbNode->length > 0) {
        $breadcrumbContent = $breadcrumbNode->item(0)->textContent;
        if (!empty($titleContent)) {
            $titleContent .= ' | ' . $breadcrumbContent;
        } else {
            $titleContent = $breadcrumbContent;
        }
    }

    // Añadir texto adicional
    if (!empty($titleContent)) {
        $titleContent .= ' | ' . $additionalText;
    }

    // Crear y/o actualizar el <title>
    if (!empty($titleContent)) {
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
    }

    return $dom->saveHTML();
}
ob_start();
?>