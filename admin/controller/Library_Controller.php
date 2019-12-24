<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Library_Controller extends FT_Controller
{
    public function indexAction()
    {
          // Tạo mới thư  viên
        $this->library->load('upload');        
        
        // library lúc này là entity =new  FT_Library_Loader, nên có hàm upload của FT_Library_Loader class
         
        // Gọi đến phương thứcc upload
        $this->library->upload->upload();
    }
}