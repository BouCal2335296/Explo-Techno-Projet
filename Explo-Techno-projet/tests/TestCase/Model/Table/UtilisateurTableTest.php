<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UtilisateurTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UtilisateurTable Test Case
 */
class UtilisateurTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UtilisateurTable
     */
    protected $Utilisateur;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Utilisateur',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Utilisateur') ? [] : ['className' => UtilisateurTable::class];
        $this->Utilisateur = $this->getTableLocator()->get('Utilisateur', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Utilisateur);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UtilisateurTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UtilisateurTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
