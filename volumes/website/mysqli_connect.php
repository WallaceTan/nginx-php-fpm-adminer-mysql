<?php
mysqli_connect('mysql:3306', 'root', 'P@ssw0rd') or die('Could not connect the database : Username or password incorrect');
mysqli_select_db('mysql') or die ('No database found');
echo 'Database Connected successfully';
