<?php 
 class SelectList
{
    protected $options;
    protected $name;
    public $DataValueField ;
    public $DataLabelField ;
    

    public function __construct($name, $options)
    {
       $this->name = $name;
	   $this->options = $options;
    }

    public function render()
    {
       //$html = "<select name='" . $this->name . "'>\n";
	   $html = '<select name='. "\"$this->name\"" . '>';
        foreach ($this->options as $option)  
         { 
            $html .= "<option value='". $option->value. "'>" . $option->label ."</option>\n";            
			//$html .= "<option value='bahung'>con cac</option>";            
         } 
         $html .= "</select>\n";
        return $html;
    }
	
	
	
	



}

