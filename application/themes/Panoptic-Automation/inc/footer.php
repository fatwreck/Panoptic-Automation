                <footer>
                    <div class="row">
                        <div class="small-12 columns">
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Solutions</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Awards and Testimonials</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
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
<!--
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
-->
    <script type="text/javascript" src="<?= $view->getThemePath() ?>/js/vendor/slick/slick.min.js"></script>
    <?=Loader::element('footer_required'); ?>
    </div>
  </body>
</html>