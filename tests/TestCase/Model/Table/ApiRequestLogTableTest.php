<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApiRequestLogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApiRequestLogTable Test Case
 */
class ApiRequestLogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ApiRequestLogTable
     */
    public $ApiRequestLog;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.api_request_log'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ApiRequestLog') ? [] : ['className' => ApiRequestLogTable::class];
        $this->ApiRequestLog = TableRegistry::get('ApiRequestLog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ApiRequestLog);

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
