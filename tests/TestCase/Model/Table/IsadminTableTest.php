<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IsadminTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IsadminTable Test Case
 */
class IsadminTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IsadminTable
     */
    public $Isadmin;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.isadmin'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Isadmin') ? [] : ['className' => IsadminTable::class];
        $this->Isadmin = TableRegistry::get('Isadmin', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Isadmin);

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
