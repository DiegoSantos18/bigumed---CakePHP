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
                            <li><?= $this->Form->postLink(
                                    __('delete'),
                                    ['action' => 'delete', $user->usuario_id],
                                    ['confirm' => __('Você tem certeza que deseja deletar o usuário: {0}?', $user->nome_completo), 'class' => 'large material-icons']
                                ) ?>
                            </li>
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
<div class="users form large-9 medium-8 columns content homePage">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Usuário') ?></legend>
        <?php
        echo $this->Form->input('cpf', array('label' => 'CPF', 'disabled' => 'true'));
        echo $this->Form->input('nome_completo');
        echo $this->Form->input('sexo', array('label' => 'Selecione o Sexo', 'type' => 'select', 'options' => array('M' => 'Masculino', 'F' => 'Feminino')));
        echo $this->Form->input('roles_id', array('label' => 'Papel', 'type' => 'select', 'options' => $roles));
        echo $this->Form->input('status', array('label' => 'Selecione o Status', 'type' => 'radio', 'options' => array('1' => 'Ativo', '0' => 'Inativo')));
        ?>
    </fieldset>
    <?= $this->Form->button(__('<i class="large material-icons">save</i>')) ?>
    <?= $this->Form->end() ?>
</div>
<!-- Fim Container Principal Conteúdo-->