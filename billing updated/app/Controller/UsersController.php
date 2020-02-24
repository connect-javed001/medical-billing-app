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
class UsersController extends AppController {
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
    public function login()
    {  
        $this->layout='sb_login';
        $this->isuserLogind();
          if ($this->request->is('post')) {
                     $this->loadModel('User');
//                     debug($this->request->data);exit;
                             $uname = (!empty($this->request->data['User']['name'])?$this->request->data['User']['name']:'');
                             $pass = (!empty($this->request->data['User']['password'])?$this->request->data['User']['password']:'');
                             $pass = md5($pass);
                             $user = $this->User->findByNameAndPassword($uname,$pass);
                              if(!empty($user)){
                                      $this->Session->write('sa_uname', $user['User']['name']);
                                      $this->Session->write('sa_uid', $user['User']['id']);
                                       return $this->redirect('/home');
                              }else{
                                       return $this->redirect('/login');
                              }
          }
    }
     public function changePassword()
    {  
      $this->layout='sb';
        $this->isLogin();
        $this->loadModel('User');
        $uid =$this->Session->read('sa_uid');
     
          if (isset($this->request->data['User'])) {
                             $pass = md5($this->request->data['User']['oldPassword']);
                             $uname =$this->Session->read('sa_uname');
                             $user = $this->User->findByNameAndPassword($uname,$pass);
                              if(!empty($user)){
                                  $this->request->data['User']['password']=  md5($this->request->data['User']['password']);
                                      $this->User->save($this->request->data);
                                       return $this->redirect('/logout');
                              }else{
                                   $this->Session->setFlash('Old Password Not Correct','default',array('class' => 'sucess_flash'));
                                       return $this->redirect('/changePassword');
                              }
          }
             $this->request->data = $this->User->findById($uid);
             
    }
    public function logout(){
        $this->Session->delete('sa_uname');
        $this->Session->delete('sa_uid');
        return $this->redirect('/login');
    }
    
}
