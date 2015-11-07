<!doctype html>
<!--[if IE 9]><html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]--> 
  <head>
    <?=Loader::element('header_required'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="<?= $view->getThemePath() ?>/js/vendor/slick/slick.css"/>
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/styles.css" />
    <script src="<?= $view->getThemePath() ?>/js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="<?= $c->getPageWrapperClass() ?>">
    <div class="off-canvas-wrap" data-offcanvas="">
        <div class="inner-wrap">
          <nav class="tab-bar">
            <section  id="bgImg" class="navigation-section home">
                <div class="row">
                    <div class="large-12 columns">
                        <section class="left tab-bar-section">
                          <a href="/"><img src="<?= $view->getThemePath() ?>/img/Panoptic-Automation-Solutions-Logo.svg" /></a>
                        </section>
                        <nav class="top-bar" data-topbar>
                            <section class="top-bar-section show-for-large-up">
                                <ul class="right main-nav">
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="solutions.php">Solutions</a></li>
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="careers.php">Careers</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </section>
                        </nav>
                        <h1>Automation Solutions for<br />Tomorrow's World</h1>
                        <p>Panoptic Automation Solutions is a privatley owned Calgary based consulting firm providing automation, instrumentation and electrical services since 2012.</p>
                        <a href="about.php" class="small radius button light">About Us</a>
                        <nav>
<!--
                        <section class="top-bar-section show-for-large-up sub-nav">
                            <ul class="left">
                                <li class="active"><a href="">Electrical Engineering</a></li>
                                <li><a href="">Instrumentation Engineering</a></li>
                                <li><a href="">Control Systems</a></li>
                                <li><a href="">Design &amp; Drafting</a></li>
                                <li><a href="">Project Management</a></li>
                            </ul>
                        </section>
-->
                      </nav>
                    </div>
                </div>
            </section>
            
            <section class="right-small hide-for-large-up">
              <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
            </section>
        </nav>
        
        <aside class="right-off-canvas-menu">
          <ul class="off-canvas-list">
            <li><label>Users</label></li>
            <li><a href="#">Hari Seldon</a></li>
            <li class="has-submenu"><a href="#">R. Giskard Reventlov</a>
                <ul class="right-submenu">
                    <li class="back"><a href="#">Back</a></li>
                    <li><label>Level 1</label></li>
                    <li><a href="#">Link 1</a></li>
                    <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                        <ul class="right-submenu">
                            <li class="back"><a href="#">Back</a></li>
                            <li><label>Level 2</label></li>
                            <li><a href="#">...</a></li>
                        </ul>
                    </li>
                    <li><a href="#">...</a></li>
                </ul>
            </li>
            <li><a href="#">...</a></li>
          </ul>
        </aside>      