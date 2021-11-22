<?php
header('Content-type: application/json');
header('Cache-Control: private,max-age=1');
header('Access-Control-Allow-Origin:*');

$isResponseOpen = true;

if($isResponseOpen){
    $url = "https://www.servelelecciones.cl/data/elecciones_presidente/computo/global/19001.json";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0');
    $resp = curl_exec($curl);
    curl_close($curl);
    $rex = json_decode($resp,true);
    echo '{"state":"open",'.
        '"b":{"v":"'.$rex["data"][0]["c"].'","p":"'.$rex["data"][0]["d"].'"},'.
        '"k":{"v":"'.$rex["data"][1]["c"].'","p":"'.$rex["data"][1]["d"].'"},'.
        '"o":{"v":"'.$rex["data"][2]["c"].'","p":"'.$rex["data"][2]["d"].'"},'.
        '"s":{"v":"'.$rex["data"][3]["c"].'","p":"'.$rex["data"][3]["d"].'"},'.
        '"a":{"v":"'.$rex["data"][4]["c"].'","p":"'.$rex["data"][4]["d"].'"},'.
        '"m":{"v":"'.$rex["data"][5]["c"].'","p":"'.$rex["data"][5]["d"].'"},'.
        '"p":{"v":"'.$rex["data"][6]["c"].'","p":"'.$rex["data"][6]["d"].'"}'.
        '}';
}else{
    echo '{"state":"ded xd"}';
}


?>