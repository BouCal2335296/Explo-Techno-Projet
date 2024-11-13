<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orientationmoteur $orientationmoteur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orientationmoteur->noPosition],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orientationmoteur->noPosition), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orientationmoteur'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="orientationmoteur form content">
            <?= $this->Form->create($orientationmoteur) ?>
            <fieldset>
                <legend><?= __('Edit Orientationmoteur') ?></legend>
                <?php
                    echo $this->Form->control('position');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
