<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Groups',
    'single' => 'group',
    'model' => 'Group',
    /**
     * The display columns
     */
    'columns' => array(
        'name' => array(
            'title' => 'Name',
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'name' => array(
            'title' => 'Name',
        ),
    ),
//
//	/**
//	 * The editable fields
//	 */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
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
