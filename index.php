<?php

$host= gethostname();
$ip = gethostbyname($host);

echo "This is a simple php application V2<br>";
echo "Hello from $host and $ip";
