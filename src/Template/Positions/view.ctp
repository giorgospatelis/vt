<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Position'), ['action' => 'edit', $position->id_position]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Position'), ['action' => 'delete', $position->id_position], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id_position)]) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="positions view large-9 medium-8 columns content">
    <h3><?= h($position->id_position) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Position') ?></th>
            <td><?= $this->Number->format($position->id_position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Vessel') ?></th>
            <td><?= $this->Number->format($position->id_vessel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lat') ?></th>
            <td><?= $this->Number->format($position->lat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lon') ?></th>
            <td><?= $this->Number->format($position->lon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Heading') ?></th>
            <td><?= $this->Number->format($position->heading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $this->Number->format($position->course) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Speed') ?></th>
            <td><?= $this->Number->format($position->speed) ?></td>
        </tr>
    </table>
</div>
