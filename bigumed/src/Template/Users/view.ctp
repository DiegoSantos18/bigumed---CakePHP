<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Funções do Admin') ?></li>
        <li><?= $this->Html->link(__('Editar Usuário'), ['action' => 'edit', $user->usuario_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Usuário'), ['action' => 'delete', $user->usuario_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->usuario_id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Níveis Usuário'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Nível Usuário'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->nome_completo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($user->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Completo') ?></th>
            <td><?= h($user->nome_completo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($user->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->role]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $user->status ? __('Ativo') : __('Inativo'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criação') ?></th>
            <td><?= h($user->dt_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificação') ?></th>
            <td><?= h($user->dt_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $user->status ? __('Ativo') : __('Desativado'); ?></td>
        </tr>
    </table>
</div>
