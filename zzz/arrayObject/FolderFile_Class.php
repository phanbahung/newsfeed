<?php 
class FolderFile_Class
{
    public $name;
    public $type;
	public $size;

    public function __construct($name, $type, $size)
    {
         $this->type = $type;
         $this->name = $name;
		 $this->size = $size;
    }    

    
    
}

