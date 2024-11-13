<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Utilisateur Entity
 *
 * @property int $noUtilisateur
 * @property string $nomUtilisateur
 * @property string $prenomUtilisateur
 * @property string $courriel
 * @property string|resource $mdp
 * @property string $sel
 */
class Utilisateur extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'nomUtilisateur' => true,
        'prenomUtilisateur' => true,
        'courriel' => true,
        'mdp' => true,
        'sel' => true,
    ];
}
