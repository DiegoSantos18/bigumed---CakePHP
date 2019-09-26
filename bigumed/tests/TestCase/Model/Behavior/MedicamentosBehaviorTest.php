<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\MedicamentosBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\MedicamentosBehavior Test Case
 */
class MedicamentosBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Behavior\MedicamentosBehavior
     */
    public $Medicamentos;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Medicamentos = new MedicamentosBehavior();
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
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
