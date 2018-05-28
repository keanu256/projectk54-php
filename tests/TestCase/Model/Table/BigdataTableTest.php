<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BigdataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BigdataTable Test Case
 */
class BigdataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BigdataTable
     */
    public $Bigdata;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bigdata'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bigdata') ? [] : ['className' => BigdataTable::class];
        $this->Bigdata = TableRegistry::get('Bigdata', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bigdata);

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
