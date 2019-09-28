<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */

//mensagem bem vindo
//echo 'Bem-Vindo '.$this->request->session()->read('Auth.User.nome_completo');

?>
<!--Menu lateral-->
<nav class="large-3 medium-4 columns" id="actions-sidebar" style="background-color:#ADD8E6;">
    <br>
    <a href="#" data-activates="slide-out" class="waves-effect waves-light btn-large button-collapse">MENU<i class="material-icons">menu</i></a>
    <ul id="slide-out" class="side-nav" style="list-style-type: none;">
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion" style="list-style-type: none;">
                <li>
                    <a class="collapsible-header"><?= __('Usuários ') ?><i class="fas fa-user fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Users', 'action' => 'add'], array('class' => 'large material-icons')) ?></li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Users', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Médicos ') ?><i class="fa fa-user-md fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Medicos', 'action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Pacientes ') ?><i class="fas fa-user-injured fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Pacientes', 'action' => 'add'], array('class' => 'large material-icons')) ?></li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Pacientes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Medicamentos ') ?><i class="fas fa-pills fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Medicamentos', 'action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicamentos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Prescrições ') ?><i class="fas fa-file-medical-alt fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Prescricoes', 'action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Prescricoes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <script>
        //script abre e fecha menu
        $(".button-collapse").sideNav();
    </script>
</nav>
<!--Fim Menu lateral-->

<!-- Container Principal Conteúdo-->
<div class="users index large-9 medium-8 columns content homePage">
    <h3><?= __('Usuários') ?></h3>
    <!-- Tabela com Dados-->
    <table cellpadding="0" cellspacing="0" style="opacity: 0.97;background: transparent;">
        <tbody>
            <!--Form filtro-->
            <tr>
                <?= $this->Form->create() ?>
                <td><?= $this->Form->input('cpf', array('label' => '', 'name' => 'cpf')) ?></td>
                <td><?= $this->Form->input('nome_completo', array('label' => '', 'name' => 'nome_completo')) ?></td>
                <td><?= $this->Form->input('roles_id', array('label' => '', 'name' => 'papel', 'type' => 'select', 'options' => $roles)) ?></td>
                <td><?= $this->Form->input('status', array('label' => '', 'name' => 'status', 'type' => 'select', 'options' => array('1' => 'Ativo', '0' => 'Inativo'))) ?></td>
                <td>-</td>
                <td class="actions">
                    <input type="submit" value="search" class="large material-icons filtro" />
                    <input type="reset" value="format_clear" class="large material-icons filtro" />
                </td>
                <?= $this->Form->end() ?>
            </tr>
            <!--Fim form filtro-->
        </tbody>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cpf', array('label' => 'CPF')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_completo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('roles_id', array('label' => 'Papel')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_modificacao', array('label' => 'Ultima Modificação')) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= h($user->cpf) ?></td>
                    <td><?= h($user->nome_completo) ?></td>
                    <td><?= h($user->role->role) ?></td>
                    <td><?= h($user->status ? __('Ativo') : __('Inativo')) ?></td>
                    <td><?= h($user->dt_modificacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('visibility', ['action' => 'view', $user->usuario_id], array('class' => 'large material-icons')) ?>
                        <?= $this->Html->link('edit', ['action' => 'edit', $user->usuario_id], array('class' => 'large material-icons')) ?>
                        <?= $this->Form->postLink(
                                __('delete'),
                                ['action' => 'delete', $user->usuario_id],
                                ['confirm' => __('Você tem certeza que deseja deletar o usuário: {0}?', $user->nome_completo), 'class' => 'large material-icons']
                            ) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Fim Tabela com Dados-->
    <!-- Paginação tela-->
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de total de {{count}}')]) ?></p>
    </div>
    <!-- Fim Paginação tela-->
</div>
<!-- Fim Container Principal Conteúdo-->