<?php
namespace App\Controller;


use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Category Controller
 *
 *
 * @method \App\Model\Entity\Category[] paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    private $category;
    public function initialize()
    {
        parent::initialize();
        $this->category = TableRegistry::get('Category');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        // $memu = $this->category->getMenu();
//        echo "<pre>";
//        var_dump($memu);die;
    //    / $this->set('memu',$memu);
//        $this->viewBuilder()->enableAutoLayout(false);
//        var_dump($layout);die;
        return $this->render('/Home/index');
    }
} 

