<?php
function debugger($array, isDie = 0){
echo "<pre>";
print_r($array);
echo "</pre>";
}
if(isDie){
exit;
}
?>