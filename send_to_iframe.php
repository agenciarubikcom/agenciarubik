<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $formData = [
        'name' => isset($_GET['name']) ? $_GET['name'] : '',
        'email' => isset($_GET['email']) ? $_GET['email'] : '',
        'subject' => isset($_GET['subject']) ? $_GET['subject'] : '',
        'comment' => isset($_GET['comment']) ? $_GET['comment'] : ''
    ];
    $queryString = http_build_query($formData);
    $iframeUrl = "https://dash.agenciarubik.com/webform/submit/666228ea562265.55701003?$queryString";
    header("Location: $iframeUrl");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirigiendo...</title>
</head>
<body>
    <p>Redirigiendo...</p>
</body>
</html>