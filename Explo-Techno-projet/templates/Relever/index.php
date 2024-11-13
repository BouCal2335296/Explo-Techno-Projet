<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Relever> $relever
 */
?>
<div class="relever index content">
    <?= $this->Html->link(__('New Relever'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Relever') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('relever') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($relever as $relever): ?>
                <tr>
                    <td><?= $this->Number->format($relever->id) ?></td>
                    <td><?= $this->Number->format($relever->relever) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $relever->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $relever->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $relever->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relever->id)]) ?>
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