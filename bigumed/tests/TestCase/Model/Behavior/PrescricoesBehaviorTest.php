<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\PrescricoesBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\PrescricoesBehavior Test Case
 */
class PrescricoesBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Behavior\PrescricoesBehavior
     */
    public $Prescricoes;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Prescricoes = new PrescricoesBehavior();
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
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
