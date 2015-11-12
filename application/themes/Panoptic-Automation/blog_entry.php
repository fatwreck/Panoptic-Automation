<?php include "inc/head-nav-full.php" ;?>
 
<section class="main-section">
    <div class="row">
        <div class="small-12 large-10 columns">
            <div class="row">
                <div class="large-2 columns left-col show-for-large-up"></div>
                <div class="small-12 large-10 columns white-space-right">
                    <?php
                        $a = new Area('Blog Post');
                        $a->display($c);
                    ?>
                </div>
            </div>
        </div>
        <div class="large-2 columns right-col show-for-large-up">
            <?php
               $a = new GlobalArea('Blog Posts');
               $a->display($c);
            ?>
        </div>
    </div>
</section>

<?php include "inc/footer.php"; ?>