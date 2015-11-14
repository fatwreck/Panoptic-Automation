                    <footer>
                        <div class="row">
                            <div class="small-12 columns">
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
<!--                                    <li><a href="#">Login</a></li>-->
                                <img src="<?= $view->getThemePath() ?>/img/logo-panoptic-automations-dark.png" alt="Panoptic Automation" />
                            </div>
                        </div>
                    </footer>
                    <a class="exit-off-canvas"></a>

                    </div>
                </div>
            </div>
        </div>

        <script src="<?= $view->getThemePath() ?>/js/vendor/jquery.js"></script>
        <script src="<?= $view->getThemePath() ?>/js/foundation.min.js"></script>
        <script src="<?= $view->getThemePath() ?>/js/skin-functions.js"></script>
        <script>
          $(document).foundation();
        </script>
        <script src="<?= $view->getThemePath() ?>/js/vendor/slick/slick.min.js"></script>
        <?php Loader::element('footer_required') ?>
    </div>
  </body>
</html>