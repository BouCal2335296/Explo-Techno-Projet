<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UtilisateurFixture
 */
class UtilisateurFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'utilisateur';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'noUtilisateur' => 1,
                'nomUtilisateur' => 'Lorem ipsum dolor sit amet',
                'prenomUtilisateur' => 'Lorem ipsum dolor sit amet',
                'courriel' => 'Lorem ipsum dolor sit amet',
                'mdp' => 'Lorem ipsum dolor sit amet',
                'sel' => 'c54c6284-9178-4ee6-9095-53e78f70a071',
            ],
        ];
        parent::init();
    }
}
