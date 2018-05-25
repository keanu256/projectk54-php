<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LicensePaymentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LicensePaymentsTable Test Case
 */
class LicensePaymentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LicensePaymentsTable
     */
    public $LicensePayments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.license_payments',
        'app.users',
        'app.admin_group',
        'app.licenses',
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
        $config = TableRegistry::exists('LicensePayments') ? [] : ['className' => LicensePaymentsTable::class];
        $this->LicensePayments = TableRegistry::get('LicensePayments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LicensePayments);

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
