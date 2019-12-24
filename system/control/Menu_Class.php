<?php 
class Menu_Class
{
    public $id;
    public $name;    
    public $link;    
    public $child;

    public function __construct($id, $name,$link, $child=null)
    {
         $this->id = $id;
         $this->name = $name;
         $this->link = $link;
		 $this->child = $child;
    }        
    
}

