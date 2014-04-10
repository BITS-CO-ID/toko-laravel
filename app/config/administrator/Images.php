<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Product Images',
    'single' => 'image',
    'model' => 'image',
    /**
     * The display columns
     */
    'columns' => array(
        'name' => array(
            'title' => 'Name',
            'select' => "(:table).name",
        ),
        'path' => array(
            'title' => 'Image',
            'output' => '<img src="'.asset('uploads/products/thumbs/small/(:value)').'" />',
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
    ),
//
//	/**
//	 * The editable fields
//	 */
    'edit_fields' => array(
        'product' => array(
            'type' => 'relationship',
            'title' => 'Product',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'path' => array(
            'title' => 'Image',
            'type' => 'image',
            'location' => public_path() . '/uploads/products/originals/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(65, 57, 'crop', public_path() . '/uploads/products/thumbs/small/', 100),
                array(220, 138, 'landscape', public_path() . '/uploads/products/thumbs/medium/', 100),
                array(383, 276, 'fit', public_path() . '/uploads/products/thumbs/full/', 100)
            )
        ),
    ),
);
