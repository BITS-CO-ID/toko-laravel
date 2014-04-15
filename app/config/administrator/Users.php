<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Users',
    'single' => 'user',
    'model' => 'User',
    /**
     * The display columns
     */
    'columns' => array(
        'full_name' => array(
            'title' => 'Name',
            'sort_field' => 'first_name',
        ),
        'email' => array(
            'title' => 'Email'
        ),
        'activate' => array(
            'title' => 'Activated',
        ),
        'group_name' => array(
            'title' => 'Groups',
            'relationship' => 'groups',
            'select' => "GROUP_CONCAT((:table).name)",
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'first_name' => array(
            'title' => 'First Name',
            'type' => 'text',
        ),
        'last_name' => array(
            'title' => 'Last Name',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email'
        ),
        'groups' => array(
            'type' => 'relationship',
            'title' => 'Groups',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'activated' => array(
            'type' => 'bool',
            'title' => 'Activated',
        )
    ),
//
//	/**
//	 * The editable fields
//	 */
    'edit_fields' => array(
        'first_name' => array(
            'title' => 'First Name',
            'type' => 'text',
        ),
        'last_name' => array(
            'title' => 'Last Name',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
        ),
        'password' => array(
            'title' => 'Password',
            'type' => 'password',
        ),
        'groups' => array(
            'type' => 'relationship',
            'title' => 'Groups',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'activated' => array(
            'type' => 'bool',
            'title' => 'Activated',
        )
    ),
    'permission' => function() {
$user = Sentry::getUser();
return true;
},
    'action_permissions' => array(
        'create' => function($model) {
    return true;
},
    ),
);
