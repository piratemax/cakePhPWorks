<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <!-- Ajouter les liens vers les autres actions -->
            <?= $this->Html->link(__('Liste Utilisateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user view content">
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td>// Ajouter l'email de l'utilisateur</td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td>// Ajouter l'username de l'utilisateur</td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td>// Ajouter l'id de l'utilisateur</td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Produits') ?></h4>
                <?php if (!empty($user->produits)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th>// Champ de la table produits //</th>
                                <th>// Champ de la table produits //</th>
                                <th>// Champ de la table produits //</th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <!-- Boucle pour afficher les produits -->
                            <tr>
                                <td>// Champ de la table produits //</td>
                                <td>// Champ de la table produits //</td>
                                <td>// Champ de la table produits //</td>
                                <td class="actions">
                                    <!-- Actions pour modifier et supprimer le produit -->
                                    <?= $this->Html->link(__('Modifier'), ['controller' => 'Produits', 'action' => 'edit', $produit->id]) ?>
                                    <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Produits', 'action' => 'delete', $produit->id], ['confirm' => __('Êtes-vous sûr de vouloir supprimer ce produit?')]) ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
