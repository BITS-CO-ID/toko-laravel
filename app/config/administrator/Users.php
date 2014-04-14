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
        'first_name' => array(
            'title' => 'Name',
            'select' => "(:table).first_name",
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'first_name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
    ),
//
//	/**
//	 * The editable fields
//	 */
    'edit_fields' => array(
        'first_name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
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
