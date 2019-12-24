
<?php
include_once 'system/control/SelectListGroup.php';
?>

<div class="panel-heading">
         <?php    echo $form_title;  ?>
</div>

 <div class="panel-body">		
	
<form class="form-horizontal" method="POST"  action="admin.php?c=tintuc&a=update">
	
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">ID</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" readonly ="readonly"  name="id" aria-describedby="basic-addon1" value="<?=$tintuc->id?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">Tiêu đề</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" placeholder="Email" name="tieude" aria-describedby="basic-addon1" value="<?=$tintuc->TieuDe?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">Tiêu đề không dấu</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" name="tieudekhongdau" aria-describedby="basic-addon1" value="<?=$tintuc->TieuDeKhongDau?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">Hình ảnh minh họa</label>  
  <div class="col-md-4"> 
   	
	
	<input type="text" id="txtSelectedFile" name= "txtHinh" style="border:1px solid #ccc;cursor:pointer;padding:4px;width:80%;" value="<?=UPLOAD_DIR.DIR_SEPARATOR.$tintuc->Hinh ?>" onclick="openCustomRoxy2()">
	<br/>
	<img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$tintuc->Hinh ?>" id="customRoxyImage" style="max-width:650px;">
	
    <div id="roxyCustomPanel2" style="display: none;">
      <iframe src="admin/fileman-custom/index.html?integration=custom&type=files&txtFieldId=txtSelectedFile" style="width:100%;height:100%" frameborder="0">
      </iframe>
    </div>
	

  
  </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">Tóm tắt</label>  
  <div class="col-md-4">
  <input type="text" class="form-control" placeholder="Email" name="tomtat" aria-describedby="basic-addon1" value="<?=$tintuc->TomTat?>">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">Nội dung</label>  
  <div class="col-md-8">
   <textarea name="noidung" id="post_content" rows="10" cols="150"  ><?=$tintuc->NoiDung?></textarea>    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="product_id">Thể loại</label>  
  <div class="col-md-4">
  		 <?php         
  		      $selLoaiTin = new SelectListGroup('loaitin',$theloai_loaitin);
             $selLoaiTin->render($tintuc->idLoaiTin);            
         ?>	     
  </div>
</div>  
    
     <a href="admin.php?c=tintuc" class="btn btn-light"><i class="fa fa-backward"></i> Quay lại</a>
     <button type="submit" name="submit" class="btn btn-success">Lưu thay đổi</button>

</form>   


</div> <!--end panel-body-->       


<script type="text/javascript">

	
	function openCustomRoxy2(){
	  $('#roxyCustomPanel2').dialog({modal:true, width:875,height:600});
	}
	function closeCustomRoxy2(){
	  $('#roxyCustomPanel2').dialog('close');
	}	
	
</script>

		   
			