<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

include('accessDB/model/tintuc_model.php');


class TinTuc_Controller extends Base_Controller
{
    public function indexAction()
    {
        // Model
        $tintuc_model = new tintuc_model();
        
        $data = array(
            'view' => 'tintuc/index',
            'form_title'  => 'Danh sách các bài viết' ,
            'tintuc' => $tintuc_model->GetAllTinTuc()            
        );
        
        // Load view giÃƒÂ¡Ã‚Â»Ã¢â‚¬Ëœng return View trong MVC ASP.net
        // giÃƒÂ¡Ã‚Â»Ã¢â‚¬Ëœng return
        $this->view->load('shared/MainLayout', $data); //  public function load($layout, $data = array()) : sau Ã„â€˜ÃƒÂ³ hÃƒÂ m Layout.php sÃ¡ÂºÂ½ gÃ¡Â»ï¿½i $view.php Ã„â€˜Ã¡Â»Æ’ include vÃƒÂ o         
      
    }  
    
    
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
    
    
    public function updateAction()
    {
        
        if (isset($_POST)) {           
            if(isset($_POST['submit']))
            {
                // do post
                $id = trim($_POST['id']);
                $tieude = $_POST['tieude'];
                $loaitin = $_POST['loaitin'];
                $full_path_hinh = $_POST['txtHinh']; // upload/thumuc/hinhanh.jpg
                $hinh = basename($full_path_hinh);//  hinhanh.jpg
                
                
                $tintuc_model= new tintuc_model();
                
                $data = [
                    'id'        => $id,
                    'tieude'    => trim($_POST['tieude']),
                    'tieudekhongdau' => trim($_POST['tieudekhongdau']),
                    'tomtat' => trim($_POST['tomtat']),                    
                    'noidung' => trim($_POST['noidung']),
                    'loaitin' => trim($_POST['loaitin']),
                    'hinh' => $hinh,
                    'title_err' => '',
                    'body_err' => ''
                ];
                
                $tintuc_model->updatePost($data);                             
              
              header("Location: admin.php?c=tintuc");
              die();
          
                
            } // if submit
            
        } // if POST
        
        if (isset($_GET)) {
            // do get            
            
            $tintuc_model= new tintuc_model();
            $id = $_GET['id_tin'];
            
            $data = array(
                'view' => 'tintuc/update',
                'form_title'  => 'Cập nhậtbài viết' ,
                'tintuc' => $tintuc_model->getTinTucById($id),
                'loaitin' => $tintuc_model->GetAllLoaiTin(),
                'theloai_loaitin'=> $tintuc_model->Get_TheLoai_TinTuc()
            );  
            
            $this->view->load('shared/MainLayout', $data);
            
           
        } // end if GET
        
        
    } // end function updateAction()
    
    
  
    
            
    
    
}// end class