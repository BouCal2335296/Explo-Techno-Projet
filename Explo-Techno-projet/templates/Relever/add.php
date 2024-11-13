<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relever $relever
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Relever'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="relever form content">
            <?= $this->Form->create($relever) ?>
            <fieldset>
                <legend><?= __('Add Relever') ?></legend>
                <?php
                    echo $this->Form->control('relever');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
