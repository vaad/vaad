<?php

class UserIdentity extends CUserIdentity {

    private $_id;

    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $email = strtolower($this->username);
// from database... change to suite your authentication criteria
        $user = Tenants::model()->find('tnt_email=?', array($email));
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if (md5($this->password) != $user->tnt_password)
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $user->id;
            $this->username = $user->tnt_first_name . ' ' . $user->tnt_last_name;
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    public function getId() {
        return $this->_id;
    }

}