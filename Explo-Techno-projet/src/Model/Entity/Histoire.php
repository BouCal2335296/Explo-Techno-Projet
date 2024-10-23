<?php

namespace App\Model\Entity;

use CAKE\ORM\Entity;

class Histoire extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slung' => false
    ];
}