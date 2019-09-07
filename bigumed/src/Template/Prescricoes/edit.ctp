<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prescrico $prescrico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $prescrico->precricao_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prescrico->precricao_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Prescrições'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Médicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Médico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Medicamentos'), ['controller' => 'Medicamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Medicamento'), ['controller' => 'Medicamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prescricoes form large-9 medium-8 columns content">
    <?= $this->Form->create($prescrico) ?>
    <fieldset>
        <legend><?= __('Editar Prescrição') ?></legend>
        <?php
            echo $this->Form->control('periodicidade');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('duracao');
            echo $this->Form->control('observacao');
            echo $this->Form->control('dt_prescricao');
            echo $this->Form->control('medico_id', ['options' => $medicos]);
            echo $this->Form->control('paciente_id', ['options' => $pacientes]);
            echo $this->Form->control('medicamento_id', ['options' => $medicamentos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
