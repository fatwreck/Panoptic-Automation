<!doctype html>
<!--[if IE 9]><html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]--> 
  <head>
    <?php Loader::element('header_required') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/foundation.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $view->getThemePath() ?>/js/vendor/slick/slick.css"/>
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/styles.css" />
    <script src="<?= $view->getThemePath() ?>/js/vendor/modernizr.js"></script>
    <script src="<?= $view->getThemePath() ?>/js/vendor/prefixtree.js"></script>  
  </head>
  <body>
    <div class="<?= $c->getPageWrapperClass() ?>">
    <div class="off-canvas-wrap" data-offcanvas="">
        <div class="inner-wrap">
          <nav class="tab-bar">
            <section  id="bgImg" class="navigation-section">
                <div class="row">
                    <div class="large-12 columns">
                        <section class="left tab-bar-section">
                          <a href="/cms/"><img src="<?= $view->getThemePath() ?>/img/Panoptic-Automation-Solutions-Logo.svg" /></a>
                        </section>
                        <nav class="top-bar" data-topbar>
                            <section class="top-bar-section show-for-large-up">
                                <ul class="right main-nav">
                                     <?php 	
                                      $bt = BlockType::getByHandle('autonav');
                                      $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
                                      $bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
                                      $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
                                      $bt->controller->displaySubPages = 'none';  //none', 'all, 'relevant_breadcrumb', 'relevant'          
                                      $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
                                      $bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
                                      $bt->render('view'); // for template 'templates/template_name';
                                    ?>
                                </ul>
                            </section>
                        </nav>
                        <?php
                          $a = new Area('Section Title');
                          $a->display($c);
                        ?>
                        <?php
                          $a = new Area('Descriptive Text');
                          $a->display($c);
                        ?>
                        <?php
                          $a = new Area('Header Link');
                          $a->display($c);
                        ?>
                        <nav>
                            <section class="top-bar-section show-for-large-up sub-nav">
                                <ul class="left">
                                    <?php
                                      $a = new Area('Sub Nav');
                                      $a->display($c);
                                    ?>
                                </ul>
                            </section>
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
<!--
                <?php
                    $a = new GlobalArea('Off-Canvas Nav');
                    $a->display($c);
                ?>
-->
<!--            <li><label>Users</label></li>-->
            <li><a href="/cms/">Home</a></li>
            <li class="has-submenu"><a href="#">Our Services</a>
                <ul class="right-submenu">
                    <li class="back"><a href="#">Back</a></li>
                    <li><label>Our Services</label></li>
                    <li><a href="/cms/our-services/">Overview</a></li>
                    <li><a href="/cms/our-services/electrical-engineering">Electrical Engineering</a></li>
                    <li><a href="/cms/our-services/instrumentation-engineering">Instrumentation Engineering</a></li>
                    <li><a href="/cms/our-services/control-systems">Control Systems</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#">Our Solutions</a>
                <ul class="right-submenu">
                    <li class="back"><a href="#">Back</a></li>
                    <li><label>Our Solutions</label></li>
                    <li><a href="/cms/our-solutions/">Overview</a></li>
                    <li><a href="/cms/our-solutions/optimization">Optimization</a></li>
                    <li><a href="/cms/our-solutions/remote-support-opportunities">Remote Support Opportunities</a></li>
                    <li><a href="/cms/our-solutions/alarm-rationalization">Alarm Rationalization</a></li>
                </ul>
            </li>
            <li><a href="/cms/news">News</a></li>
            <li><a href="/cms/about">About</a></li>
            <li><a href="/cms/careers">Careers</a></li>
            <li><a href="/cms/contact">Contact</a></li>
          </ul>
        </aside>