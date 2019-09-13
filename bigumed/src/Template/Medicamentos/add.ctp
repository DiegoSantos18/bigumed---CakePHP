<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medicamento $medicamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Medicamentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Prescricoes'), ['controller' => 'Prescricoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prescrico'), ['controller' => 'Prescricoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($medicamento) ?>
    <fieldset>
        <legend><?= __('Add Medicamento') ?></legend>
        <?php
            //echo $this->Form->control('medicamentos_id');
            echo $this->Form->control('nome_popular');
            echo $this->Form->control('nome_tecnico');
            echo $this->Form->control('tipo');
            echo $this->Form->control('composicao');
            echo $this->Form->control('contra_indicacoes');
            echo $this->Form->control('indicacao');
            echo $this->Form->control('posologia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
