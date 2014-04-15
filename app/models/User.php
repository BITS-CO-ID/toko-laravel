<?php

class User extends Cartalyst\Sentry\Users\Eloquent\User {

    public static $rules = array(
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required',
    );

    public function getFullNameAttribute() {
        return $this->getAttribute('first_name') . ' ' . $this->getAttribute('last_name');
    }

    public function getActivateAttribute() {
        if ($this->attributes['activated'] == 1) {
            return 'Yes';
        }
        return 'No';
    }

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = empty($value) ? $this->password : $value;
    }

}
