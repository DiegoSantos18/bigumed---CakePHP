<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $user->usuario_id],
                ['confirm' => __('Você tem certeza que quer deletar usuário: {0}?', $user->nome_completo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Usuário') ?></legend>
        <?php
            echo $this->Form->control('cpf');
            echo $this->Form->control('nome_completo');
            echo $this->Form->control('sexo', ['type' => 'radio', 'options' => [['value' => 'M', 'text' => __('Masculino')],['value' => 'F', 'text' => __('Feminino')]]]);
            echo $this->Form->control('roles_id', ['options' => $roles]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
