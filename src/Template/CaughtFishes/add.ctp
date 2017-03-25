<?php
/**
 * @var \FishDiary\View\AppView $this
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Caught Fishes'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Fish Types'), ['controller' => 'FishTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Fish Type'), ['controller' => 'FishTypes', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Fishing Places'),
            ['controller' => 'FishingPlaces', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Fishing Place'), ['controller' => 'FishingPlaces', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Lure'), ['controller' => 'Lures', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Weather Types'), ['controller' => 'WeatherTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Weather Type'), ['controller' => 'WeatherTypes', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Caught Fish Notes'),
            ['controller' => 'CaughtFishNotes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Caught Fish Note'),
            ['controller' => 'CaughtFishNotes', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($caughtFish, ['type' => 'file']); ?>
<fieldset>
    <?php
    echo $this->Form->control('fish_type_id', ['options' => $fishTypes]);
    echo $this->Form->control('fishing_place_id', ['options' => $fishingPlaces]);
    echo $this->Form->control('lure_id', ['options' => $lures]);
    echo $this->Form->control('caught_time');
    echo $this->Form->control('released');
    echo $this->Form->control('weight');
    echo $this->Form->control('length');
    echo $this->Form->control('air_pressure');
    echo $this->Form->control('air_temperature');
    echo $this->Form->control('water_temperature');
    echo $this->Form->control('weather_type_id', ['options' => $weatherTypes]);
    echo $this->Form->control('photos[]', ['type' => 'file', 'multiple' => true, 'label' => 'Photos']);

    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
