<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\BooksComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\BooksComponent Test Case
 */
class BooksComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\BooksComponent
     */
    public $Books;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Books = new BooksComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Books);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
