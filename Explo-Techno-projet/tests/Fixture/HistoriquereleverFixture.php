<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HistoriquereleverFixture
 */
class HistoriquereleverFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'historiquerelever';
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
                'noPosition' => 1,
                'date' => '2024-11-13 14:36:08',
            ],
        ];
        parent::init();
    }
}
