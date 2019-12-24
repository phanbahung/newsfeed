<?php
include_once('accessDB/dao/DatabaseSP.php');

class TheLoai_Model {

    private $db;
    public function __construct(){
        $this->db = new DatabaseSP;
    }
    
 	//1
function GetAllTheLoai(){	    
	    $this->db->query('SELECT * FROM theloai ');	    
	    $results = $this->db->resultSet();	    
	    return $results;   	 
	}	
	
	
	
	
 function getTheLoaiId($id){
	    $this->db->query('SELECT * FROM theloai WHERE id = :id');
	    $this->db->bind(':id', $id);	    
	    $row = $this->db->single();	    
	    return $row;
	}
	
	
function updateTheLoai($data){
	    $this->db->query('UPDATE theloai SET Ten = :ten, TenKhongDau = :tenkhongdau WHERE id = :id');
	    // Bind values
	    $this->db->bind(':id', $data['id']);
	    $this->db->bind(':ten', $data['ten']);	    	    
	    $this->db->bind(':tenkhongdau', $data['tenkhongdau']);	    
	    // Execute
	    if($this->db->execute()){
	        return true;
	    } else {
	        return false;
	    }
	}
	
	
	
	public function __destruct(){	    
	    
	    
	}
	


}

?>