<?php
include('accessDB/dao/DatabaseSP.php');

class TinTuc_Model {

    private $db;
    public function __construct(){
        $this->db = new DatabaseSP;
    }
    
 	//1
	function GetAllTinTuc(){	    
	    $this->db->query('SELECT * FROM tintuc ');	    
	    $results = $this->db->resultSet();	    
	    return $results;   	 
	}
	
	
	function Get_Latest_News($limit){
	    $this->db->query("SELECT tintuc.*, loaitin.ten as TenLoaiTin,  SUBSTRING(tintuc.TomTat, 1, 40) as TomTat_RutGon FROM tintuc left join loaitin on (loaitin.id = tintuc.idLoaiTin) limit $limit ");
	    $results = $this->db->resultSet();
	    return $results;
	}		

	
	function Count_TinTuc($idLoaiTin){
	    
	    $this->db->query("SELECT id FROM tintuc where idLoaiTin=$idLoaiTin");	    
	    $results = $this->db->rowCount();
	    return $results;
	}
	
	function Count_TinTuc_By_TheLoai($idTheLoai){
	    
	    $this->db->query("SELECT tintuc.id FROM tintuc left join loaitin on (tintuc.idLoaiTin=loaitin.id) where (loaitin.idTheLoai=$idTheLoai)");
	    $results = $this->db->rowCount();
	    return $results;
	}
	
	
	function GetTinTucByIdLoai($idLoaiTin, $limit){	
	    
	    $this->db->query("SELECT tintuc.*, loaitin.*, tintuc.id as idTin, SUBSTRING(tintuc.TomTat, 1, 40) as TomTat_RutGon, loaitin.Ten as TenLoaiTin FROM tintuc left join loaitin on (loaitin.id = tintuc.idLoaiTin) where (tintuc.idLoaiTin=$idLoaiTin) limit $limit ");	    
	    $results = $this->db->resultSet();
	    return $results;	    
	}
	
	
	
	function GetTinTuc_Paging($idLoaiTin, $limit,$page){
	   
	    $start = ($page - 1) * $limit;
	    // 	    total_record: tổng số records
	    // 	    current_page: trang hiện tại
	    // 	    limit: số records hiển thị trên mỗi trang
	    // 	    start: record bắt đầu trong câu lệnh SQL
	    
	    
	    $this->db->query("SELECT tintuc.*, loaitin.*, tintuc.id as idTin, SUBSTRING(tintuc.TomTat, 1, 40) as TomTat_RutGon, loaitin.Ten as TenLoaiTin 
                          FROM tintuc left join loaitin 
                          on (loaitin.id = tintuc.idLoaiTin) where (tintuc.idLoaiTin=$idLoaiTin) limit $start, $limit ");	   
	    $results = $this->db->resultSet();
	    return $results;
	}
	
	
	function GetTinTuc_Paging_By_TheLoai($idTheLoai, $limit,$page){
	    
	    $start = ($page - 1) * $limit;
	    // 	    total_record: tổng số records
	    // 	    current_page: trang hiện tại
	    // 	    limit: số records hiển thị trên mỗi trang
	    // 	    start: record bắt đầu trong câu lệnh SQL
	    
	    
	    $this->db->query("SELECT tintuc.*, loaitin.*, tintuc.id as idTin, SUBSTRING(tintuc.TomTat, 1, 40) as TomTat_RutGon, loaitin.Ten as TenLoaiTin 
                            FROM tintuc left join loaitin
                             on (loaitin.id = tintuc.idLoaiTin) 
	                           where (loaitin.idTheLoai=$idTheLoai) limit $start, $limit ");
	    $results = $this->db->resultSet();
	    return $results;
	}
	
	//1
	function Get_TheLoai_TinTuc(){
	    
	    $this->db->query('SELECT * FROM theloai');
	    $rstheloai = $this->db->resultSet();
	    
	    foreach ($rstheloai as $tl)
	    { 
	        $this->db->query("SELECT * FROM loaitin where idTheLoai=".$tl->id);
	        $rsloaitin = $this->db->resultSet();       
	        if(count($rsloaitin)>0)
    	        foreach ($rsloaitin as $lt)
    	        { 
    	            $loaitin[$lt->id]=$lt->Ten;
    	        }
	        
	        $theloai[$tl->Ten]=$loaitin;
	        $loaitin=null; 
	    }
	    return $theloai;
	    
	} // end Get_TheLoai_TinTuc
	
	
	
	
 function GetTinTucById($id){
	    $this->db->query('SELECT * FROM tintuc WHERE id = :id');
	    $this->db->bind(':id', $id);	    
	    $row = $this->db->single();	    
	    return $row;
	}
	
	
	public function updatePost($data){
	    $this->db->query('UPDATE tintuc SET TieuDe = :tieude, TieuDeKhongDau = :tieudekhongdau, TomTat = :tomtat, NoiDung = :noidung, idLoaiTin=:loaitin, Hinh=:hinh WHERE id = :id');
	    // Bind values
	    $this->db->bind(':id', $data['id']);
	    $this->db->bind(':tieude', $data['tieude']);	    	    
	    $this->db->bind(':tieudekhongdau', $data['tieudekhongdau']);
	    $this->db->bind(':tomtat', $data['tomtat']);
	    $this->db->bind(':noidung', $data['noidung']);
	    $this->db->bind(':loaitin', $data['loaitin']);
	    $this->db->bind(':hinh', $data['hinh']);
	    // Execute
	    if($this->db->execute()){
	        return true;
	    } else {
	        return false;
	    }
	}
	
	
	public function deletePost($data){

	    //1.  Xóa các comment liên quan id tin	    
	    $this->db->query('DELETE FROM comment WHERE idTinTuc = :id');
	    // Bind values
	    $this->db->bind(':id', $data['id']);
	    // Execute
	    if($this->db->execute())
	        
	   //2.  Sau đó mới xóa các tin tức có id=id 	
	    $this->db->query('DELETE FROM tintuc WHERE id = :id');
	    // Bind values
	    $this->db->bind(':id', $data['id']);	    
	    // Execute
	    if($this->db->execute()){
	        return true;
	    } else {
	        return false;
	    }
	}
	
	
	//1
	function GetAllLoaiTin(){
	    $this->db->query('SELECT * FROM loaitin ');
	    $results = $this->db->resultSet();
	    return $results;
	    
	}





}

?>