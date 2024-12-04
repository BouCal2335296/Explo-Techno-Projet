<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Utilisateur> $utilisateur
 */
?>
<div class="utilisateur index content">
    <?= $this->Html->link(__('New Utilisateur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Utilisateur') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('noUtilisateur') ?></th>
                    <th><?= $this->Paginator->sort('nomUtilisateur') ?></th>
                    <th><?= $this->Paginator->sort('prenomUtilisateur') ?></th>
                    <th><?= $this->Paginator->sort('courriel') ?></th>
                    <th><?= $this->Paginator->sort('sel') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateur as $utilisateur): ?>
                <tr>
                    <td><?= $this->Number->format($utilisateur->noUtilisateur) ?></td>
                    <td><?= h($utilisateur->nomUtilisateur) ?></td>
                    <td><?= h($utilisateur->prenomUtilisateur) ?></td>
                    <td><?= h($utilisateur->courriel) ?></td>
                    <td><?= h($utilisateur->sel) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $utilisateur->noUtilisateur]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $utilisateur->noUtilisateur]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $utilisateur->noUtilisateur], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->noUtilisateur)]) ?>
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