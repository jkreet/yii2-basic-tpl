<?php
function adminer_object() {

    class AdminerSoftware extends Adminer {

//        function name() {
//            // custom name in title and heading
//            return 'lalala';
//        }

        function credentials() {
            // server, username and password for connecting to database
            return array('db', 'root', 'root');
        }

        function database() {
            // database name, will be escaped by Adminer
            return 'basic';
        }

        function login($login, $password) {
            // validate user submitted credentials
            return ($login == 'root' && $password == 'root');
        }
    }

    return new AdminerSoftware;
}

include "./adminer.php";