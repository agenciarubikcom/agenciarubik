<?php
$schema = [
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => $title = "https://agenciarubik.com/" . $URLTitleES,
  "description" => $description = isset($Description) ? $Description : '',
  "publisher" => [
      "@type" => "Organization",
      "name" => "Agencia Rubik",
      "logo" => [
          "@type" => "ImageObject",
          "url" => "https://agenciarubik.com/assets/images/logo.jpg"
      ]
  ]
];
echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
?>
  <header class="site-header site-header--menu-center agenciarubik-header-section dark-bg white-menu" id="sticky-menu">
    <div class="container">
      <nav class="navbar site-navbar">
        <!-- Brand Logo-->
        <div class="brand-logo">
          <a href="https://agenciarubik.com/es/index">
            <img src="https://agenciarubik.com/assets/images/logo/logo-white.svg" title="Agencia Rubik" alt="Agencia Rubik" class="light-version-logo">
          </a>
        </div>
        <div class="menu-block-wrapper">
          <div class="menu-overlay"></div>
          <nav class="menu-block" id="append-menu-header">
            <div class="mobile-menu-head">
              <div class="go-back">
                <i class="fa fa-angle-left"></i>
              </div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>
            <ul class="site-menu-main">
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger"><?php echo translate('cat-marketingdigital-title', $lang, $translations); ?> <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-1">
                  <li class="sub-menu--item">
                    <a href="email-marketing">
                      <span class="menu-item-text"><?php echo translate('cat-emailmarketing-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <!--<li class="sub-menu--item">
                    <a href="redes-sociales">
                      <span class="menu-item-text"><?php echo translate('cat-redessociales-title', $lang, $translations); ?></span>
                    </a>
                  </li>-->
                  <li class="sub-menu--item">
                    <a href="seo">
                      <span class="menu-item-text"><?php echo translate('cat-seo-title', $lang, $translations); ?></span>
                    </a>
                  </li>

                </ul>
              </li>
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger"><?php echo translate('cat-soporte-title', $lang, $translations); ?> <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-2">
                <li class="sub-menu--item">
                    <a href="soporte-wordpress">
                      <span class="menu-item-text"><?php echo translate('cat-wordpress-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="servidores-aws">
                      <span class="menu-item-text"><?php echo translate('cat-servidoresaws-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="testing">
                      <span class="menu-item-text"><?php echo translate('cat-testing-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger"><?php echo translate('cat-diseno-title', $lang, $translations); ?> <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-3">
                  <li class="sub-menu--item">
                    <a href="rebranding">
                      <span class="menu-item-text"><?php echo translate('cat-rebranding-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="manual-de-marca">
                      <span class="menu-item-text"><?php echo translate('cat-manualdemarca-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="banners-y-redes">
                      <span class="menu-item-text"><?php echo translate('cat-bannersysocial-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="diseno-grafico">
                      <span class="menu-item-text"><?php echo translate('cat-disenografico-title', $lang, $translations); ?></span>
                    </a>
                  </li>

                </ul>
              </li>
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger"><?php echo translate('cat-desarrollo-title', $lang, $translations); ?> <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-4">
                  <li class="sub-menu--item">
                    <a href="landings-pages">
                      <span class="menu-item-text"><?php echo translate('cat-landingpage-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <!--<li class="sub-menu--item">
                    <a href="leads-pages">
                      <span class="menu-item-text"><?php echo translate('cat-leadspage-title', $lang, $translations); ?></span>
                    </a>
                  </li>-->
                  <li class="sub-menu--item">
                    <a href="wordpress">
                      <span class="menu-item-text"><?php echo translate('cat-wordpress-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="desarrollo-web">
                      <span class="menu-item-text"><?php echo translate('cat-desarrolloweb-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger"><?php echo translate('cat-productos-title', $lang, $translations); ?> <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-5">
                  <li class="sub-menu--item">
                    <a href="alojamiento-web">
                      <span class="menu-item-text"><?php echo translate('cat-hosting-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="dominios">
                      <span class="menu-item-text"><?php echo translate('cat-dominios-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="kit-digital">
                      <span class="menu-item-text"><?php echo translate('cat-kitdigital-title', $lang, $translations); ?></span>
                    </a>
                  </li>
                </ul>
              </li>


            </ul>
          </nav>
        </div>

        <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
          <a class="agenciarubik-default-btn agenciarubik-header-btn" href="#contact">
            <span><?php echo translate('btn-contact', $lang, $translations); ?></span>
          </a>
        </div>
        <!-- mobile menu trigger -->
        <div class="mobile-menu-trigger light">
          <span></span>
        </div>
        <!--/.Mobile Menu Hamburger Ends-->
      </nav>
    </div>
  </header>
  <!--End landex-header-section -->