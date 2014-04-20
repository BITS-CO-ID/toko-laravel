<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Sliders',
    'single' => 'slider',
    'model' => 'slider',
    /**
     * The display columns
     */
    'columns' => array(
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="' . asset('uploads/sliders/thumbs/small/(:value)') . '" />',
            'sortable' => false,
        ),
        'name' => array(
            'title' => 'Name',
        ),
        'link' => array(
            'title' => 'Link',
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'name' => array(
            'title' => 'Name',
        ),
        'link' => array(
            'title' => 'Link',
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
        'link' => array(
            'title' => 'Link',
            'type' => 'text',
        ),
        'image' => array(
            'title' => 'Image',
            'type' => 'image',
            'location' => public_path() . '/uploads/sliders/originals/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(65, 57, 'crop', public_path() . '/uploads/sliders/thumbs/small/', 100),
                array(220, 138, 'landscape', public_path() . '/uploads/sliders/thumbs/medium/', 100),
                array(383, 276, 'fit', public_path() . '/uploads/sliders/thumbs/full/', 100)
            )
        ),
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
    'sort' => array(
        'field' => 'lft',
        'direction' => 'asc',
    ),
);
