<?php

namespace App\Model\Entity;

use CAKE\ORM\Entity;

class Article extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slung' => false
    ];
}