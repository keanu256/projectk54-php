<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LicenseNameTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LicenseNameTable Test Case
 */
class LicenseNameTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LicenseNameTable
     */
    public $LicenseName;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.license_name'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LicenseName') ? [] : ['className' => LicenseNameTable::class];
        $this->LicenseName = TableRegistry::get('LicenseName', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LicenseName);

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
