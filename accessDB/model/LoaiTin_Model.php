<?php
include_once('accessDB/dao/DatabaseSP.php');

class LoaiTin_Model {

    private $db;
    public function __construct(){
        $this->db = new DatabaseSP;
    }
    
 	//1
function GetAllLoaiTin(){	    
	    $this->db->query('SELECT * FROM LoaiTin ');	    
	    $results = $this->db->resultSet();	    
	    return $results;   	 
	}	
	
	function GetAllLoaiTinByTheLoai($idTheLoai){
	    $this->db->query("SELECT * FROM loaitin where idTheLoai=$idTheLoai");
	    $results = $this->db->resultSet();
	    return $results;
	}
	
	
	
	
 function GetLoaiTinById($id){
	    $this->db->query('SELECT * FROM LoaiTin WHERE id = :id');
	    $this->db->bind(':id', $id);	    
	    $row = $this->db->single();	    
	    return $row;
	}
	
function GetIdTheLoai_By_IdLoaiTin($id){
	    $this->db->query('SELECT idTheLoai FROM loaitin WHERE id = :id');
	    $this->db->bind(':id', $id);
	    $row = $this->db->single();
	    return $row->idTheLoai;
	}
	
	
function updateLoaiTin($data){
	    $this->db->query('UPDATE LoaiTin SET Ten = :ten, TenKhongDau = :tenkhongdau, idTheLoai =:idTheLoai WHERE id = :id');
	    // Bind values
	    $this->db->bind(':id', $data['id']);
	    $this->db->bind(':ten', $data['ten']);	    	    
	    $this->db->bind(':tenkhongdau', $data['tenkhongdau']);	    
		$this->db->bind(':idTheLoai', $data['idtheloai']);
	    // Execute
	    if($this->db->execute()){
	        return true;
	    } else {
	        return false;
	    }
	}
	
	
	function deleteLoaiTin($idLoaiTin){
	    $this->db->query('DELETE FROM LoaiTin WHERE id = :idLoaiTin');	  
	   
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