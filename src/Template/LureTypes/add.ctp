<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Lure Types'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($lureType); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Lure Type']) ?></legend>
    <?php
    echo $this->Form->control('name');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
