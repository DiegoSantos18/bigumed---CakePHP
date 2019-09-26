<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedicamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedicamentosTable Test Case
 */
class MedicamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MedicamentosTable
     */
    public $Medicamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Medicamentos') ? [] : ['className' => MedicamentosTable::class];
        $this->Medicamentos = TableRegistry::getTableLocator()->get('Medicamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Medicamentos);

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
}
