<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EditorHistoriesSaveTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EditorHistoriesSaveTable Test Case
 */
class EditorHistoriesSaveTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EditorHistoriesSaveTable
     */
    public $EditorHistoriesSave;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.editor_histories_save',
        'app.users',
        'app.admin_group'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EditorHistoriesSave') ? [] : ['className' => EditorHistoriesSaveTable::class];
        $this->EditorHistoriesSave = TableRegistry::get('EditorHistoriesSave', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EditorHistoriesSave);

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
