<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class ReadURL 
{
    public function __construct()
    {
       
    }
     
    /* gets the data from a URL */
	public function get_data($url) {
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
}