<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medicamento[]|\Cake\Collection\CollectionInterface $medicamentos
 */
?>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <br>
    <a href="#" data-activates="slide-out" class="waves-effect waves-light btn-large button-collapse">MENU<i class="material-icons">menu</i></a>
    <ul id="slide-out" class="side-nav" style="list-style-type: none;">
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion" style="list-style-type: none;">
                <li>
                    <a class="collapsible-header"><?= __('Medicamentos ') ?><i class="fas fa-pills fa-lg"></i></a>
                    <div class="collapsible-body">
                        <ul style="list-style-type: none;">
                            <li><?= $this->Html->link(__('add'), ['action' => 'add'], array('class' => 'large material-icons')) ?></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <script>
        $(".button-collapse").sideNav();
    </script>
</nav>

<div class="medicamentos index large-9 medium-8 columns content">
    <h3><?= __('Medicamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('medicamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_popular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_tecnico', array('label' => 'Nome Técnico')) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicamentos as $medicamento) : ?>
                <tr>
                    <td><?= $this->Number->format($medicamento->medicamento_id) ?></td>
                    <td><?= h($medicamento->nome_popular) ?></td>
                    <td><?= h($medicamento->nome_tecnico) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('visibility', ['action' => 'view', $medicamento->medicamento_id], array('class' => 'large material-icons')) ?>
                        <?= $this->Html->link('edit', ['action' => 'edit', $medicamento->medicamento_id], array('class' => 'large material-icons')) ?>
                        <?= $this->Form->postLink(__('delete'), ['action' => 'delete', $medicamento->medicamento_id], ['confirm' => __('Você tem certeza que deseja deletar o medicamento: {0}?', $medicamento->nome_popular), 'class' => 'large material-icons']) ?>
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