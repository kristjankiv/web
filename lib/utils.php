<?php
/**
 * Created by PhpStorm.
 * User: kristjan.kivastik
 * Date: 12.04.2017
 * Time: 9:11
 */
function fixUrl($val){
    return urlencode($val);
}
function fixDb($val){
    return '"'.addslashes($val).'"';
}
?>
