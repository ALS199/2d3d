<?php 
    include('simple_html_dom.php');
	include('Date.php');
    $Url = "https://marketdata.set.or.th/mkt/marketsummary.do";
    $html = file_get_html($Url);
    $i = 0;
    $numArray = array();
    foreach($html->find('td') as $e){
        $i++;
        if($i > 8 ) break;
        $numArray[] = $e->innertext;
    }
    $result = array();

    $f = str_split($numArray[1]);
    $s = str_split($numArray[7]);
    $fNum = $f[count($f)-1];
    $pointPos = strpos($numArray[7],'.');
    $sNum = $s[$pointPos-1];


    
 
    $result["SET"] = $numArray[1];
    $result["VALUE"] = $numArray[7];
    $result["NUMBER"] = $fNum.$sNum;
	$result["Date"] = $Date;
	$result["Time"] = $Time;
	$result["FirstNum"] = $fNum;
	$result["SecondNum"] = $sNum;
	
	
    echo json_encode($result);
?>
