<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class News_Controller extends FT_Controller
{
    public function indexAction()
    {
        // Lấy config cÃ³ key lÃ  csrf_token_name
        echo '<h3>Token: csrf_token_name: ' . $this->config->item('csrf_token_name') . '</h3>';
         
        // Thay Ä‘á»•i giÃ¡ trá»‹ cho csrf_token_name
        $this->config->set_item('csrf_token_name', 'new_token');
        echo '<h3>Token: csrf_token_name (changed): ' . $this->config->item('csrf_token_name') . '</h3>';
         
        // Táº¡o cáº¥u hÃ¬nh má»›i tÃªn website_name
        $this->config->set_item('website_name', 'freetuts.net');
        echo '<h3>key website_name: ' . $this->config->item('website_name') . '</h3>';
    }
}