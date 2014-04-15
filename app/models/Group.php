<?php

class Group extends \Cartalyst\Sentry\Groups\Eloquent\Group {

    public static $rules = array(
        'name' => 'required',
    );

}
