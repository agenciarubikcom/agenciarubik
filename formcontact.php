<div class="agenciarubik-form-wrap">
    <h3><?php echo translate('btn-contact', $lang, $translations); ?></h3>
    <form action="#">
        <div class="row">
            <div class="col-lg-6">
                <div class="agenciarubik-main-form">
                    <input type="text" placeholder="<?php echo translate('form-name', $lang, $translations); ?>*">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="agenciarubik-main-form">
                    <input type="email" placeholder="<?php echo translate('form-email', $lang, $translations); ?>*">
                </div>
            </div>
        </div>
        <div class="agenciarubik-main-form">
            <input type="text" placeholder="<?php echo translate('form-subject', $lang, $translations); ?>">
        </div>
        <div class="agenciarubik-main-form">
            <textarea name="textarea" placeholder="<?php echo translate('form-comment', $lang, $translations); ?>"></textarea>
        </div>
        <button id="agenciarubik-submit-btn" type="button"><span><?php echo translate('form-btn', $lang, $translations); ?></span></button>
    </form>
</div>