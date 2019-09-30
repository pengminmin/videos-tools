<?php
/**
 * Created by PhpStorm.
 * User: met
 * Date: 2019/9/30
 * Time: 15:49
 */

function dir_list($file)
{
    $file_list = scandir($file);
    foreach($file_list as $item)
    {
        if($item == '.' || $item == '..')continue;
        
        $file_path = $file . '/' . $item;
        if(is_dir($file_path))
        {
            echo "<font color='red'>$file_path</font><br/>";
            dir_list($file_path);
        }
        else{
            echo $file_path . "<br>";
        }
    }
}
dir_list(__DIR__);
