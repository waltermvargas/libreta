<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Libreta $libreta
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Libreta'), ['action' => 'edit', $libreta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Libreta'), ['action' => 'delete', $libreta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $libreta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Libretas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Libreta'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="libretas view large-9 medium-8 columns content">
    <h3><?= h($libreta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($libreta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Materia') ?></th>
            <td><?= h($libreta->materia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anio Cursado') ?></th>
            <td><?= h($libreta->anio_cursado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profesor') ?></th>
            <td><?= h($libreta->profesor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Orden') ?></th>
            <td><?= $this->Number->format($libreta->orden) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carga Horaria') ?></th>
            <td><?= $this->Number->format($libreta->carga_horaria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aprobado') ?></th>
            <td><?= $this->Number->format($libreta->aprobado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Examen') ?></th>
            <td><?= h($libreta->fecha_examen) ?></td>
        </tr>
    </table>
</div>
