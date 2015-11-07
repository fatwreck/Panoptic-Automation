<?php include "inc/head-nav.php" ;?>

            <h1>Our Services</h1>
            <div class="row">
                <div class="small-12 columns">
                    <p>Panoptic Automation Solutions Engineering Department undertakes all projects with an emphasis on quality and maintaining both schedule and budget to meet our customer’s needs.</p>
                </div>
            </div>
                    
<?php include "inc/main-nav-off-canvas.php" ;?>

            <section class="main-section">
<div class="row">
        <div class="small-12 large-10 columns">
            <div class="row">
                <div class="large-2 columns left-col show-for-large-up"></div>
                <div class="small-12 large-10 columns white-space-right">
                  <?php
                      $a = new Area('Content Body Text');
                      $a->display($c);
                  ?>
                </div>
            </div>
        </div>
        <div class="large-2 columns right-col show-for-large-up">
            <?php
               $a = new GlobalArea('Call Out Services');
               $a->display($c);
            ?>
        </div>
    </div>                
            </section>

<?php include "inc/footer.php"; ?>