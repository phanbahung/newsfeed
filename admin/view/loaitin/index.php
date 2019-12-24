<div class="panel-heading">
         <?php    echo $form_title;  ?>
</div>

 <div class="panel-body">		
 
			
	<table id='example' class='display' cellpadding='0' cellspacing='0' border='0' >
    <thead>
        <tr>                            
            <th>Id</th>
            <th>Tên</th>
            <th>Không dấu</th>
            <th>Thể loại</th>
            <th>#</th>
            <th>Xóa³a</th>
        </tr>
    </thead>
    <tbody>  
   <?php
	for($i=0; $i<count($loaitin);$i++){
	    ?>
	  <tr class='gradeA'>
                <td> <?=$loaitin[$i]->id?></td>
                <td> <?=$loaitin[$i]->Ten?></td>     
                <td> <?=$loaitin[$i]->TenKhongDau?></td>
                <td> <?=$loaitin[$i]->idTheLoai?></td>
                <td> <a href="admin.php?c=loaitin&a=update&id=<?=$loaitin[$i]->id?>">Chi tiết</a></td>                
                <td> <a id="del_<?=$loaitin[$i]->id?>" href="http://localhost/newsfeed/admin.php?c=theloai&a=update&id=<?=$loaitin[$i]->id?>">Xóa</a></td>
                                                        
       </tr>   
       <?php   	
	  }
    ?> 	        
    </tbody>      
	 </table>
               	


