<div class="user index content">
    <!-- Lien pour ajouter un nouvel utilisateur -->
    <?= $this->Html->link(__('Nouvel Utilisateur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Utilisateurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>// Utiliser la méthode Paginator pour pouvoir trier les éléments de la table //</th>
                    <th>//</th>
                    <th>//</th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <!-- Afficher les éléments de la table en boucle -->
                <tr>
                    <td>// Champ de la table //</td>
                    <td>// Champ de la table //</td>
                    <td>// Champ de la table //</td>
                    <td class="actions">
                        <!-- Actions pour modifier et supprimer l'utilisateur -->
                        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $user->id], ['confirm' => __('Êtes-vous sûr de vouloir supprimer cet utilisateur?')]) ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <!-- Pagination pour naviguer entre les pages -->
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('Next') ?>
        <?= $this->Paginator->prev('Previous') ?>
    </div>
</div>
