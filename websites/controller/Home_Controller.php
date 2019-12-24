<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

include('accessdb/model/tintuc_model.php');
include('accessdb/model/loaitin_model.php');
include('accessdb/model/theloai_model.php');
require_once 'system/library/Pagination.php';
include ('system/control/Menu_Class.php');


class Home_Controller extends Base_Controller
{    
    
    public function indexAction()
    {
        // Model
        $m_sp = new tintuc_model();
        
        $data = array(
            'view' => 'home/index',
            'title'  => 'Chào mừng bạn đến với chúng tôi' ,
            'latest_news' => $m_sp->Get_Latest_News(6),
            'slide' => $m_sp->GetTinTucByIdLoai(18,10),
            'tms' => $m_sp->GetTinTucByIdLoai(19,9),
            'sport' => $m_sp->GetTinTucByIdLoai(5,11 ),
            'win' => $m_sp->GetTinTucByIdLoai(6,4)     
        );        
       
        $this->view->load('MainLayout',  $data ); //  public function load($layout, $data = array()) : sau Ã„â€˜ÃƒÂ³ hÃƒÂ m Layout.php sÃ¡ÂºÂ½ gÃ¡Â»ï¿½i $view.php Ã„â€˜Ã¡Â»Æ’ include vÃƒÂ o         
      
    }
    
    
    public function menuAction()
    {
        
        $m_theloai = new theloai_model(); 
        $m_loaitin = new loaitin_model();
        
        $lst_theloai = $m_theloai->GetAllTheLoai();        
        
        //index.php?c=home&a=detail&id=<?=$latest_news[$i]->id?
       foreach ($lst_theloai as $theloai)
        {
            $lst_loaitin = $m_loaitin->GetAllLoaiTinByTheLoai( $theloai->id);
                        
            GLOBAL $menu_sub; // được dùng trong vòng for vì vào trong thì biên dịch ko hiểu
            
            if(count($lst_loaitin)>0){
                foreach ($lst_loaitin as $loaitin)
                {
                    $menu_sub[] = new  Menu_Class($loaitin->id, $loaitin->Ten,"index.php?c=home&a=cat&id_loai=$loaitin->id");
                }
              }
              $menu_array[] = new Menu_Class($theloai->id, $theloai->Ten,"index.php?c=home&a=theloai&id_theloai=$theloai->id",$GLOBALS['menu_sub']);
            
            
            $menu_sub=null;
           
        }      
        
        
     
        
        $data = array(
            'menu' => $menu_array          
            
         );   
         $this->view->load('topmenu', $data);
        
        
    }
    
    
    public function catAction()
    {        
        
        if (isset($_GET)) {
            // do get            
            $m_sp = new tintuc_model();
            $m_loaiTin = new loaitin_model();
            
            $idLoaiTin = $_GET['id_loai'];
            if (isset($_GET['page']))
                $current_page = $_GET['page'];
                else $current_page=1;
            
            $limit =7;// hiển thị mói trang 10 bài
            
            $total = $m_sp->Count_TinTuc($idLoaiTin) ; // tổng số bài viêt của một loại
            
            
            $config = [
                'total' => $total,
                'limit' => $limit,
                'full' => false,
                'querystring' => 'page',
                'link_self' => "index.php?c=home&a=cat&id_loai=$idLoaiTin"
            ];
            
            $page = new Pagination($config);
            //echo $page->getPagination();
            
           $data = array(
                 'view' => 'home/cat',
                 'title'  => 'trang bài viết' ,
                 'baiviet' => $m_sp->GetTinTuc_Paging($idLoaiTin,$limit,$current_page), 
                 'loaiTin' => $m_loaiTin->GetLoaiTinById($idLoaiTin),
                 'page' => $page->getPagination(),
                   
             );
            
            $this->view->load('MainLayout', $data);
            
            
        } // end if get
        
    }
    
    public function theloaiAction()
    {
        
        if (isset($_GET)) {
            // do get
            $m_sp = new tintuc_model();
            $m_loaiTin = new loaitin_model();
            
            $idTheLoai = $_GET['id_theloai'];
            if (isset($_GET['page']))
                $current_page = $_GET['page'];
                else $current_page=1;
                
                $limit =7;// hiển thị mói trang 10 bài
                
                $total = $m_sp->Count_TinTuc_By_TheLoai($idTheLoai) ; // tổng số bài viêt của một loại
                
                
                $config = [
                    'total' => $total,
                    'limit' => $limit,
                    'full' => false,
                    'querystring' => 'page',
                    'link_self' => "index.php?c=home&a=theloai&id_theloai=$idTheLoai"
                ];
                
                $page = new Pagination($config);
                //echo $page->getPagination();
                
                $data = array(
                    'view' => 'home/theloai',
                    'title'  => 'trang bài viết' ,
                    'baiviet' => $m_sp->GetTinTuc_Paging_By_TheLoai($idTheLoai,$limit,$current_page),
                    'loaiTin' => $m_loaiTin->GetLoaiTinById(1),//$idTheLoai),
                    'page' => $page->getPagination(),
                    
                );
                
                $this->view->load('MainLayout', $data);
                
                
        } // end if get
        
    }
    
    
    public function detailAction()
    {
        // Model
        $m_sp = new tintuc_model();
        
        $id = $_GET['id'];
        
        $data = array(
            'view' => 'home/detail',
            'title'  => 'trang bài viết' ,
            'baiviet' => $m_sp->GetTinTucById($id),
            'related_post'=>$m_sp->GetTinTucByIdLoai(18,10),
        );
        
        // return View
        $this->view->load('MainLayout', $data); //  public function load($layout, $data = array()) : sau Ã„â€˜ÃƒÂ³ hÃƒÂ m Layout.php sÃ¡ÂºÂ½ gÃ¡Â»ï¿½i $view.php Ã„â€˜Ã¡Â»Æ’ include vÃƒÂ o
        
    }
    
    
    public function updateAction()
    {
        
        if (isset($_POST)) {           
            if(isset($_POST['submit']))
            {
                // do post
                $id = $_POST['id'];
                $tieude = $_POST['tieude'];
                $loaitin = $_POST['loaitin'];
                $m_sp = new tintuc_model();
                
                $data = [
                    'id' => $id,
                    'tieude' => trim($_POST['tieude']),                    
                    'noidung' => trim($_POST['noidung']),
                    'loaitin' => trim($_POST['loaitin']),
                    'title_err' => '',
                    'body_err' => ''
                ];
                
              $m_sp->updatePost($data);                             
              
              header("Location: http://localhost/newsfeed/admin.php?c=sp");
              die();  
              
              // $this->view->load('MainLayout', $data);
                
            } // if submit
            
        }
        
        if (isset($_GET)) {
            // do get            
            
            $m_sp = new tintuc_model();
            $id = $_GET['id_tin'];
            
            $data = array(
                'view' => 'update',
                'title'  => 'ChÃƒÂ o mÃ¡Â»Â«ng bÃ¡ÂºÂ¡n dÃƒÂ©n trang quan trÃ¡Â»â€¹ cÃ¡Â»Â§a chÃƒÂºng toi' ,
                'tintuc' => $m_sp->getTinTucById($id),
                'loaitin' => $m_sp->GetAllLoaiTin(),
                'theloai'=> $m_sp->Get_TheLoai_TinTuc()
            );  
            
            $this->view->load('MainLayout', $data);
            
           
        } // end if get
        
        
    } // end function updateAction()
    
    
  
    
            
    
    
}// end class