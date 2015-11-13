<?php defined('C5_EXECUTE') or die("Access Denied."); ?>


<?php
if ($fID > 0) {
    $fo = File::getByID($fID);
   if (!is_object($fo)) {
        unset($fo);
    }
}
?>

<div class="form-group">
    <?php echo $form->label('fID', t('Picture'));?>
    <?php
    $al = Loader::helper('concrete/asset_library');
    print $al->file('ccm-b-file', 'fID', t('Choose File'), $fo);
    ?>
</div>

<div class="form-group">
    <?php echo $form->label('name', t('Name'));?>
    <?php print $form->text('name', $name)?>
</div>

<div class="form-group">
    <?php echo $form->label('position', t('Position'));?>
    <?php print $form->text('position', $position)?>
</div>

<div class="form-group">
    <?php echo $form->label('bio', t('Bio')) ?>
    <?php print $form->textarea('bio', $bio, array('rows' => 5))?>
</div>
