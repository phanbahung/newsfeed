<?php 
class SelectListGroup
{
    protected $options;
    protected $name;

    public function __construct($name, $options)
    {
         $this->options = $options;
         $this->name = $name;
    }

    
    
//     <select>
//     <optgroup label="Swedish Cars">
//     <option value="volvo">Volvo</option>
//     <option value="saab">Saab</option>
//     </optgroup>
//     <optgroup label="German Cars">
//     <option value="mercedes">Mercedes</option>
//     <option value="audi">Audi</option>
//     </optgroup>
//     </select> 
    
    public function render($selected)
    {
        echo  "<select name=\"" . $this->name . "\">";
        foreach($this->options as $tl => $g_loaitin)
        {
            echo "<optgroup label=\"".$tl."\">";
            
            if($g_loaitin!=null)
            {
                foreach($g_loaitin as $id_loaitin => $ten_loaitin)
                {                    
                    echo "<option value=\"".$id_loaitin."\"";
                    
                   if ($selected == $id_loaitin) 
                       echo "selected=\"selected\"";
                    echo ">".$ten_loaitin."</option>";
                }
            }
            
            echo "</optgroup>";
        }
        
        echo "</select>";
    }
    
    
}

