<?php

$host= gethostname();
$ip = gethostbyname($host);

echo "This is a simple php application<br>";
echo "Hello from $host and $ip";