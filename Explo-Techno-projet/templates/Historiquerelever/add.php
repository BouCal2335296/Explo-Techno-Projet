<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Historiquerelever $historiquerelever
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Historiquerelever'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="historiquerelever form content">
            <?= $this->Form->create($historiquerelever) ?>
            <fieldset>
                <legend><?= __('Add Historiquerelever') ?></legend>
                <?php
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
