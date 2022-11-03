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
   "yDQPEDE60PALQo74rZsLck3ecipPuvHa", //no use
   "z9QOWqONHsoC4ARPxbbQjym9qE7vmSYv", //no use
   "MXpg82MSzmERnJaVIdVroKFTJUBmCOZE", //no use
   "94Jo1LIKEn6f2STh8f6NZpITmjWCiJfi", //no use
   "kJAXed45qNbT0SqoH1TjFgj3CamlbvVJ", //no use
   "2DUm6sCBrUHqDGz0FmvPIcTc4IU2s483", //no use
   "CCAdiIpFg1goYiHKw5jeAEXGGTMZuyYk", //no use
   "eTJCQKmTDKZ2uNzcXeJg9AWlbdVBIDRC", //no use
   "ywu3bgLpuNenAzn22amYRwPF7JGk4sC1", //no use
   "nw1xUIcOvgqOZT12HkyFLsyJMA62iHv5", //no use
   "3ARPfNQd3xGhicFYGBoDPVtDHqUe9DiS", //no use
   "miTZ2YpTXHrSUd5z8lLdG69HlZKy6NFH", //no use
   "CKs5X64uoIVLAb5lpcJha9XZgZyKGsN1", //no use
   "Xdwhd5TCS7P5y1aUmh35c1mWk1iUXUQi", //no use
   "u6xhPy5zYlXiPhEjFDxYis1LOyu2MJaE", //no use
   "nGPDyNJYcpxE0lRsCJhIYtTI4p0x1iKS", //no use
//16 in total
); 
$sub = $_GET["key"];
if (in_array($sub,$keys,TRUE)) {
    echo "заходи❤"; 
} else {
    echo "зачем ты попросил у людей этот скрипт или ты просто дебил"; 
}
?>
