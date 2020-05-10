<?php
$dir = dirname(__FILE__);
echo "<p>Full path to this dir: " . $dir . "</p>";
echo "<p>Full path to a .htpasswds file in this dir: " . $dir . "/.htpasswds" . "</p>";
echo $_SERVER['DOCUMENT_ROOT'];
?>