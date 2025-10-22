<?php
$ip = "devdodger.tech";
$port = 25565;

$fp = @fsockopen($ip, $port, $errno, $errstr, 2);

if ($fp) {
    echo "🟢 Server is Online";
    fclose($fp);
} else {
    echo "🔴 Server is Offline";
}
?>
