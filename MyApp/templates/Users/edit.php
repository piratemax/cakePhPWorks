<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <!-- Lien pour afficher la liste des utilisateurs -->
            <?= $this->Html->link(__('Liste des utilisateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
            <!-- Formulaire de modification d'un utilisateur -->
            <?= $this->Form->create($users) ?>
            <fieldset>
                <legend><?= __('Modifier un utilisateur') ?></legend>
                <?= $this->Form->control('email') ?>
                <?= $this->Form->control('username') ?>
                <?= $this->Form->control('password') ?>
            </fieldset>
            <?= $this->Form->button(__('Enregistrer')) ?>
            <?= $this->Form->end() ?>
            <!-- Lien pour supprimer l'utilisateur -->
            <?= $this->Html->link(__('Supprimer l\'utilisateur'), ['action' => 'delete', $users->id], ['confirm' => __('Êtes-vous sûr de vouloir supprimer cet utilisateur?')]) ?>
        </div>
    </div>
</div>
