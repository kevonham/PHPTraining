<?php
function local(){
    global $var_global;
    echo $var_global;
}
$var_global = 5;
local();
 ?>
