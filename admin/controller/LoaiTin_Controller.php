<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

require_once ('accessDB/model/loaitin_model.php');
require_once ('accessDB/model/theloai_model.php');


class LoaiTin_Controller extends Base_Controller
{
    public function indexAction()
    {
        // Model
        $m_sp = new loaitin_model();
        
        $data = array(
            'view' => 'loaitin/index',
            'title'  => '' ,
            'form_title'  => 'Danh mục loại tin' ,
            'loaitin' => $m_sp->GetAllLoaiTin()           
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
                $idtheloai= trim($_POST['theloai']);
                
                $m_sp = new loaitin_model();
                
                $data = [
                    'id'     => $id,
                    'ten'    => $ten,
                    'tenkhongdau' => $tenkhongdau,        
                    'idtheloai'=> $idtheloai,
                    'msg' => '',
                    'body_err' => ''
                ];
                
              $m_sp->updateLoaiTin($data);
              
              header("Location: admin.php?c=loaitin");
              //die();
          
                
            } // if submit
            
        } // if POST
        
        if (isset($_GET)) {
            // do get            
            
            $m_loaitin = new loaitin_model();
            $m_theloai = new theloai_model();
            $id = $_GET['id'];
            
            $data = array(
                'view' => 'loaitin/update',
                'form_title'  => 'Cập nhật danh mục loại tin' ,                
                'loaitin' => $m_loaitin->getLoaiTinById($id) ,
                'theloai' => $m_theloai->GetAllTheLoai(),                
            );  
            
            $this->view->load('shared/MainLayout', $data);            
           
        } // end if GET
        
        
    } // end function updateAction()
    
    
    public function deleteAction()
    {
        if (isset($_POST)) {
            // do post
            $id = trim($_POST['id']);
            
            $tintuc_model= new tintuc_model();
            $tintuc = $tintuc_model->GetTinTucById($id);
            $hinh = $tintuc->Hinh;
            $data = [
                'id'        => $id,
                'title_err' => '',
                'body_err'  => ''
            ];
            if( $tintuc_model->deletePost($data))
                unlink(UPLOAD_DIR.$hinh);
                
        } // if POST
        
    }    
    
            
    
    
}// end class