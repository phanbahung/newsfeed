<?php 
 class SelectList
{
    protected $options;
    protected $name;
    public $DataValueField ;
    public $DataLabelField ;
    

    public function __construct($name, $options)
    {
         $this->options = $options;
         $this->name = $name;
    }

    public function render($id, $value)
    {
       $html = "<select name='" . $this->name . "'>\n";
        foreach ($this->options as $option)  
         { 
             $html .= "<option value='". $option->id. "'>" . $option->ten."</option>";            
         } 
         $html .= "</select>\n";
        return $html;
    }
    
    
    public function new_render($selectedValue=null)
    {
        
        // Lay truong can thiet trong mang de render
        $value_name = $this->DataValueField;
        $label_name = $this->DataLabelField;
        $input_options =  $this->options;
        
        $num = count( $input_options);
        for($i=0 ; $i<$num ; $i++){
            $new_array[] =array ('value'=> $input_options[$i]->$value_name, 'label'=> $input_options[$i]->$label_name )	;            
        }        
        
        // Render        
        
        $html = "<select name='" . $this->name . "'>\n";
        foreach ($new_array as $index => $value)
         {
             //$html .=  "<option value='".$value['value'] ."'>". $value['label']."</option>";     
             
             $html .= "<option value=\"". $value['value'] ."\"";
             
             if ($selectedValue ==  $value['value'] )
                 $html .= " selected=\"selected\"";
             
             $html .= ">". $value['label'] ."</option>\n";
            
         }
         
        $html .= "</select>\n";
        echo $html;
    }
}

