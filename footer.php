<footer class="agenciarubik-footer-section main-footer">
    <div class="container">
      <div class="agenciarubik-footer-top">
        <div class="row">
          <div class="col-xl-4 col-lg-12">
            <div class="agenciarubik-footer-textarea">
              <a href="">
                <img src="assets/images/logo/logo-dark.png" alt="">
              </a>
              <p>We're your innovation partner, delivering cutting-edge solutions that elevate your business to the next level.</p>
              <div class="agenciarubik-subscribe-one">
                <form action="#">
                  <input type="email" placeholder="Email Address">
                  <button class="agenciarubik-default-btn agenciarubik-subscription-btn one" id="agenciarubik-subscription-btn" type="submit">
                    <span>Subscribe</span>
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-4">
            <div class="agenciarubik-footer-menu extar-margin">
              <div class="agenciarubik-footer-title">
                <p>Navigation</p>
              </div>
              <ul>
                <li><a href="">Demos</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Pages</a></li>
                <li><a href="">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-md-4">
            <div class="agenciarubik-footer-menu">
              <div class="agenciarubik-footer-title">
                <p>Utility pages</p>
              </div>
              <ul>
                <li><a href="">Instructions</a></li>
                <li><a href="">Style guide</a></li>
                <li><a href="">Licenses</a></li>
                <li><a href="">404 Not found</a></li>
                <li><a href="">Password protected</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-md-4">
            <div class="agenciarubik-footer-menu extar-margin">
              <div class="agenciarubik-footer-title">
                <p>Resources</p>
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
        <!--<div class="agenciarubik-social-icon order-md-2">
          <ul>
            <li>
              <a href="https://twitter.com/" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://facebook.com/" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/" target="_blank">
                <i class="fab fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="https://github.com/" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
          </ul>
        </div>-->
        <div class="agenciarubik-copywright">
          <p> &copy;Copyright 2024, All Rights Reserved by Agencia Rubik</p>
        </div>
      </div>

    </div>
  </footer>





  <!-- scripts -->
  <script src="<?php echo $baseUrl; ?>/assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?php echo $baseUrl; ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $baseUrl; ?>/assets/js/menu/menu.js"></script>
  <script src="<?php echo $baseUrl; ?>/assets/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo $baseUrl; ?>/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo $baseUrl; ?>/assets/js/slick.js"></script>
  <script src="<?php echo $baseUrl; ?>/assets/js/countdown.js"></script>
  <script src="<?php echo $baseUrl; ?>/assets/js/wow.min.js"></script>
  <script src="<?php echo $baseUrl; ?>/assets/js/faq.js"></script>

  <script src="<?php echo $baseUrl; ?>/assets/js/app.js"></script>
  <?php
    $htmlContent = ob_get_clean();
    $additionalText = "Agencia Rubik";
    $updatedHtml = setTitleFromH1($htmlContent, $additionalText);
    echo $updatedHtml;
  ?>

</body>
</html>