<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class View_Controller extends Base_Controller
{
    public function indexAction()
    {
        $data = array(
            'title' => 'Chào mừng các bạn đén với freetuts.net'
            
        );
         
        // Load view hoặc minh chọn là Layout.php nào đó 
        $this->view->load('view', $data);
         
        // Show view
       // $this->view->show();
    }
}