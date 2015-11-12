<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="ccm-block-testimonial-wrapper">
    <div class="ccm-block-testimonial">
        <?php if ($image): ?>
            <div class="ccm-block-testimonial-image"><?php echo $image?></div>
        <?php endif; ?>

        <div class="ccm-block-testimonial-text">

            <div class="ccm-block-testimonial-name">
                <?php echo h($name)?>
            </div>

            <div class="ccm-block-testimonial-position">
                <?php echo t('%s, <a href="%s">%s</a>', h($position))?>
            </div>

            <div class="ccm-block-testimonial-paragraph"><?php echo h($paragraph)?></div>

        </div>

    </div>
</div>