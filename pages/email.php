<?php
	$ip='127.0.0.1';
    $pingresult = exec("/bin/ping -n 3 $ip", $outcome, $status);
    if (0 == $status) {
        $status = "alive";
    } else {
        $status = "dead";
    }
    echo "Uh, The IP address, $ip, is  ".$status;
?>
