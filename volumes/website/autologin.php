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
        $_GET['server'] = 'mysql';
        $_GET['username'] = 'root';
        $_GET['password'] = 'P@ssw0rd';
        $_GET['db'] = 'mysql';
        return new AdminerSoftware;
    }
    require_once("./adminer-4.2.5.php");
