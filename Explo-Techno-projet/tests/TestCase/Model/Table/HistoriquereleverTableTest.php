<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoriquereleverTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoriquereleverTable Test Case
 */
class HistoriquereleverTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoriquereleverTable
     */
    protected $Historiquerelever;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Historiquerelever',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Historiquerelever') ? [] : ['className' => HistoriquereleverTable::class];
        $this->Historiquerelever = $this->getTableLocator()->get('Historiquerelever', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Historiquerelever);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HistoriquereleverTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
