<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReleverFixture
 */
class ReleverFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'relever';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'relever' => 1,
            ],
        ];
        parent::init();
    }
}
