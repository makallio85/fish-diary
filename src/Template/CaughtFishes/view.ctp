<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Caught Fish'), ['action' => 'edit', $caughtFish->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Caught Fish'), ['action' => 'delete', $caughtFish->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFish->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Caught Fishes'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Caught Fish'), ['action' => 'add']) ?> </li>
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
    <li><?= $this->Html->link(__('List Caught Fish Photos'),
            ['controller' => 'CaughtFishPhotos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Caught Fish Photo'),
            ['controller' => 'CaughtFishPhotos', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Place') ?></td>
            <td><?= $caughtFish->has('fishing_place') ? $this->Html->link($caughtFish->fishing_place->name,
                    ['controller' => 'FishingPlaces', 'action' => 'view', $caughtFish->fishing_place->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Lure') ?></td>
            <td><?= $caughtFish->has('lure') ? $this->Html->link($caughtFish->lure->name,
                    ['controller' => 'Lures', 'action' => 'view', $caughtFish->lure->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Weather Type') ?></td>
            <td><?= $caughtFish->has('weather_type') ? $this->Html->link($caughtFish->weather_type->name,
                    ['controller' => 'WeatherTypes', 'action' => 'view', $caughtFish->weather_type->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Air pressure') ?></td>
            <td><?= $caughtFish->air_pressure ?></td>
        </tr>
        <tr>
            <td><?= __('Air temperature') ?></td>
            <td><?= $caughtFish->air_temperature ?></td>
        </tr>
        <tr>
            <td><?= __('Water temperature') ?></td>
            <td><?= $caughtFish->water_temperature ?></td>
        </tr>
        <tr>
            <td><?= __('Time') ?></td>
            <td><?= h($caughtFish->caught_time->format('Y-m-d H:i:s')) ?></td>
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
        <h3 class="panel-title"><?= __('Notes') ?></h3>
    </div>
    <?php if (!empty($caughtFish->caught_fish_notes)): ?>
        <?php foreach ($caughtFish->caught_fish_notes as $caughtFishNotes): ?>
            <p style="margin: 10px"><?= h($caughtFishNotes->created->format('Y-m-d')) ?>: <?= h($caughtFishNotes->note) ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Photos') ?></h3>
    </div>
    <?php if (!empty($caughtFish->caught_fish_photos)): ?>
        <?php foreach ($caughtFish->caught_fish_photos as $caughtFishPhoto): ?>
            <?= $this->Html->image(sprintf('caught-fishes/%s', $caughtFishPhoto->photo),
                ['alt' => '', 'class' => ['img-responsive']]) ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
