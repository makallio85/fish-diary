<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lure Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lureTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($lureType) ?>
    <fieldset>
        <legend><?= __('Add Lure Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
