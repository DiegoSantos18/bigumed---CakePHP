<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrescricoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrescricoesTable Test Case
 */
class PrescricoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrescricoesTable
     */
    public $Prescricoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Prescricoes',
        'app.Medicos',
        'app.Pacientes',
        'app.Medicamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Prescricoes') ? [] : ['className' => PrescricoesTable::class];
        $this->Prescricoes = TableRegistry::getTableLocator()->get('Prescricoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prescricoes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
