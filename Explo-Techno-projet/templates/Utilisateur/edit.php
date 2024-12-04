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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $utilisateur->noUtilisateur],
                ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->noUtilisateur), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Utilisateur'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="utilisateur form content">
            <?= $this->Form->create($utilisateur) ?>
            <fieldset>
                <legend><?= __('Edit Utilisateur') ?></legend>
                <?php
                    echo $this->Form->control('nomUtilisateur');
                    echo $this->Form->control('prenomUtilisateur');
                    echo $this->Form->control('courriel');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
