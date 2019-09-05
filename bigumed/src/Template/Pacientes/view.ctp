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
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->paciente_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $paciente->has('usuario') ? $this->Html->link($paciente->usuario->usuario_id, ['controller' => 'Usuarios', 'action' => 'view', $paciente->usuario->usuario_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($paciente->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($paciente->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Convenio') ?></th>
            <td><?= h($paciente->numero_convenio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente Id') ?></th>
            <td><?= $this->Number->format($paciente->paciente_id) ?></td>
        </tr>
    </table>
</div>
