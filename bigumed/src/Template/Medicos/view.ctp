<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico $medico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medico'), ['action' => 'edit', $medico->medico_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medico'), ['action' => 'delete', $medico->medico_id], ['confirm' => __('Are you sure you want to delete # {0}?', $medico->medico_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medicos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medicos view large-9 medium-8 columns content">
    <h3><?= h($medico->medico_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Crm') ?></th>
            <td><?= h($medico->crm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Especialidade') ?></th>
            <td><?= h($medico->especialidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $medico->has('user') ? $this->Html->link($medico->user->usuario_id, ['controller' => 'Users', 'action' => 'view', $medico->user->usuario_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medico Id') ?></th>
            <td><?= $this->Number->format($medico->medico_id) ?></td>
        </tr>
    </table>
</div>
