<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
       public $helpers=array("Session","Html","Form");
//         public function beforeRender() {
//            if($this->name == 'CakeError') {
//                $this->layout = 'notFound';
//            }
//       }
      public function beforeFilter()
        {
          parent::beforeFilter();

             session_start();

          //add some code here that must be run before each UsersController's action
        }
 
  
  function setFlash($message, $type = 'blue') {
           //what ever the color you need..
            $arr = array('red' => 'red', 'green' => 'green', 'yellow' => 'yellow', 'gray' => 'gray', 'blue' => 'blue');
            $this->Session->setFlash($message, 'default', compact('class'), $arr[$type]);
        }
        
        public function isuserLogind(){
                    if($this->Session->read('sa_uid')){
                         $this->redirect('/home');
                    }
        }
        public function isLogin(){
                    if(!$this->Session->read('sa_uid')){
                         $this->redirect('/login');
                    }
        }
       
       
        function generateOrderNo(){
            $this->loadModel('Invoice');
            $last_id = $this->Invoice->find('first',array('fields'=>'id','order'=>'id desc'));  
            if(!empty($last_id)){
                $order_no ='IN-'.(1000+$last_id['Invoice']['id']+1);  
            }else{
                $order_no ='IN-'.(1000);  
            }
           return $order_no;
        } 
}
