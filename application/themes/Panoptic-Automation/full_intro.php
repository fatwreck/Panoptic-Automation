<?php include "inc/head-nav-full.php" ;?>
                    
<section class="main-section">
    <div class="row">
        <div class="small-12 large-10 columns">
            <div class="row">
                <div class="large-2 columns left-col show-for-large-up"></div>
                <div class="small-12 large-10 columns white-space-right">
                    <?php
                        $a = new Area('Intro Paragraph');
                        $a->display($c);
                    ?>
                </div>
            </div>
            <div class="row hr"><div class="small-12 columns"></div></div>
            <div class="row">
                <div class="small-12 medium-3 large-2 columns about-pics">
                    <?php
                        $a = new Area('Left Small Picture');
                        $a->display($c);
                    ?>
                </div>
                <div class="small-12 medium-7 large-8 columns white-space-right">
                    <?php
                        $a = new Area('Employee Bio');
                        $a->display($c);
                    ?>
                </div>
                <div class="medium-2 large-2 columns show-for-medium-up"></div>
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