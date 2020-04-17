<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="positions form large-9 medium-8 columns content">
    <?= $this->Form->create($position) ?>
    <fieldset>
        <legend><?= __('Add Position') ?></legend>
        <?php
            echo $this->Form->control('id_vessel');
            echo $this->Form->control('lat');
            echo $this->Form->control('lon');
            echo $this->Form->control('heading');
            echo $this->Form->control('course');
            echo $this->Form->control('speed');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
