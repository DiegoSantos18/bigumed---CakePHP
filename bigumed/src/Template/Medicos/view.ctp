<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico $medico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Médicos') ?></li>
        <li><?= $this->Html->link(__('Listar Médicos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Editar Médico'), ['action' => 'edit', $medico->medico_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Médico'), ['action' => 'delete', $medico->medico_id], ['confirm' => __('Você tem certeza que deseja deletar o médico: {0}?', $medico->medico_id)]) ?> </li>
        <li><?= $this->Html->link(__('Novo Médico'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medicos view large-9 medium-8 columns content">
    <h3><?= h($medico->user->nome_completo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CRM') ?></th>
            <td><?= h($medico->crm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Especialidade') ?></th>
            <td><?= h($medico->especialidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuário') ?></th>
            <td><?= $medico->has('user') ? $this->Html->link($medico->user->nome_completo, ['controller' => 'Users', 'action' => 'view', $medico->user->usuario_id]) : '' ?></td>
        </tr>
    </table>
</div>
