<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prescrico $prescrico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prescricoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medicamentos'), ['controller' => 'Medicamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medicamento'), ['controller' => 'Medicamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prescricoes form large-9 medium-8 columns content">
    <?= $this->Form->create($prescrico) ?>
    <fieldset>
        <legend><?= __('Add Prescrico') ?></legend>
        <?php
            echo $this->Form->control('periodicidade');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('duracao');
            echo $this->Form->control('observacao');
            echo $this->Form->control('dt_prescricao');
            echo $this->Form->control('medico_id', ['options' => $medicos]);
            echo $this->Form->control('paciente_id', ['options' => $pacientes]);
            echo $this->Form->control('medicamentos_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
