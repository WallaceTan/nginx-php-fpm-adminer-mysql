<?php
header("Content-Type: text/plain");

$MYSQL_SERVER = $_ENV['MYSQL_SERVER'];
$MYSQL_USER = $_ENV['MYSQL_USER'];
$MYSQL_PASS = $_ENV['MYSQL_PASS'];
$MYSQL_DB = $_ENV['MYSQL_DB'];

echo "\$MYSQL_SERVER = '{$MYSQL_SERVER}'\n";
echo "\$MYSQL_USER = '{$MYSQL_USER}'\n";
echo "\$MYSQL_PASS = '{$MYSQL_PASS}'\n";
echo "\$MYSQL_DB = '{$MYSQL_DB}'\n\n";

echo "\$CONN = mysqli_connect(\$MYSQL_SERVER, \$MYSQL_USER, \$MYSQL_PASS) or die('Could not connect the database : Username or password incorrect');\n\n";
$CONN = mysqli_connect($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASS) or die('Could not connect the database : Username or password incorrect');

echo "mysqli_select_db(\$CONN, \$MYSQL_DB) or die ('No database found');\n\n";
mysqli_select_db($CONN, $MYSQL_DB) or die ('No database found');
echo 'Database Connected successfully';
