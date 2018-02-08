<?php
$var1 = $_GET('apples');
$var2 = $_GET('oranges');

$filecontent = "you have ".var1." apples, and ".$var2." oranges.\n";

$filestatus	= file_put_contents('myfile.txt',$filecontent,FILE_APPEND);
if($filestatus !=false)
{
 echo "SUCCESS:Data written to file";
}
else
{
 echo "FAIL:could not write to file";
}
?>