<?php

$T=time();
date_default_timezone_set("Asia/Rangoon");
$mydate=getdate(date("U"));
$Date = "$mydate[mday] - $mydate[month] - $mydate[year]   $mydate[weekday]  ";
$Time = ( date("h:i:s A",$T));
?>