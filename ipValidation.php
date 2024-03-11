<?php

function splitString($delimiter, $string) // used the splitstring function i did
{
    $result = [];
    $current = '';

    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == $delimiter) {
            $result[] = $current;
            $current = '';
        } else {
            $current .= $string[$i];
        }
    }

    if (!empty($current)) {
        $result[] = $current;
    }

    return $result;
}

function validateIpv4Address($ip)
{
    $octets = splitString('.', $ip); 
    if (count($octets) !== 4) {
        return false;
    }

    foreach ($octets as $octet) {
        if (!ctype_digit($octet) || $octet < 0 || $octet > 255) {
            return false; //if its a character, negaticve or > 255
        }
    }
    return true;
}

$ip1 = "192.168.0.1"; // its a valid one 
$ip2 = "256.0.0.0"; // > 255
$ip3 = "192.168.0"; // 3 octets
$ip4 = "192.168.0.256"; // > 255

echo validateIpv4Address($ip1) ? "$ip1 is a valid IPv4 address\n" : "$ip1 is not a valid IPv4 address\n";
echo validateIpv4Address($ip2) ? "$ip2 is a valid IPv4 address\n" : "$ip2 is not a valid IPv4 address\n";
echo validateIpv4Address($ip3) ? "$ip3 is a valid IPv4 address\n" : "$ip3 is not a valid IPv4 address\n";
echo validateIpv4Address($ip4) ? "$ip4 is a valid IPv4 address\n" : "$ip4 is not a valid IPv4 address\n";