<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico $medico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $medico->medico_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $medico->medico_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicos form large-9 medium-8 columns content">
    <?= $this->Form->create($medico) ?>
    <fieldset>
        <legend><?= __('Edit Medico') ?></legend>
        <?php
            echo $this->Form->control('crm');
            echo $this->Form->control('especialidade');
            echo $this->Form->control('usuario_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
