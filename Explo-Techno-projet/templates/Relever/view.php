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
            <?= $this->Html->link(__('Edit Relever'), ['action' => 'edit', $relever->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Relever'), ['action' => 'delete', $relever->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relever->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Relever'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Relever'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="relever view content">
            <h3><?= h($relever->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($relever->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Relever') ?></th>
                    <td><?= $this->Number->format($relever->relever) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>