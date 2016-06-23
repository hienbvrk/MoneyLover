<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommonSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommonSettingsTable Test Case
 */
class CommonSettingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CommonSettingsTable
     */
    public $CommonSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.common_settings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CommonSettings') ? [] : ['className' => 'App\Model\Table\CommonSettingsTable'];
        $this->CommonSettings = TableRegistry::get('CommonSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CommonSettings);

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
