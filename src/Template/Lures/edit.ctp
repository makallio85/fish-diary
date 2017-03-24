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
                ['action' => 'delete', $lure->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lure->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lure Types'), ['controller' => 'LureTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lure Type'), ['controller' => 'LureTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lures form large-9 medium-8 columns content">
    <?= $this->Form->create($lure) ?>
    <fieldset>
        <legend><?= __('Edit Lure') ?></legend>
        <?php
            echo $this->Form->control('lure_type_id', ['options' => $lureTypes]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
