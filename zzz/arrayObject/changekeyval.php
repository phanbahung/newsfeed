<?php
include_once 'FolderFile_Class.php';
?>
	

<?php
 
 
 $pages_array = array(
    array(
       'name' => 'tms',
       'type' => 'Site Index',
       'size' => '123123'
     ),

     array(
        'name' => 'ttr',
        'type' => 'Layout A',
        'size' => '23242'
     )    
 );
 
 $value_field="name";
 $label_field="size";
 $select_name ="theloai";
 
 $new_array[];
 
 
 // ----- Chuyeern qua mangr m[is]
	$num_folders = count($pages_array); 	
	for($i=0; $i<$num_folders;$i++){ 
			$new_array[] =array ('value' => $pages_array[$i][$value_field], 'label' => $pages_array[$i][$label_field] );			
	   }

		echo "<br/>";
		
// ---- Cách 2
	foreach ($new_array as $key =>$value)
	{
		echo $key. '. Value: '. $value['value'].' - ';
		echo 'Label: '.$value['labeltype'].' - ';		
	}

echo  "<select name=\"$select_name\">";

foreach($new_array as $index => $value){  
	echo "<option value=\"$value['value']\" selected>$value['label']</option>";	   
}     

echo "</select>";


?>