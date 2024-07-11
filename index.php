<?php
$URLTitle = "index";
$EsDescription = "Estamos en pleno proceso de renovación de nuestro sitio web. Queremos brindarte una experiencia más rápida, moderna y amigable.";
$EnDescription = "We are in the process of renewing our website. We want to give you a faster, more modern and friendly experience.";
include 'header.php';
?>

<style>
    .site-menu-main, .agenciarubik-footer-top, .mobile-menu-trigger.light {
        display: none;
    }
    .agenciarubik-section-padding {
        padding: 125px 0 0px;
    }
    .agenciarubik-h1 {
        text-indent: -99999px;
        position: absolute;
    }
</style>

<div class="section agenciarubik-section-padding">
  <div class="container">
    <div class="agenciarubik-section-title center">
      <h1 class="agenciarubik-h1">Innovación y Creatividad en cada Clic</h1>
      <h2 class="rt-mb-20"><?php echo translate('index-title', $lang, $translations); ?></h2>
      <p><?php echo translate('index-description', $lang, $translations); ?></p>
    </div>
  </div>
</div>


<div class="section rt-mb-20">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php include 'formcontact.php'; ?>
      </div>
    </div>
  </div>
</div>

<!-- End section -->


<?php include "footer.php" ?>