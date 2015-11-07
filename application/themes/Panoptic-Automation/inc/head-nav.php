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