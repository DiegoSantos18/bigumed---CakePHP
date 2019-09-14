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
        <li><?= $this->Form->postLink(
                __('Deletar Médico'),
                ['action' => 'delete', $medico->medico_id],
                ['confirm' => __('Você tem certeza que deseja deletar o médico: {0}?', $medico->user->nome_completo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Novo Médico'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicos form large-9 medium-8 columns content">
    <?= $this->Form->create($medico) ?>
    <fieldset>
        <legend><?= __('Editar Médico') ?></legend>
        <?php
            echo $this->Form->input('crm', array('label'=>'CRM'));
            echo $this->Form->input('especialidade');
            echo $this->Form->input('usuario_id', array('label'=>'Usuário', 'options' => $users));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
