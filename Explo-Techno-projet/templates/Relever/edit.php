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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $relever->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $relever->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Relever'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="relever form content">
            <?= $this->Form->create($relever) ?>
            <fieldset>
                <legend><?= __('Edit Relever') ?></legend>
                <?php
                    echo $this->Form->control('relever');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
