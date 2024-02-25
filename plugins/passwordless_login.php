<?php
class AdminerLoginPasswordLess {

    /**
     * Authorize in database
     *
     * enter your localhost, username and password
     * @return string[]
     */
    public function credentials() {
        return array("127.0.0.1|localhost", "username", "password|empty_string");
    }
    function login($login, $password) {
            return true;
    }
}
