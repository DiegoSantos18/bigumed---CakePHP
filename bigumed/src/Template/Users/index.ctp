<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Funções do Admin') ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar níveis usuário'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novos níveis usuário'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Usuários') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_completo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('roles_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_modificacao') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->usuario_id) ?></td>
                <td><?= h($user->cpf) ?></td>
                <td><?= h($user->nome_completo) ?></td>
                <td><?= h($user->sexo) ?></td>
                <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->roles_id]) : '' ?></td>
                <td><?= h($user->status ? __('Ativo') : __('Inativo')) ?></td>
                <td><?= h($user->dt_criacao) ?></td>
                <td><?= h($user->dt_modificacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->usuario_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->usuario_id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->usuario_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->usuario_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')]) ?></p>
    </div>
</div>
