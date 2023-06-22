<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config); // permet d'instancier la clé primaire de la table
        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        // Indique que le champ users_id de la table produits est une liaison avec un ID unique d'un utilisateur
        $this->hasMany('Produits', [
            'foreignKey' => 'users_id',
        ]);
    }

    // Définit les règles de validation par défaut pour les champs de la table
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->email('email')
            ->allowEmptyString('email'); // permet que le champ email soit vide

        $validator
            ->scalar('username')
            ->maxLength('username', 255) // bride les caractères max à 255
            ->allowEmptyString('username'); // idem

        $validator
            ->scalar('password')
            ->maxLength('password', 255) // idem
            ->allowEmptyString('password'); // idem

        return $validator;
    }
    public function buildRules(RulesChecker $rules): RulesChecker {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        return $rules;
    }
}
