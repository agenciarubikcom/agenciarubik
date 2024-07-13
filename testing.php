<?php
$URLTitle = "testing";
$EsDescription = "Análisis y diseño de pruebas que transforman tu visión en experiencias impecables";
$EnDescription = "Analysis and design of tests that transform your vision into impeccable experiences";
include 'header.php';
?>

<div class="agenciarubik-breadcrumb">
  <div class="container">
    <h1 class="post__title"><?php echo translate('cat-testing-title', $lang, $translations); ?></h1>
    <nav class="breadcrumbs">
      <ul>
        <li aria-current="page"><?php echo translate('cat-soporte-title', $lang, $translations); ?></li>
      </ul>
    </nav>

  </div>
</div>
<!-- End breadcrumb -->



<div class="section agenciarubik-section-padding2">
<div class="container">
  <div class="row align-items-center">
  <div class="col-lg-6">
      <div class="agenciarubik-default-content m-left">
      <h2 class="rt-mb-20"><?php echo translate('soporte-testing-title', $lang, $translations); ?></h2>
      <p><?php echo translate('soporte-testing-textline', $lang, $translations); ?></p>
        <p><?php echo translate('soporte-testing-textline2', $lang, $translations); ?></p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="agenciarubik-v3-thumb">
        <img src="https://agenciarubik.com/assets/images/testing.svg" alt="Testing">
      </div>
    </div>

  </div>
</div>
</div>
<div class="section agenciarubik-section-padding2">
  <div class="container">
    <div class="agenciarubik-section-title center w-large">
      <h2><?php echo translate('soporte-testing-textline3', $lang, $translations); ?></h2>
    </div>
    <div class="agenciarubik-team-skill-wrap">
      <div class="agenciarubik-team-skill">
        <h3><?php echo translate('soporte-testing-item1', $lang, $translations); ?></h3>
        <p><?php echo translate('soporte-testing-item1info', $lang, $translations); ?></p>
      </div>
      <div class="agenciarubik-team-skill">
        <h3><?php echo translate('soporte-testing-item2', $lang, $translations); ?></h3>
        <p><?php echo translate('soporte-testing-item2info', $lang, $translations); ?></p>
      </div>
      <div class="agenciarubik-team-skill">
        <h3><?php echo translate('soporte-testing-item3', $lang, $translations); ?></h3>
        <p><?php echo translate('soporte-testing-item3info', $lang, $translations); ?></p>
      </div>

      <div class="agenciarubik-team-skill">
        <h3><?php echo translate('soporte-testing-item4', $lang, $translations); ?></h3>
        <p><?php echo translate('soporte-testing-item4info', $lang, $translations); ?></p>
      </div>

      <div class="agenciarubik-team-skill">
        <h3><?php echo translate('soporte-testing-item5', $lang, $translations); ?></h3>
        <p><?php echo translate('soporte-testing-item5info', $lang, $translations); ?></p>
      </div>

      <div class="agenciarubik-team-skill">
        <h3><?php echo translate('soporte-testing-item6', $lang, $translations); ?></h3>
        <p><?php echo translate('soporte-testing-item6info', $lang, $translations); ?></p>
      </div>

    </div>
  </div>
</div>


<div class="section agenciarubik-section-padding5">
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