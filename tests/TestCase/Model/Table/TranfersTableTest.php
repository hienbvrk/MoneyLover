<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TranfersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TranfersTable Test Case
 */
class TranfersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TranfersTable
     */
    public $Tranfers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tranfers',
        'app.from_wallets',
        'app.to_wallets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tranfers') ? [] : ['className' => 'App\Model\Table\TranfersTable'];
        $this->Tranfers = TableRegistry::get('Tranfers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tranfers);

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
