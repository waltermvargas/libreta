<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $libreta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $libreta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Libretas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="libretas form large-9 medium-8 columns content">
    <?= $this->Form->create($libreta) ?>
    <fieldset>
        <legend><?= __('Edit Libreta') ?></legend>
        <?php
            echo $this->Form->control('orden');
            echo $this->Form->control('materia');
            echo $this->Form->control('anio_cursado');
            echo $this->Form->control('carga_horaria');
            echo $this->Form->control('profesor');
            echo $this->Form->control('aprobado');
        ?>    
            <label>Fecha de Examen</label>
            <input type="date" name="fecha_examen">
         
        
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
