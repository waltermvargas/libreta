<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Libreta[]|\Cake\Collection\CollectionInterface $libretas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Libreta'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="libretas index large-9 medium-8 columns content">
    <h3><?= __('Libretas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('orden') ?></th>
                <th scope="col"><?= $this->Paginator->sort('materia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anio_cursado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carga_horaria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profesor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aprobado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_examen') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libretas as $libreta): ?>
            <tr>
        <!--        <td><?= h($libreta->id) ?></td>  -->
                <td><?= $this->Number->format($libreta->orden) ?></td>
                <td><?= h($libreta->materia) ?></td>
                <td><?= h($libreta->anio_cursado) ?></td>
                <td><?= $this->Number->format($libreta->carga_horaria) ?></td>
                <td><?= h($libreta->profesor) ?></td>
                <td><?= $this->Number->format($libreta->aprobado) ?></td>
                <td><?= h($libreta->fecha_examen) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $libreta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $libreta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $libreta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $libreta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
</div>
