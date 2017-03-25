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
                ['action' => 'delete', $caughtFishPhoto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishPhoto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Caught Fish Photos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="caughtFishPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($caughtFishPhoto) ?>
    <fieldset>
        <legend><?= __('Edit Caught Fish Photo') ?></legend>
        <?php
            echo $this->Form->control('photo');
            echo $this->Form->control('photo_dir');
            echo $this->Form->control('caught_fish_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
