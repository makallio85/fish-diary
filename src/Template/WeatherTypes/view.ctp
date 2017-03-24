<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Weather Type'), ['action' => 'edit', $weatherType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Weather Type'), ['action' => 'delete', $weatherType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weatherType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Weather Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weather Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="weatherTypes view large-9 medium-8 columns content">
    <h3><?= h($weatherType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($weatherType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($weatherType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($weatherType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($weatherType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Caught Fishes') ?></h4>
        <?php if (!empty($weatherType->caught_fishes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fish Type Id') ?></th>
                <th scope="col"><?= __('Fishing Place Id') ?></th>
                <th scope="col"><?= __('Lure Id') ?></th>
                <th scope="col"><?= __('Caught Time') ?></th>
                <th scope="col"><?= __('Released') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Length') ?></th>
                <th scope="col"><?= __('Air Pressure') ?></th>
                <th scope="col"><?= __('Air Temperature') ?></th>
                <th scope="col"><?= __('Water Temperature') ?></th>
                <th scope="col"><?= __('Weather Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($weatherType->caught_fishes as $caughtFishes): ?>
            <tr>
                <td><?= h($caughtFishes->id) ?></td>
                <td><?= h($caughtFishes->fish_type_id) ?></td>
                <td><?= h($caughtFishes->fishing_place_id) ?></td>
                <td><?= h($caughtFishes->lure_id) ?></td>
                <td><?= h($caughtFishes->caught_time) ?></td>
                <td><?= h($caughtFishes->released) ?></td>
                <td><?= h($caughtFishes->weight) ?></td>
                <td><?= h($caughtFishes->length) ?></td>
                <td><?= h($caughtFishes->air_pressure) ?></td>
                <td><?= h($caughtFishes->air_temperature) ?></td>
                <td><?= h($caughtFishes->water_temperature) ?></td>
                <td><?= h($caughtFishes->weather_type_id) ?></td>
                <td><?= h($caughtFishes->created) ?></td>
                <td><?= h($caughtFishes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFishes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaughtFishes', 'action' => 'edit', $caughtFishes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaughtFishes', 'action' => 'delete', $caughtFishes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
