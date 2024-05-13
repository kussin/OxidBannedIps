<?php
// BANNED IPS
include_once dirname(__FILE__) . "/banned_ips.inc.php";

// GET REMOTE IP
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $sRemoteIp = $_SERVER['HTTP_CLIENT_IP'];

} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $sRemoteIp = $_SERVER['HTTP_X_FORWARDED_FOR'];

} else {
    $sRemoteIp = $_SERVER['REMOTE_ADDR'];
}

// CHECK REMOTE IP
if (in_array($sRemoteIp, $aBannedIps)) {
    // BLOCK IP
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this page.');
}