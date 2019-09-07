<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente $paciente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Paciente'), ['action' => 'edit', $paciente->paciente_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Paciente'), ['action' => 'delete', $paciente->paciente_id], ['confirm' => __('Você tem certeza que quer deletar o paciente: {0}?', $paciente->paciente_id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Paciente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->paciente_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('RG') ?></th>
            <td><?= h($paciente->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Número Convênio') ?></th>
            <td><?= h($paciente->numero_convenio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuário') ?></th>
            <td><?= $paciente->has('user') ? $this->Html->link($paciente->user->usuario_id, ['controller' => 'Users', 'action' => 'view', $paciente->user->usuario_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente Id') ?></th>
            <td><?= $this->Number->format($paciente->paciente_id) ?></td>
        </tr>
    </table>
</div>
