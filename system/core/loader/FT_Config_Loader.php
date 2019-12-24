<?php
/**
 * @package     FT_Framework
 * @author      Freetuts Dev Team
 * @email       freetuts.net@gmail.com
 * @copyright   Copyright (c) 2015
 * @since       Version 1.0
 * @filesource  system/core/loader/FT_Config_Loader.php
 */
class FT_Config_Loader
{
    // Danh sÃ¡ch config
    protected $config = array();
     
    /**
     * Load helper
     * 
     * @param   string
     * @desc    hÃ m load helper, tham sá»‘ truyá»�n vÃ o lÃ  tÃªn cá»§a helper
     */
    public function load($config)
    {
        if (file_exists(PATH_APPLICATION . '/config/' . $config . '.php')){
            $config = include_once PATH_APPLICATION . '/config/' . $config . '.php'; // đọc file
            if ( !empty($config) ){ //key la index      
                foreach ($config as $key => $item){               // duyệt qua tưng fkey
                    $this->config[$key] = $item;
                }
            }
            return true;
        }
        return FALSE;
    }
     
    /**
     * Get item config
     * 
     * @param   string
     * @param   string
     * @desc    hÃ m get config item, tham sá»‘ truyá»�n vÃ o lÃ  tÃªn cá»§a item vÃ  tham sá»‘ máº·c Ä‘á»‹nh
     */
    public function item($key, $defailt_val = '')
    {
        return isset($this->config[$key]) ? $this->config[$key] : $defailt_val;
    }
     
    /**
     * Set item config
     * 
     * @param   string
     * @param   string
     * @desc    hÃ m set config item, tham sá»‘ truyá»�n vÃ o lÃ  tÃªn cá»§a item vÃ  giÃ¡ trá»‹ cá»§a nÃ³
     */
    public function set_item($key, $val){
        $this->config[$key] = $val;
    }
}