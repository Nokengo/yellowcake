<?php
/**
 * @copyright     Nokengo Brasil Comunicações
 * @link          http://nokengo.com
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 * @author        Samuel Levy - samuel@nokengo.com
 */

App::uses('Controller', 'Controller');

class AppController extends Controller {
  public $components = array(
       'Session',
       'Auth' => array(
           'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
           'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
       )
   );

  public function beforeFilter(){
    parent::beforeFilter();

    if($this->params->admin)
    $this->layout = "_admin";

  }
}
