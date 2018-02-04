<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SidebarMenuLeftTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SidebarMenuLeftTable Test Case
 */
class SidebarMenuLeftTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SidebarMenuLeftTable
     */
    public $SidebarMenuLeft;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sidebar_menu_left'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SidebarMenuLeft') ? [] : ['className' => SidebarMenuLeftTable::class];
        $this->SidebarMenuLeft = TableRegistry::get('SidebarMenuLeft', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SidebarMenuLeft);

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
