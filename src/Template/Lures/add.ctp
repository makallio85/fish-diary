<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Lures'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Lure Types'), ['controller' => 'LureTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Lure Type'), ['controller' => 'LureTypes', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Lures'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Lure Types'), ['controller' => 'LureTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Lure Type'), ['controller' => 'LureTypes', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($lure); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Lure']) ?></legend>
    <?php
    echo $this->Form->control('lure_type_id', ['options' => $lureTypes]);
    echo $this->Form->control('name');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
