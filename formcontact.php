<?php
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formData = [
        'name' => isset($_POST['name']) ? $_POST['name'] : '',
        'email' => isset($_POST['email']) ? $_POST['email'] : '',
        'subject' => isset($_POST['subject']) ? $_POST['subject'] : '',
        'comment' => isset($_POST['comment']) ? $_POST['comment'] : '',
        'datetime' => date('Y-m-d H:i:s'),
        'page' => $_SERVER['PHP_SELF']
    ];

    $json_data = file_exists('form_data.json') ? json_decode(file_get_contents('form_data.json'), true) : [];
    $json_data[] = $formData;
    if (file_put_contents('form_data.json', json_encode($json_data, JSON_PRETTY_PRINT))) {
        $mensaje = translate('form-mensaje-exito', $lang, $translations);
    } else {
        $mensaje = translate('form-mensaje-error', $lang, $translations);
    }

    // Redirigir a una URL intermedia que maneje el envío al iframe
    header('Location: https://agenciarubik.com/send_to_iframe.php?' . http_build_query($formData));
    exit();
}
?>
<iframe id="miIframe" width="650" height="900" src="https://dash.agenciarubik.com/webform/embed/666228ea562265.55701003" frameborder="0" allowfullscreen style="display:none;"></iframe>
<div class="agenciarubik-form-wrap" id="contact">
    <h3><?php echo translate('btn-contact', $lang, $translations); ?></h3>
    <form id="contactForm" action="#contact" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="agenciarubik-main-form">
                        <input type="text" name="name" placeholder="<?php echo translate('form-name', $lang, $translations); ?>*" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="agenciarubik-main-form">
                        <input type="email" name="email" placeholder="<?php echo translate('form-email', $lang, $translations); ?>*" required>
                    </div>
                </div>
            </div>
            <div class="agenciarubik-main-form">
                <input type="text" name="subject" placeholder="<?php echo translate('form-subject', $lang, $translations); ?>">
            </div>
            <div class="agenciarubik-main-form">
                <textarea name="comment" placeholder="<?php echo translate('form-comment', $lang, $translations); ?>"></textarea>
            </div>
            <div class="agenciarubik-main-form d-flex justify-content-between align-items-center flex-column flex-lg-row gap-3">
                <button id="agenciarubik-submit-btn" type="submit"><span><?php echo translate('form-btn', $lang, $translations); ?></span></button>
                <?php if ($mensaje): ?>
                    <div class="mensaje <?php echo strpos($mensaje, 'Error') === false ? '' : 'error'; ?>">
                        <?php echo $mensaje; ?>
                    </div>
                <?php endif; ?>
            </div>
        </form>
</div>
