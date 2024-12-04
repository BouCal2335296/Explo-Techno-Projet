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
            <?= $this->Html->link(__('Edit Historiquerelever'), ['action' => 'edit', $historiquerelever->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Historiquerelever'), ['action' => 'delete', $historiquerelever->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historiquerelever->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Historiquerelever'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Historiquerelever'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="historiquerelever view content">
            <h3><?= h($historiquerelever->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($historiquerelever->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('NoPosition') ?></th>
                    <td><?= $this->Number->format($historiquerelever->noPosition) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($historiquerelever->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>