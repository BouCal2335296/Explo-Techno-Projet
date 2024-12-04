<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrientationmoteurFixture
 */
class OrientationmoteurFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'orientationmoteur';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'noPosition' => 1,
                'position' => 1,
            ],
        ];
        parent::init();
    }
}
