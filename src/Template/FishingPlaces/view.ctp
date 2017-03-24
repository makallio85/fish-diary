<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fishing Place'), ['action' => 'edit', $fishingPlace->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fishing Place'), ['action' => 'delete', $fishingPlace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlace->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fishing Places'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fishing Place'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fishingPlaces view large-9 medium-8 columns content">
    <h3><?= h($fishingPlace->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($fishingPlace->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fishingPlace->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fishingPlace->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fishingPlace->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Caught Fishes') ?></h4>
        <?php if (!empty($fishingPlace->caught_fishes)): ?>
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
            <?php foreach ($fishingPlace->caught_fishes as $caughtFishes): ?>
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
