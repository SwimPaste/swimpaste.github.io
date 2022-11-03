<?php
   if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {echo('\nMSIE');}
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE){echo('\nTrident');}
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE){echo('\nFirefox');}
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE){echo('\nChrome');}
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE){echo('\nOpera Mini');}
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE){echo('\nOpera');}
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE){echo('\nSafari');}
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== FALSE){echo('\nMozilla');} 
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$fh = fopen('logs.txt', 'a'); 
fwrite($fh, ''."".$ip ."\n");
$keys = array(
"yDQPEDE60PALQo74rZsLck3ecipPuvHa",//nouse
"z9QOWqONHsoC4ARPxbbQjym9qE7vmSYv",//nouse
"MXpg82MSzmERnJaVIdVroKFTJUBmCOZE",//nouse
"94Jo1LIKEn6f2STh8f6NZpITmjWCiJfi",//nouse
"kJAXed45qNbT0SqoH1TjFgj3CamlbvVJ",//nouse
"2DUm6sCBrUHqDGz0FmvPIcTc4IU2s483",//nouse
"CCAdiIpFg1goYiHKw5jeAEXGGTMZuyYk",//nouse
"eTJCQKmTDKZ2uNzcXeJg9AWlbdVBIDRC",//nouse
"ywu3bgLpuNenAzn22amYRwPF7JGk4sC1",//nouse
"nw1xUIcOvgqOZT12HkyFLsyJMA62iHv5",//nouse
"3ARPfNQd3xGhicFYGBoDPVtDHqUe9DiS",//nouse
"miTZ2YpTXHrSUd5z8lLdG69HlZKy6NFH",//nouse
"CKs5X64uoIVLAb5lpcJha9XZgZyKGsN1",//nouse
"Xdwhd5TCS7P5y1aUmh35c1mWk1iUXUQi",//nouse
"u6xhPy5zYlXiPhEjFDxYis1LOyu2MJaE",//nouse
"nGPDyNJYcpxE0lRsCJhIYtTI4p0x1iKS"//nouse
);
$sub= $_GET["key"];
if (in_array($sub,$keys,TRUE)) {
    echo "Whitelisted"; 
} else {
    echo "Not Whitelisted"; 
}
?>
