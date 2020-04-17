<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vessel $vessel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vessel->id_vessel],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vessel->id_vessel)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vessels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vessels form large-9 medium-8 columns content">
    <?= $this->Form->create($vessel) ?>
    <fieldset>
        <legend><?= __('Edit Vessel') ?></legend>
        <?php
            echo $this->Form->control('mmsi');
            echo $this->Form->control('callsign');
            echo $this->Form->control('imo');
            echo $this->Form->control('length');
            echo $this->Form->control('width');
            echo $this->Form->control('draught');
            echo $this->Form->control('statuses._ids', ['options' => $statuses]);
            echo $this->Form->control('types._ids', ['options' => $types]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
