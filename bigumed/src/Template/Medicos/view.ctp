<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico $medico
 */
?>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Médicos') ?></li>
        <li><?= $this->Html->link(__('add'), ['action' => 'add'], array('class' => 'large material-icons')) ?> </li>
        <li><?= $this->Html->link(__('list'), ['action' => 'index'], array('class' => 'large material-icons')) ?></li>
        <li><?= $this->Html->link(__('edit'), ['action' => 'edit', $medico->medico_id], array('class' => 'large material-icons')) ?> </li>
        <li><?= $this->Form->postLink(__('delete'), ['action' => 'delete', $medico->medico_id], array('class' => 'large material-icons'), ['confirm' => __('Você tem certeza que deseja deletar o médico: {0}?', $medico->user->nome_completo)]) ?> </li>
    </ul>
</nav>
<div class="medicos view large-9 medium-8 columns content">
    <h3><?= h($medico->user->nome_completo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($medico->user->cpf) ?></td>
        </tr>
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
