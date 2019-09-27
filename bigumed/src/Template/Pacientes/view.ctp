<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente $paciente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paciente'), ['action' => 'edit', $paciente->paciente_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paciente'), ['action' => 'delete', $paciente->paciente_id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->paciente_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->paciente_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($paciente->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Convenio') ?></th>
            <td><?= h($paciente->numero_convenio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $paciente->has('user') ? $this->Html->link($paciente->user->nome_completo, ['controller' => 'Users', 'action' => 'view', $paciente->user->usuario_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente Id') ?></th>
            <td><?= $this->Number->format($paciente->paciente_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nascimento') ?></th>
            <td><?= h($paciente->data_nascimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Gravida') ?></th>
            <td><?= $paciente->status_gravida ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
