<?php
$year = 2025;

if($year % 4 == 0 && $year % 100 !=0 || ($year % 400 == 0))
{
    echo "$year est année bissextile";
}
 else 
 {
    echo "$year est pas année bissextile";
}


 
?>