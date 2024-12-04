<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Historiquerelever> $historiquerelever
 */
?>
<div class="historiquerelever index content">
    <?= $this->Html->link(__('New Historiquerelever'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Historiquerelever') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('noPosition') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historiquerelever as $historiquerelever): ?>
                <tr>
                    <td><?= $this->Number->format($historiquerelever->id) ?></td>
                    <td><?= $this->Number->format($historiquerelever->noPosition) ?></td>
                    <td><?= h($historiquerelever->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $historiquerelever->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $historiquerelever->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historiquerelever->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historiquerelever->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>