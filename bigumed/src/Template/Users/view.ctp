<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
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
                            <li><?= $this->Html->link(__('add'), ['action' => 'add'], array('class' => 'large material-icons')) ?></li>
                            <li><?= $this->Html->link(__('list'), ['action' => 'index'], array('class' => 'large material-icons')) ?></li>
                            <li><?= $this->Html->link(__('edit'), ['action' => 'edit', $user->usuario_id], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Form->postLink(__('delete'),['action' => 'delete', $user->usuario_id], array('class' => 'large material-icons'),['confirm' => __('Você tem certeza que deseja deletar o usuário: {0}?', $user->nome_completo)])?></li>
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
<div class="users view large-9 medium-8 columns content homePage">
    <h3><?= h($user->nome_completo) ?></h3>
    <!-- Tabela com Dados-->
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
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
            <th scope="row"><?= __('Papel') ?></th>
            <td><?= h($user->role->role) ?></td>
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
    </table>
    <!-- Fim Tabela com Dados-->
</div>
<!-- Fim Container Principal Conteúdo-->