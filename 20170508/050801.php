<?php
function local(){
$var_local = "Hello ";
global $var_global;
echo $var_local . $var_global ;
}
$var_global = "world";
local();
echo $var_local ;
?>
