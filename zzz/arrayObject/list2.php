<?php
include_once 'FolderFile_Class.php';
?>
	

<?php
 
 
 // Hoặc
 $pages_array[] = (object) array('name' => 'TMS', 'type' => 'thu muc','size'=>'4545');
 $pages_array[] = (object) array('name' => 'Windows', 'type' => 'thu muc','size'=>'4545');
 $pages_array[] = (object) array('name' => 'Office', 'type' => 'thu muc','size'=>'4545');
 $pages_array[] = (object) array('name' => 'eTax', 'type' => 'thu muc','size'=>'4545');
 
	foreach ($pages_array as $key =>$value)
	{
		echo $key. '. Name: '.$value->name.' - ';
		echo 'Type: '.$value->type.' - ';
		echo 'Size: '.$value->size."<br/>";
	} 
 
 // Cách 1 
	$num_folders = count($pages_array); 
	for($i=0; $i<$num_folders;$i++){ 
			echo $pages_array[$i]->name."\n";   
			echo $pages_array[$i]->type."\n";   
			echo $pages_array[$i]->size."\n";   
	   }
 

?>