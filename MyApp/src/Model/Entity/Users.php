<?php
declare(strict_types=1);
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Users extends Entity
{
    // Ici, les variables sont déclarées comme accessibles
    protected $_accessible = [
        'email' => true,
        'username' => true,
        'password' => true,
        'produits' => true,
    ];

    /* Ici, la variable est définie en tant que "hidden",
    ** ce qui signifie qu'elle n'est pas accessible
    ** directement dans le code
    */
    protected $_hidden = [
        'password',
    ];
}
