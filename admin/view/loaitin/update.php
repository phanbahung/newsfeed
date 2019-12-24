
<?php
include_once 'system/control/SelectList.php';

?>


<div class="panel-heading">
         <?php    echo $form_title;  ?>
</div>

 <div class="panel-body">

	
	
<form class="form-horizontal" method="POST"  action="admin.php?c=loaitin&a=update">
	
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">ID</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" readonly ="readonly"  name="id" aria-describedby="basic-addon1" value="<?=$loaitin->id?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">TÃªn</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" placeholder="Email" name="ten" aria-describedby="basic-addon1" value="<?=$loaitin->Ten?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">TÃªn khÃ´ng dáº¥u</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" name="tenkhongdau" aria-describedby="basic-addon1" value="<?=$loaitin->TenKhongDau?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">Thể loại</label>  
  <div class="col-md-4">  	
  	<?php
  	
  	     $selTheLoai = new SelectList('theloai',$theloai);
  	     $selTheLoai->DataLabelField="Ten";
  	     $selTheLoai->DataValueField="id";
  	     $selTheLoai->new_render($loaitin->idTheLoai);	
  	?>
      
  </div>
</div>

 
    
     <a href="admin.php?c=loaitin" class="btn btn-light"><i class="fa fa-backward"></i> Quay láº¡i</a>
     <button type="submit" name="submit" class="btn btn-success">LÆ°u thay Ä‘á»•i</button>

</form>  



</div> <!--end panel-body-->    		   
			