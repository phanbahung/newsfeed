<div class="panel-heading">
         <?php    echo $form_title;  ?>
</div>

 <div class="panel-body">					
		
	<table id='example' class='display' cellpadding='0' cellspacing='0' border='0' >		
    <thead>
        <tr>                            
            <th>Id</th>
            <th>Tiêu đề  </th>
            <th>Loại tin</th>
            <th>Xóa</th>
            <th>Chi tiết</th>
        </tr>
        
    </thead>
    <tbody>  
   <?php
	for($i=0; $i<count($tintuc);$i++){
	    ?>
	  <tr id='<?=$tintuc[$i]->id ?>' class='gradeA'>
                <td> <?=$tintuc[$i]->id?></td>
                <td> <?=$tintuc[$i]->TieuDe?></td>     
                <td> <?=$tintuc[$i]->idLoaiTin?></td>
                <td> <input type="submit" class="btnDeleteAction"  value="Xóa" onClick="DeleteTinTuc(<?php echo $tintuc[$i]->id ?>)"></td>
                <td> <a href="admin.php?c=tintuc&a=update&id_tin=<?=$tintuc[$i]->id?>">Chi tiết</a></td>
       </tr>   
       <?php   	
	   }
       ?> 	        
    </tbody>      
	 </table>
	 
	 
	 
 	<img src="assets/quantri/images/LoaderIcon.gif" id="loaderIcon" style="display:none" width="50px"/>
	
	
</div> <!--end panel-body-->                   	
   
   
<script>


	 function DeleteTinTuc(id) {
			$("#loaderIcon").show();
			queryString = 'id='+id;
			jQuery.ajax({
				url: "admin.php?c=tintuc&a=delete",
				data: queryString,
				type: "POST",
				success: function(data){		
					//$("#txtmessage").val('');
					$("#loaderIcon").fadeOut(2000);
					
					 /* Init the table anh delete row*/
					var oTable = $("#example").DataTable();					
					var nRow = $('#example tbody tr[id='+id+']')[0];
					oTable.fnDeleteRow( nRow, null, true );

				  // alert("tr#"+id);			
				},

				complete :function(data){							
					$("#loaderIcon").fadeOut(2000);				

				  // alert("tr#"+id);			
				},
				
				error:function (){}
				
			});
		}  // end function DeleteTinTuc(id) 	






</script>            		   
			