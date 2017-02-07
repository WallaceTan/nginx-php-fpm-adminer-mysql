<?php
function adminer_object() {
        class AdminerSoftware extends Adminer {
            function credentials() {
                // server, username and password for connecting to database
                return array('mysql', 'root', 'P@ssw0rd');
            }
            function database() {
                // database name, will be escaped by Adminer
                return 'mysql';
            }
        }

        $_GET['server'] = $_ENV['MYSQL_SERVER'];
        $_GET['username'] = $_ENV['MYSQL_USER'];
        $_GET['password'] = $_ENV['MYSQL_PASS'];
        $_GET['db'] = $_ENV['MYSQL_DB'];
        return new AdminerSoftware;
    }
    require_once("./adminer-4.2.5.php");
