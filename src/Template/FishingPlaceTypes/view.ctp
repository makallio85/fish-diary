<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fishing Place Type'), ['action' => 'edit', $fishingPlaceType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fishing Place Type'), ['action' => 'delete', $fishingPlaceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlaceType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fishing Place Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fishing Place Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fishingPlaceTypes view large-9 medium-8 columns content">
    <h3><?= h($fishingPlaceType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($fishingPlaceType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fishingPlaceType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fishingPlaceType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fishingPlaceType->modified) ?></td>
        </tr>
    </table>
</div>
