<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class DealersController extends AppController {
public $helpers = array('Js' => array('jquery'));
/**
 * Controller name
 *
 * @var string
 */
public $components = array('Cookie');
public function beforeFilter() {
    parent::beforeFilter();
      $params = $this->params['action'];
       $this->set(compact('params'));
    $this->set('cookieHelper', $this->Cookie);
}
    
    public function addDealer()
    { 
        $this->layout='sb';
          $this->isLogin();
         $this->set('title_for_layout', 'add dealer');
       if ($this->request->is('post')) {
              $this->loadModel('Dealer'); 
              $reqData = $this->request->data;
                     $isAlready = '';
                     if(empty($isAlready)){
                                          $this->Dealer->save($this->request->data);
                                          $this->Session->setFlash('Dealer Added successfully','default',array('class' => 'sucess_flash'));
                                          return $this->redirect('/dealList');
          }else{
              $this->Session->setFlash('Dealer Already Exist.','default',array('class' => 'sucess_flash'));
              return $this->redirect('/addDeal');
          }
      }
    }
  
     public function editDealer($id=NULL)
    { 
        $this->layout='sb';
          $this->isLogin();
          $this->set('title_for_layout', 'edit Stock');
       $this->loadModel('Dealer'); 
          if (isset($this->request->data['Dealer'])) {
                                         $reqData = $this->request->data;
                                          $this->Dealer->save($this->request->data);
                                          $this->Session->setFlash('Dealer Record Updated  successfully','default',array('class' => 'sucess_flash'));
                                          return $this->redirect('/dealList');          
      }
      $this->request->data=$this->Dealer->findById($id);
     
    }
     public function dealerList()
    { 
        $this->layout='sb';
        $this->isLogin();
        $this->set('title_for_layout', 'Stock List');
        $this->loadModel('Dealer');
        $datas = $this->Dealer	->find('all',array('conditions'=>array('status'=>'1','')));
        $this->set(compact('datas'));
    }
    
 
   public function dealerDelete($id)
    { 
        $this->layout=FALSE;
        $this->isLogin();
         $this->Dealer->updateAll(array('Dealer.status'=>"2"),array('Dealer.id'=>$id));
         $this->Session->setFlash('Dealer deleted successfully','default',array('class' => 'sucess_flash'));
         return $this->redirect('/dealList');
    }
  
   public function demo()
    { 
        $this->layout=FALSE;
        $this->isLogin();
		  $datas = $this->Medicine->find('all',array('conditions'=>array('status'=>'1')));
		  foreach($datas as $data){
			 
			  $sn= $data['Medicine']['name'];
			   
			  $this->Medicine->updateAll(array('Medicine.sur_name'=>"'".$sn."'"),array('Medicine.id'=>$data['Medicine']['id']));
			  
			  
		  }
		  echo 'hello';exit;
         $this->Medicine->updateAll(array('Medicine.status'=>"2"),array('Medicine.id'=>$id));
         $this->Session->setFlash('Medicine deleted successfully','default',array('class' => 'sucess_flash'));
         return $this->redirect('/medList');
    }
  
    
}
