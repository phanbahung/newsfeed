<?php 
class SelectOption
{
    public $label;
    public $value;
    protected $isSelected;

    public function __construct($value, $label, $isSelected = false)
    {
      //Assign the properties
        $this->label = $label;
        $this->value = $value;
        $this->isSelected = $isSelected;
        
    }

    public function render()
    {
        $html .= '<option value="' . $this->value . '"';
        if ($this->isSelected)
        {
         $html .= ' selected="selected" ';
        }
       $html .= '>' . $this->label . "</option>\n";
    }
}