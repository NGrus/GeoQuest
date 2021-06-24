<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || 
    $_SERVER['PHP_AUTH_USER'] != "geoquest" || 
    $_SERVER['PHP_AUTH_PW'] != "123456789") 
{
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Sorry, you may not see this page. Good-bye.';
    exit;
} else {
    // echo "<p>Hallo {$_SERVER['PHP_AUTH_USER']}.</p>";
    // echo "<p>Sie gaben {$_SERVER['PHP_AUTH_PW']} als Passwort ein.</p>";
    echo 'You are authenicated :-)';
}
?>
