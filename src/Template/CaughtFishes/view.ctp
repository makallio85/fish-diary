<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Caught Fish'), ['action' => 'edit', $caughtFish->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Caught Fish'), ['action' => 'delete', $caughtFish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFish->id)]) ?> </li>
<li><?= $this->Html->link(__('List Caught Fishes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Fish Types'), ['controller' => 'FishTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fish Type'), ['controller' => 'FishTypes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Fishing Places'), ['controller' => 'FishingPlaces', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fishing Place'), ['controller' => 'FishingPlaces', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Weather Types'), ['controller' => 'WeatherTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Weather Type'), ['controller' => 'WeatherTypes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Caught Fish Notes'), ['controller' => 'CaughtFishNotes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish Note'), ['controller' => 'CaughtFishNotes', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Caught Fish'), ['action' => 'edit', $caughtFish->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Caught Fish'), ['action' => 'delete', $caughtFish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFish->id)]) ?> </li>
<li><?= $this->Html->link(__('List Caught Fishes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Fish Types'), ['controller' => 'FishTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fish Type'), ['controller' => 'FishTypes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Fishing Places'), ['controller' => 'FishingPlaces', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fishing Place'), ['controller' => 'FishingPlaces', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Weather Types'), ['controller' => 'WeatherTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Weather Type'), ['controller' => 'WeatherTypes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Caught Fish Notes'), ['controller' => 'CaughtFishNotes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish Note'), ['controller' => 'CaughtFishNotes', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($caughtFish->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Fish Type') ?></td>
            <td><?= $caughtFish->has('fish_type') ? $this->Html->link($caughtFish->fish_type->name, ['controller' => 'FishTypes', 'action' => 'view', $caughtFish->fish_type->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Fishing Place') ?></td>
            <td><?= $caughtFish->has('fishing_place') ? $this->Html->link($caughtFish->fishing_place->name, ['controller' => 'FishingPlaces', 'action' => 'view', $caughtFish->fishing_place->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Lure') ?></td>
            <td><?= $caughtFish->has('lure') ? $this->Html->link($caughtFish->lure->name, ['controller' => 'Lures', 'action' => 'view', $caughtFish->lure->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Weather Type') ?></td>
            <td><?= $caughtFish->has('weather_type') ? $this->Html->link($caughtFish->weather_type->name, ['controller' => 'WeatherTypes', 'action' => 'view', $caughtFish->weather_type->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($caughtFish->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Weight') ?></td>
            <td><?= $this->Number->format($caughtFish->weight) ?></td>
        </tr>
        <tr>
            <td><?= __('Length') ?></td>
            <td><?= $this->Number->format($caughtFish->length) ?></td>
        </tr>
        <tr>
            <td><?= __('Air Pressure') ?></td>
            <td><?= $this->Number->format($caughtFish->air_pressure) ?></td>
        </tr>
        <tr>
            <td><?= __('Air Temperature') ?></td>
            <td><?= $this->Number->format($caughtFish->air_temperature) ?></td>
        </tr>
        <tr>
            <td><?= __('Water Temperature') ?></td>
            <td><?= $this->Number->format($caughtFish->water_temperature) ?></td>
        </tr>
        <tr>
            <td><?= __('Caught Time') ?></td>
            <td><?= h($caughtFish->caught_time) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($caughtFish->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($caughtFish->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Released') ?></td>
            <td><?= $caughtFish->released ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related CaughtFishNotes') ?></h3>
    </div>
    <?php if (!empty($caughtFish->caught_fish_notes)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Caught Fish Id') ?></th>
                <th><?= __('Note') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($caughtFish->caught_fish_notes as $caughtFishNotes): ?>
                <tr>
                    <td><?= h($caughtFishNotes->id) ?></td>
                    <td><?= h($caughtFishNotes->caught_fish_id) ?></td>
                    <td><?= h($caughtFishNotes->note) ?></td>
                    <td><?= h($caughtFishNotes->created) ?></td>
                    <td><?= h($caughtFishNotes->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'CaughtFishNotes', 'action' => 'view', $caughtFishNotes->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'CaughtFishNotes', 'action' => 'edit', $caughtFishNotes->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'CaughtFishNotes', 'action' => 'delete', $caughtFishNotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishNotes->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related CaughtFishNotes</p>
    <?php endif; ?>
</div>
