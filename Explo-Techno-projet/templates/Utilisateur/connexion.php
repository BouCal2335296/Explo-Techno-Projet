<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateur $utilisateur
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="utilisateur form content">
            <?= $this->Form->create($utilisateur) ?>
            <fieldset>
                <h3><?= __('Connexion') ?></h3>
                <?php
                    echo $this->Form->control('courriel');
                    echo $this->Form->control('mdp', ['type' => 'password']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
