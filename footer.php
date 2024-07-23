<footer class="agenciarubik-footer-section main-footer">
  <div class="container">
    <div class="agenciarubik-footer-top">
      <div class="row">
        <div class="col-xl-7 col-lg-12">
        <div class="agenciarubik-footer-title">
            <p><?php echo translate('footer-title', $lang, $translations); ?></p>
            </div>
          <div class="agenciarubik-footer-textarea">
            <p><?php echo translate('hitext', $lang, $translations); ?></p>
          </div>
        </div>

        <div class="col-xl-2 col-md-4">
          <div class="agenciarubik-footer-menu">
            <div class="agenciarubik-footer-title">
              <p><?php echo translate('footer-title1', $lang, $translations); ?></p>
            </div>
            <ul>
              <li><a href=""><?php echo translate('cat-marketingdigital-title', $lang, $translations); ?></a></li>
              <li><a href=""><?php echo translate('cat-soporte-title', $lang, $translations); ?></a></li>
              <li><a href=""><?php echo translate('cat-diseno-title', $lang, $translations); ?></a></li>
              <li><a href=""><?php echo translate('cat-desarrollo-title', $lang, $translations); ?></a></li>
              <li><a href=""><?php echo translate('cat-productos-title', $lang, $translations); ?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="agenciarubik-footer-menu extar-margin">
            <div class="agenciarubik-footer-title">
            <p><?php echo translate('footer-title2', $lang, $translations); ?></p>
            </div>
            <ul>
              <li><a href="">Support</a></li>
              <li><a href="">Privacy policy</a></li>
              <li><a href="">Terms & Conditions</a></li>
              <li><a href="">Strategic finance</a></li>
              <li><a href="">Video guide</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="agenciarubik-footer-bottom">
      <div class="agenciarubik-social-icon order-md-2">
        <ul>
          <li>
            <a href="https://agenciarubik.com/es/index">
              <img src="https://agenciarubik.com/assets/images/icon/flag-ES.png" width="20px" title="Español" alt="Español">
            </a>
          </li>
          <li>
            <a href="https://agenciarubik.com/en/index">
              <img src="https://agenciarubik.com/assets/images/icon/flag-EN.png" width="20px" title="English" alt="English">

            </a>
          </li>
        </ul>
      </div>
      <div class="agenciarubik-copywright">
        <p> &copy;Copyright 2024, All Rights Reserved by Agencia Rubik</p>
      </div>
    </div>

  </div>
</footer>

<!-- scripts -->
<script src="https://agenciarubik.com/assets/js/jquery-3.6.0.min.js"></script>
<script src="https://agenciarubik.com/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://agenciarubik.com/assets/js/menu/menu.js"></script>
<script src="https://agenciarubik.com/assets/js/isotope.pkgd.min.js"></script>
<script src="https://agenciarubik.com/assets/js/jquery.magnific-popup.min.js"></script>
<script src="https://agenciarubik.com/assets/js/slick.js"></script>
<script src="https://agenciarubik.com/assets/js/countdown.js"></script>
<script src="https://agenciarubik.com/assets/js/wow.min.js"></script>
<script src="https://agenciarubik.com/assets/js/faq.js"></script>
<script src="https://agenciarubik.com/assets/js/app.js"></script>
<?php
$htmlContent = ob_get_clean();
$additionalText = "Agencia Rubik";
$updatedHtml = setTitleFromH1AndBreadcrumb($htmlContent, $additionalText);
echo $updatedHtml;
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SWSRLSQ7XK"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-SWSRLSQ7XK');
</script>
</body>

</html>