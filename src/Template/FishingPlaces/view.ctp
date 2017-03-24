<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Fishing Place'), ['action' => 'edit', $fishingPlace->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Fishing Place'), ['action' => 'delete', $fishingPlace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlace->id)]) ?> </li>
<li><?= $this->Html->link(__('List Fishing Places'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fishing Place'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Fishing Place'), ['action' => 'edit', $fishingPlace->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Fishing Place'), ['action' => 'delete', $fishingPlace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlace->id)]) ?> </li>
<li><?= $this->Html->link(__('List Fishing Places'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fishing Place'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($fishingPlace->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($fishingPlace->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($fishingPlace->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($fishingPlace->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($fishingPlace->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related CaughtFishes') ?></h3>
    </div>
    <?php if (!empty($fishingPlace->caught_fishes)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Fish Type Id') ?></th>
                <th><?= __('Fishing Place Id') ?></th>
                <th><?= __('Lure Id') ?></th>
                <th><?= __('Caught Time') ?></th>
                <th><?= __('Released') ?></th>
                <th><?= __('Weight') ?></th>
                <th><?= __('Length') ?></th>
                <th><?= __('Air Pressure') ?></th>
                <th><?= __('Air Temperature') ?></th>
                <th><?= __('Water Temperature') ?></th>
                <th><?= __('Weather Type Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
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
                        <?= $this->Html->link('', ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFishes->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'CaughtFishes', 'action' => 'edit', $caughtFishes->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'CaughtFishes', 'action' => 'delete', $caughtFishes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishes->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related CaughtFishes</p>
    <?php endif; ?>
</div>
