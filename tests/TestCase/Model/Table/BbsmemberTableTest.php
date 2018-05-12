<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BbsmemberTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BbsmemberTable Test Case
 */
class BbsmemberTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BbsmemberTable
     */
    public $Bbsmember;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bbsmember'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bbsmember') ? [] : ['className' => BbsmemberTable::class];
        $this->Bbsmember = TableRegistry::get('Bbsmember', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bbsmember);

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
