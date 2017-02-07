<?php
// echo phpinfo();
function adminer_object() {

  class AdminerSoftware extends Adminer {

    function credentials() {
      // server, username and password for connecting to database
      return array('mysql', 'root', 'P@ssw0rd');
    }

  }

  return new AdminerSoftware;
}

include "./adminer-4.2.5.php";
