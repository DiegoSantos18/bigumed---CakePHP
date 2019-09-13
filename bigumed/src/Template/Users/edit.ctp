<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Funções de Admin') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar usuário'),
                ['action' => 'delete', $user->usuario_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->usuario_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar nível usuário'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo nível usuário'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Usuário') ?></legend>
        <?php
             echo $this->Form->control('cpf',['disabled'=>'true']);
             echo $this->Form->control('senha');
             echo $this->Form->control('nome_completo');
             echo $this->Form->control('sexo', ['type' => 'radio', 'options' => [['value' => 'M', 'text' => __('Masculino')],['value' => 'F', 'text' => __('Feminino')]]]);
             echo $this->Form->control('roles_id', ['options' => $roles]);
             echo $this->Form->label('[v] para usuário ativo ou [ ] para não ativo');
             echo "<br>";
             echo $this->Form->control('status', ['checked' => 'true']);
             echo $this->Form->control('dt_criacao');
             echo $this->Form->control('dt_modificacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
