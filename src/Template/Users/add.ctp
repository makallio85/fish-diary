<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>

<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Add {0}', ['User']) ?></legend>
    <?php
    echo $this->Form->control('username');
    echo $this->Form->control('password');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
