<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class File_Library 
{
    public function __construct()
    {
        echo '<h3>Class Upload_Library được khởi tạo</h3>';
    }
     
    public function upload()
    {
        echo '<h3>Method Upload được gọi tới</h3>';
    }
}