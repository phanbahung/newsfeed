
<?php

if (!defined('IN_SITE')) die ('Bạn vào nhầm chỗ rồi');

if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Base_Controller extends FT_Controller
{
    protected  $data;
    
    public function __construct() 
    {
        parent::__construct();  
        
        // Load ná»™i dung footer
        $top_menu ="Tao đnag ở đây";
        
        $data = array(
            'top_menu'=> $top_menu,
        ); 
      
       
    }
     
    public function load_header()
    {
        // Load ná»™i dung footer
        $top_menu ="Tao đnag ở đây";
        
        $data = array(
            'top_menu'=> $top_menu,
        );   
        
    }
     
    public function load_footer()
    {
       return "kekke";
        
    }
    
    public function getCurrentAction()
    {
        return __FUNCTION__ ;
        
    }
     
    // HÃ m há»§y nÃ y cÃ³ nhiá»‡m vá»¥ show ná»™i dung cá»§a view, lÃºc nÃ y cÃ¡c controller
    // khÃ´ng cáº§n gá»�i Ä‘áº¿n $this->view->show ná»¯a
    public function __destruct() 
    {
        $this->view->show();
    }
}