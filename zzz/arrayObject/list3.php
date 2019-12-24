<?php
include_once 'FolderFile_Class.php';
?>
	

<?php 
 
 $pages_array = array(
    array(
       'name' => 'index',
       'type' => 'Site Index',
       'size' => 'interior'
     ),

     array(
        'name' => 'a',
        'type' => 'Layout A',
        'size' => 'interior'
     )    
 );
 
 // ---- Truy xuất
 
 // ----- Cách 1 
	$num_folders = count($pages_array); 
	for($i=0; $i<$num_folders;$i++){ 
			echo $pages_array[$i]['name']."\n";   
			echo $pages_array[$i]['type']."\n";   
			echo $pages_array[$i]['size']."\n";   
	   }

		echo "<br/>";
// ---- Cách 2
	foreach ($pages_array as $key =>$value)
	{
		echo $key. '. Name: '. $value['name'].' - ';
		echo 'Type: '.$value['type'].' - ';
		echo 'Size: '.$value['size']."<br/>";
	}
 

?>