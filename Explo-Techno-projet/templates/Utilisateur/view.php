<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateur $utilisateur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Utilisateur'), ['action' => 'edit', $utilisateur->noUtilisateur], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Utilisateur'), ['action' => 'delete', $utilisateur->noUtilisateur], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->noUtilisateur), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Utilisateur'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Utilisateur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="utilisateur view content">
            <h3><?= h($utilisateur->nomUtilisateur) ?></h3>
            <table>
                <tr>
                    <th><?= __('NomUtilisateur') ?></th>
                    <td><?= h($utilisateur->nomUtilisateur) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrenomUtilisateur') ?></th>
                    <td><?= h($utilisateur->prenomUtilisateur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Courriel') ?></th>
                    <td><?= h($utilisateur->courriel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sel') ?></th>
                    <td><?= h($utilisateur->sel) ?></td>
                </tr>
                <tr>
                    <th><?= __('NoUtilisateur') ?></th>
                    <td><?= $this->Number->format($utilisateur->noUtilisateur) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>