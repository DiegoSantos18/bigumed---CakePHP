<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico[]|\Cake\Collection\CollectionInterface $medicos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Médicos') ?></li>
        <li><?= $this->Html->link(__('add'), ['action' => 'add'], array('class' => 'large material-icons')) ?></li>
        <li class="heading"><?= __('Usuários') ?></li>
        <li><?= $this->Html->link(__('list'), ['controller' => 'Users', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
        <li class="heading"><?= __('Prescrições') ?></li>
        <li><?= $this->Html->link(__('list'), ['controller' => 'Prescricoes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
    </ul>
</nav>
<div class="medicos index large-9 medium-8 columns content">
    <h3><?= __('Médicos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cpf', array('label'=>'CPF')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('crm', array('label'=>'CRM')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_completo', array('label'=>'Nome Completo')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('especialidade') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicos as $medico): ?>
            <tr>
                <td><?= h($medico->user->cpf) ?></td>
                <td><?= h($medico->crm) ?></td>
                <td><?= $medico->has('user') ? $this->Html->link($medico->user->nome_completo, ['controller' => 'Users', 'action' => 'view', $medico->user->usuario_id]) : '' ?></td>
                <td><?= h($medico->especialidade) ?></td>
                <td class="actions">
                    <?= $this->Html->link('visibility',['action' => 'view', $medico->medico_id], array('class' => 'large material-icons')) ?>
                    <?= $this->Html->link('edit',['action' => 'edit', $medico->medico_id], array('class' => 'large material-icons')) ?>
                    <?= $this->Form->postLink(__('delete'), ['action' => 'delete', $medico->medico_id],array('class' => 'large material-icons') ,['confirm' => __('Você tem certeza que você deseja deletar o médico: {0}?', $medico->user->nome_completo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de total de {{count}}')]) ?></p>
    </div>
</div>
