<?php
include_once 'FolderFile_Class.php';
?>
	

<?php
 
 
 $pages_array[] = new FolderFile_Class('TMS', 'folder','35');
 $pages_array[] = new FolderFile_Class('TTR', 'folder','35');
 $pages_array[] = new FolderFile_Class('TPR', 'folder','35');
 $pages_array[] = new FolderFile_Class('E-Ofice', 'folder','35');
 
 
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