<?php
header('Content-type: application/json');
header('Cache-Control: private,max-age=1');
header('Access-Control-Allow-Origin:*');
echo '{
    "state":"open",
    "b":{"v":"10380","p":"25,00%"},
    "k":{"v":"11380","p":"35,00%"},
    "s":{"v":"19380","p":"5,00%"},
    "o":{"v":"380","p":"5,00%"},
    "a":{"v":"1380","p":"20,00%"},
    "m":{"v":"188030","p":"5,00%"},
    "p":{"v":"10380","p":"5,00%"}
}';
?>