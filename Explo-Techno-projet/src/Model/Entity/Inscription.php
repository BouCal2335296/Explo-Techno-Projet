<?php

namespace App\Model\Entity;

use CAKE\ORM\Entity;

class Inscription extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slung' => false
    ];
}