<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prescrico[]|\Cake\Collection\CollectionInterface $prescricoes
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
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Users','action' => 'add'], array('class' => 'large material-icons')) ?></li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Users', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Médicos ') ?><i class="fa fa-user-md fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Medicos','action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Pacientes ') ?><i class="fas fa-user-injured fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                        <li><?= $this->Html->link(__('add'), ['controller' => 'Pacientes','action' => 'add'], array('class' => 'large material-icons')) ?></li>
                        <li><?= $this->Html->link(__('list'), ['controller' => 'Pacientes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Medicamentos ') ?><i class="fas fa-pills fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Medicamentos','action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Medicamentos', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><?= __('Prescrições ') ?><i class="fas fa-file-medical-alt fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['controller' => 'Prescricoes','action' => 'add'], array('class' => 'large material-icons')) ?> </li>
                            <li><?= $this->Html->link(__('list'), ['controller' => 'Prescricoes', 'action' => 'index'], array('class' => 'large material-icons')) ?></li>
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
<div class="prescricoes index large-9 medium-8 columns content homePage">
    <h3><?= __('Prescricoes') ?></h3>
    <table cellpadding="0" cellspacing="0" style="opacity: 0.97;background: transparent;">
    <!-- Tabela com Dados-->
        <tbody>
            <!--Form filtro-->
            <tr>
                <?= $this->Form->create() ?>
                <td><?= $this->Form->input('cpf', array('label'=>'','name'=>'cpf')) ?></td>
                <td><?= $this->Form->input('crm', array('label'=>'','name'=>'crm')) ?></td>
                <td><?= $this->Form->input('nome_completo', array('label'=>'','name'=>'nome_completo')) ?></td>
                <td><?= $this->Form->input('especialidade', array('label'=>'','name'=>'especialidade')) ?></td>
                <td class="actions">
                    <input type="submit"  value="search" class="large material-icons filtro"/>
                    <input type="reset"  value="format_clear" class="large material-icons filtro"/>
                </td>
                <?= $this->Form->end() ?>
            </tr>
            <!--Fim form filtro-->
        </tbody>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('periodicidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_prescricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medico_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medicamentos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prescricoes as $prescrico): ?>
            <tr>
                <td><?= h($prescrico->periodicidade) ?></td>
                <td><?= $this->Number->format($prescrico->quantidade) ?></td>
                <td><?= h($prescrico->duracao) ?></td>
                <td><?= h($prescrico->observacao) ?></td>
                <td><?= h($prescrico->dt_prescricao) ?></td>
                <td><?= $prescrico->has('medico') ? $this->Html->link($prescrico->medico->medico_id, ['controller' => 'Medicos', 'action' => 'view', $prescrico->medico->medico_id]) : '' ?></td>
                <td><?= $prescrico->has('paciente') ? $this->Html->link($prescrico->paciente->paciente_id, ['controller' => 'Pacientes', 'action' => 'view', $prescrico->paciente->paciente_id]) : '' ?></td>
                <td><?= $this->Number->format($prescrico->medicamentos_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prescrico->precricao_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prescrico->precricao_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prescrico->precricao_id], ['confirm' => __('Are you sure you want to delete # {0}?', $prescrico->precricao_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Paginação tela-->
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    <!-- Fim Paginação tela-->
</div>
