<?php
include_once 'SelectList.php';
include_once 'SelectOption.php';

?>
	

<?php 


function changekeyname($array, $newkey, $oldkey)
{
   foreach ($array as $key => $value) 
   {
      if (is_array($value))
         $array[$key] = changekeyname($value,$newkey,$oldkey);
      else
        {
             $array[$newkey] =  $array[$oldkey];    
        }
   }
   unset($array[$oldkey]);          
   return $array;   
}






 
 $pages_array[] = new SelectOption('TMS', 'TMS');
 $pages_array[] = new SelectOption('TTR', 'TTR');
 $pages_array[] = new SelectOption('win', 'win');
 
 $select = new SelectList('ungdung',$pages_array);
 $select->DataValueField="value";
 echo $select->render('nb','nb'); 
 
 $datos = array
    (
        '0' => array
            (
                'no' => 1,
                'id_maquina' => 1,
                'id_transaccion' => 1276316093,                
            ),

        '1' => array
            (
                'no' => 2,
                'id_maquina' => 2,
                'id_transaccion' => 1276494575,                
            )
    );
	
	
//$datos= changekeyname($datos, 'so', 'no');
	
 $num_folders = count($datos);
 
	for($i=0; $i<$num_folders;$i++){ 
			echo $datos[$i]->no."\n";   
	   }

?>