<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Control_Library 
{
    public function __construct()
    {
        echo '<h3>Class Upload_Library Ä‘Æ°á»£c khá»Ÿi táº¡o</h3>';
    }
     
    public function upload()
    {
        echo '<h3>Method Upload Ä‘Æ°á»£c gá»�i tá»›i</h3>';
    }
    
    
   
    
    function createSelectBox($arr){
        
        $options= '<select>';
        for($i=0; $i <= count($arr); $i++){
            $options .= sprintf("<option value='%s'>%s</option>", $arr[$i]['ID'], $arr[$i]['title']);
        }
        $options .= '</select>';
        return $options;
    }
    
    
    public static function viewSelect($name = "select", $arr_options = array()) {
        $html = "<select name='$name'>\n";
        foreach ($arr_options as $key => $val) {
            $html .= "<option value='$key'>$val</option>\n";
        }
        $html .= "</select>\n";
        return $html;
    }
    
    
    
    
  
    
    
}