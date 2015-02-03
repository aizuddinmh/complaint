<?php 
function runningno()
{
    $sql = mysql_query("SELECT * FROM complaints");
    $row = mysql_num_rows($sql);
 
    return $row + 1;
}

?>
