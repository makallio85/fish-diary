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
        ['action' => 'delete', $fishingPlace->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlace->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Fishing Places'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $fishingPlace->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlace->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Fishing Places'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($fishingPlace); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Fishing Place']) ?></legend>
    <?php
    echo $this->Form->control('name');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
