<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SidebarLeftChildTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SidebarLeftChildTable Test Case
 */
class SidebarLeftChildTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SidebarLeftChildTable
     */
    public $SidebarLeftChild;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sidebar_left_child'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SidebarLeftChild') ? [] : ['className' => SidebarLeftChildTable::class];
        $this->SidebarLeftChild = TableRegistry::get('SidebarLeftChild', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SidebarLeftChild);

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
