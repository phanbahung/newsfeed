<?php
define('IMAGEPATH', 'upload/bahung/');

if (is_dir(IMAGEPATH)){
    $handle = opendir(IMAGEPATH);
}
else{
    echo 'No image directory';
}

$directoryfiles = array();

while (($file = readdir($handle)) !== false) {
    $newfile = str_replace(' ', '_', $file);
    rename(IMAGEPATH . $file, IMAGEPATH . $newfile);
    $directoryfiles[] = $newfile;
}

foreach($directoryfiles as $directoryfile){
    if(strlen($directoryfile) > 3){
    echo '<img src="' . IMAGEPATH . $directoryfile . '" alt="' . $directoryfile . '" /> <br>';
    }
}

closedir($handle); ?>