<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $caughtFishNote->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishNote->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Caught Fish Notes'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $caughtFishNote->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishNote->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Caught Fish Notes'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($caughtFishNote); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Caught Fish Note']) ?></legend>
    <?php
    echo $this->Form->control('caught_fish_id');
    echo $this->Form->control('note');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
