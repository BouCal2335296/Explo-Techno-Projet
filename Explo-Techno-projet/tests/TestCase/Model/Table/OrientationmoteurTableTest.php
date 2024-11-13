<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrientationmoteurTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrientationmoteurTable Test Case
 */
class OrientationmoteurTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrientationmoteurTable
     */
    protected $Orientationmoteur;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Orientationmoteur',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Orientationmoteur') ? [] : ['className' => OrientationmoteurTable::class];
        $this->Orientationmoteur = $this->getTableLocator()->get('Orientationmoteur', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Orientationmoteur);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrientationmoteurTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
