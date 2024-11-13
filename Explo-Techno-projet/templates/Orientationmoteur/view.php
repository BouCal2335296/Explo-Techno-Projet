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
            <?= $this->Html->link(__('Edit Orientationmoteur'), ['action' => 'edit', $orientationmoteur->noPosition], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orientationmoteur'), ['action' => 'delete', $orientationmoteur->noPosition], ['confirm' => __('Are you sure you want to delete # {0}?', $orientationmoteur->noPosition), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orientationmoteur'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orientationmoteur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="orientationmoteur view content">
            <h3><?= h($orientationmoteur->noPosition) ?></h3>
            <table>
                <tr>
                    <th><?= __('NoPosition') ?></th>
                    <td><?= $this->Number->format($orientationmoteur->noPosition) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $this->Number->format($orientationmoteur->position) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>