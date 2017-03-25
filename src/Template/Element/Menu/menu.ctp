<li><?= $this->Html->link(__('Caught fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?></li>

<li><?= $this->Html->link(__('Add caught fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?></li>

<li class="hidden-xs hidden-sm">
    <?= $this->Html->link(__('List Fish Types'), ['controller' => 'FishTypes', 'action' => 'index']) ?>
</li>

<li><?= $this->Html->link(__('Add fish type'), ['controller' => 'FishTypes', 'action' => 'add']) ?> </li>

<li class="hidden-xs hidden-sm">
    <?= $this->Html->link(__('List Fishing Places'), ['controller' => 'FishingPlaces', 'action' => 'index']) ?>
</li>

<li><?= $this->Html->link(__('Add fishing place'), ['controller' => 'FishingPlaces', 'action' => 'add']) ?> </li>

<li class="hidden-xs hidden-sm">
    <?= $this->Html->link(__('List Lures'), ['controller' => 'Lures', 'action' => 'index']) ?>
</li>

<li><?= $this->Html->link(__('Add lure'), ['controller' => 'Lures', 'action' => 'add']) ?> </li>

<li class="hidden-xs hidden-sm">
    <?= $this->Html->link(__('List Weather Types'), ['controller' => 'WeatherTypes', 'action' => 'index']) ?>
</li>

<li class="hidden-xs hidden-sm">
    <?= $this->Html->link(__('New Weather Type'), ['controller' => 'WeatherTypes', 'action' => 'add']) ?>
</li>