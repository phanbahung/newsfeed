

<?php

// Định nghĩa một hằng số bảo vệ project
define("IN_SITE", true);
 
//  Ä�Æ°á»�ng dáº«n tá»›i há»‡  thá»‘ng
define('PATH_SYSTEM', __DIR__ .'/system');


define('PATH_APPLICATION', __DIR__ . '/websites');
 
// Láº¥y thÃ´ng sá»‘ cáº¥u hÃ¬nh
require (PATH_SYSTEM . '/config/config.php');

 
//má»Ÿ file FT_Common.php, file nÃ y chá»©a hÃ m FT_Load() cháº¡y há»‡ thá»‘ng
include_once PATH_SYSTEM . '/core/FT_Common.php'; 
// ChÆ°Æ¡ng trÃ¬nh chÃ­nh
FT_load();