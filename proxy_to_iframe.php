<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formData = [
        'lead_firstname' => isset($_POST['name']) ? $_POST['name'] : '',
        'lead_email' => isset($_POST['email']) ? $_POST['email'] : '',
        'lead_custom_field_46' => isset($_POST['subject']) ? $_POST['subject'] : '',
        'lead_custom_field_47' => isset($_POST['comment']) ? $_POST['comment'] : ''
    ];

    $ch = curl_init('https://dash.agenciarubik.com/webform/submit/666228ea562265.55701003');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($formData));
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode == 200) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
