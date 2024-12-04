<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Orientationmoteur> $orientationmoteur
 */
?>
<div class="orientationmoteur index content">
    <h3><?= __('Orientationmoteur') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('noPosition') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th class="actions"><?= __('Relever') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orientationmoteur as $orientationmoteur): ?>
                <tr>
                    <td><?= $this->Number->format($orientationmoteur->noPosition) ?></td>
                    <td><?= $this->Number->format($orientationmoteur->position) ?></td>
                    <td><?= $this->Number->format($orientationmoteur->relever) ?></td>
                    
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