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
            <?= $this->Html->link(__('List Utilisateur'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="utilisateur form content">
            <?= $this->Form->create($utilisateur) ?>
            <fieldset>
                <legend><?= __('Add Utilisateur') ?></legend>
                <?php
                    echo $this->Form->control('nomUtilisateur');
                    echo $this->Form->control('prenomUtilisateur');
                    echo $this->Form->control('courriel');
                    echo $this->Form->control('sel');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
