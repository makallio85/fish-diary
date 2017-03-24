<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $weatherType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $weatherType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Weather Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="weatherTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($weatherType) ?>
    <fieldset>
        <legend><?= __('Edit Weather Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
