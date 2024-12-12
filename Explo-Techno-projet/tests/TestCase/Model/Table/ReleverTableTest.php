<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReleverTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReleverTable Test Case
 */
class ReleverTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReleverTable
     */
    protected $Relever;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Relever',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Relever') ? [] : ['className' => ReleverTable::class];
        $this->Relever = $this->getTableLocator()->get('Relever', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Relever);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReleverTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
