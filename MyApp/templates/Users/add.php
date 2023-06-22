<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Liste des utilisateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
            <!-- Formulaire d'ajout d'un utilisateur -->
            <?= $this->Form->create($users) ?>
            <fieldset>
                <legend><?= __('Ajouter un utilisateur') ?></legend>
                <?= $this->Form->control('email') ?>
                <?= $this->Form->control('username') ?>
                <?= $this->Form->control('password') ?>
            </fieldset>
            <?= $this->Form->button(__('Enregistrer')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
