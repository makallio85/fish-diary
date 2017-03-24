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
                ['action' => 'delete', $fishingPlaceType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlaceType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fishing Place Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fishingPlaceTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($fishingPlaceType) ?>
    <fieldset>
        <legend><?= __('Edit Fishing Place Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
