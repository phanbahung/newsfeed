<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

include('accessDB/model/theloai_model.php');


class TheLoai_Controller extends Base_Controller
{
    public function indexAction()
    {
        // Model
        $m_sp = new theloai_model();
        
        $data = array(
            'view' => 'theloai/index',
            'title'  => '' ,
            'form_title'  => 'Danh mục thể loại' ,
            'theloai' => $m_sp->GetAllTheLoai()            
        );        
      
        $this->view->load('shared/MainLayout', $data); //  public function load($layout, $data = array()) : sau Ã„â€˜ÃƒÂ³ hÃƒÂ m Layout.php sÃ¡ÂºÂ½ gÃ¡Â»ï¿½i $view.php Ã„â€˜Ã¡Â»Æ’ include vÃƒÂ o
         
      
    }
    
    
    
    public function updateAction()
    {
        
        if (isset($_POST)) {           
            if(isset($_POST['submit']))
            {
                // do post
                $id = trim($_POST['id']);
                $ten= trim($_POST['ten']);
                $tenkhongdau= trim($_POST['tenkhongdau']);
                
                $m_sp = new theloai_model();
                
                $data = [
                    'id'        => $id,
                    'ten'    => $ten,
                    'tenkhongdau' => $tenkhongdau,                    
                    'title_err' => '',
                    'body_err' => ''
                ];
                
              $m_sp->updateTheLoai($data);                             
              
              header("Location: http://localhost/newsfeed/admin.php?c=theloai");
              die();
          
                
            } // if submit
            
        } // if POST
        
        if (isset($_GET)) {
            // do get            
            
            $m_sp = new theloai_model();
            $id = $_GET['id'];
            
            $data = array(
                'view' => 'theloai/update',
                'form_title'  => 'Cập nhật thể loại' ,                
                'theloai' => $m_sp->getTheLoaiId($id)                
                
            );  
            
            $this->view->load('shared/MainLayout', $data);
            
           
        } // end if GET
        
        
    } // end function updateAction()
    
    
  
    
            
    
    
}// end class