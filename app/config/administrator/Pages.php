<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Pages',
    'single' => 'page',
    'model' => 'Page',
    /**
     * The display columns
     */
    'columns' => array(
        'ads' => array(
            'title' => 'Name',
            'output' => function($value) {
        return item_depth($value['depth']) . $value['name'];
    }
        ),
        'slug_url' => array(
            'title' => 'URL',
            'sortable' => false,
        ),
        'template' => array(
            'title' => 'Template',
            'sortable' => false,
        ),
        'parent' => array(
            'title' => 'Parent',
            'output' => function($value) {
        return $value['name'];
    }, //what column or accessor on the other table you want to use to represent this object
            'sortable' => false,
        )
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'name' => array(
            'title' => 'Name',
        ),
        'slug' => array(
            'title' => 'Slug',
        ),
        'parent' => array(
            'type' => 'relationship',
            'title' => 'Parent',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'status' => array(
            'type' => 'bool',
            'title' => 'Active',
        ),
        'template' => array(
            'type' => 'enum',
            'title' => 'Template',
            'options' => array('Home', 'Page', 'About', 'News','Categories'),
        ),
    ),
//
//	/**
//	 * The editable fields
//	 */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'slug' => array(
            'title' => 'Slug',
            'type' => 'text',
        ),
        'parent' => array(
            'type' => 'relationship',
            'title' => 'Parent',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'description' => array(
            'type' => 'wysiwyg',
            'title' => 'Description',
        ),
        'template' => array(
            'type' => 'enum',
            'title' => 'Template',
            'options' => array('Home', 'Page', 'About', 'News','Categories'),
        ),
        'status' => array(
            'type' => 'bool',
            'title' => 'Active',
        )
    ),
    'sort' => array(
        'field' => 'lft',
        'direction' => 'asc',
    ),
    'actions' => array(
//Ordering an item up
        'move_up' => array(
            'title' => 'Move Up',
            'messages' => array(
                'active' => 'Moving up...',
                'success' => 'Pages Saved',
                'error' => 'There was an error while moving up page',
            ),
            //the settings data is passed to the closure and saved if a truthy response is returned
            'action' => function($data) {
        $data->moveLeft();

        return true;
    }
        ),
        'move_down' => array(
            'title' => 'Move Down',
            'messages' => array(
                'active' => 'Moving Down...',
                'success' => 'Page Saved',
                'error' => 'There was an error while moving down page',
            ),
            //the settings data is passed to the closure and saved if a truthy response is returned
            'action' => function($data) {
        $data->moveRight();

        return true;
    }
        ),
    ),
    'form_width' => 600,
);
