
<?php
include_once 'system/control/SelectList.php';
include_once 'system/control/SelectListGroup.php';
?>
	
<div class="panel-heading">
        <?php    echo $form_title;  ?>
</div>

 <div class="panel-body">		
	
<form class="form-horizontal" method="POST"  action="http://localhost/newsfeed/admin.php?c=theloai&a=update">
	
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">ID</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" readonly ="readonly"  name="id" aria-describedby="basic-addon1" value="<?=$theloai->id?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">Tên</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" placeholder="Email" name="ten" aria-describedby="basic-addon1" value="<?=$theloai->Ten?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">Tên không dấu</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" name="tenkhongdau" aria-describedby="basic-addon1" value="<?=$theloai->TenKhongDau?>">    
  </div>
</div>

 
    
     <a href="admin.php?c=theloai" class="btn btn-light"><i class="fa fa-backward"></i> Quay lại</a>
     <button type="submit" name="submit" class="btn btn-success">Lưu thay đổi</button>

</form>      	



</div> <!--end panel-body-->    		   
			