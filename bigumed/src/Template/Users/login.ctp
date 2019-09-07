<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users','action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?php
            echo $this->Form->control('cpf');
            echo $this->Form->control('senha', ['type' => 'password']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Entrar')) ?>
    <?= $this->Form->end() ?>
</div>
