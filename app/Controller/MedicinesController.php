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
class MedicinesController extends AppController {
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
    
    public function addMedicine()
    { 
        $this->layout='sb';
          $this->isLogin();
         $this->set('title_for_layout', 'add Stock');
       if ($this->request->is('post')) {
              $this->loadModel('Medicine'); 
              $reqData = $this->request->data;
                     $isAlready = $this->Medicine->findByNameAndAliasName($reqData['Medicine']['name'],$reqData['Medicine']['alias_name']);
                     if(empty($isAlready)){
                                          $this->Medicine->save($this->request->data);
                                          $this->Session->setFlash('Medicine Added successfully','default',array('class' => 'sucess_flash'));
                                          return $this->redirect('/medList');
          }else{
              $this->Session->setFlash('Medicine Already Exist.','default',array('class' => 'sucess_flash'));
              return $this->redirect('/addMed');
          }
      }
    }
  
     public function editMedicine($id=NULL)
    { 
        $this->layout='sb';
          $this->isLogin();
          $this->set('title_for_layout', 'edit Stock');
       $this->loadModel('Medicine'); 
          if (isset($this->request->data['Medicine'])) {
                                         $reqData = $this->request->data;
                                          $this->Medicine->save($this->request->data);
                                          $this->Session->setFlash('Medicine Record Updated  successfully','default',array('class' => 'sucess_flash'));
                                          return $this->redirect('/medList');          
      }
      $this->request->data=$this->Medicine->findById($id);
     
    }
     public function medList()
    { 
        $this->layout='sb';
        $this->isLogin();
        $this->set('title_for_layout', 'Stock List');
        $this->loadModel('Medicine');
        $datas = $this->Medicine->find('all',array('conditions'=>array('status'=>'1')));
        $this->set(compact('datas'));
    }
    
 
   public function medDelete($id)
    { 
        $this->layout=FALSE;
        $this->isLogin();
         $this->Medicine->updateAll(array('Medicine.status'=>"2"),array('Medicine.id'=>$id));
         $this->Session->setFlash('Medicine deleted successfully','default',array('class' => 'sucess_flash'));
         return $this->redirect('/medList');
    }
  
    
}
