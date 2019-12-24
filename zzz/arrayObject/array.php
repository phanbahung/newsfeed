

<?php
 
$loaitin['11']='Pháp luật';
$loaitin['12']='Thời sự';
$theloai['Xã hội']=$loaitin;

$loaitin=null;

$loaitin['21']='Máy tính';
$loaitin['22']='Vũ trụ';
$theloai['Khóa học']=$loaitin;

//echo $theloai

//print_r($theloai);

echo  "<select name=\"theloai\">";
foreach($theloai as $tl => $g_loaitin){
    echo "<optgroup label='".$tl."'>";

		foreach($g_loaitin as $id_loaitin => $ten_loatintin){
			echo "<option value=\"$id_loaitin\" selected>$ten_loatintin</option>";
		}
    echo "</optgroup>";
}     

echo "</select>";
?>