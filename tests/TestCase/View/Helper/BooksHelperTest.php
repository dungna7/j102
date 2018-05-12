<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\BooksHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\BooksHelper Test Case
 */
class BooksHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\BooksHelper
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
        $view = new View();
        $this->Books = new BooksHelper($view);
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
