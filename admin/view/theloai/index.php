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
            <th>#</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>  
   <?php
	for($i=0; $i<count($theloai);$i++){
	    ?>
	  <tr class='gradeA'>
                <td> <?=$theloai[$i]->id?></td>
                <td> <?=$theloai[$i]->Ten?></td>     
                <td> <?=$theloai[$i]->TenKhongDau?></td>
                <td> <a href="http://localhost/newsfeed/admin.php?c=theloai&a=update&id=<?=$theloai[$i]->id?>">Chi tiết</a></td>                
                <td> <a id="del_<?=$theloai[$i]->id?>" href="http://localhost/newsfeed/admin.php?c=theloai&a=update&id=<?=$theloai[$i]->id?>">Xóa</a></td>
                                                        
       </tr>   
       <?php   	
	  }
    ?> 	        
    </tbody>      
	 </table>
	 
	 
</div> <!--end panel-body-->    	


               		 
 <script type="text/javascript">              		   
$(document).ready(function(){

 // Delete 
 $('.delete').click(function(){
   var el = this;
   var id = this.id;
   var splitid = id.split("_");

   // Delete id
   var deleteid = splitid[1];
 
   // AJAX Request
   $.ajax({
     url: 'remove.php',
     type: 'POST',
     data: { id:deleteid },
     success: function(response){

       if(response == 1){
	 // Remove row from HTML Table
	 $(el).closest('tr').css('background','tomato');
	 $(el).closest('tr').fadeOut(800,function(){
	    $(this).remove();
	 });
      }else{
	 alert('Invalid ID.');
      }

    }
   });

 });

});		


</script>