<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Categories',
    'single' => 'category',
    'model' => 'Category',
    /**
     * The display columns
     */
    'columns' => array(
        'name' => array(
            'title' => 'Name',
            'select' => "(:table).name",
        ),
        'slug' => array(
            'title' => 'Slug',
            'select' => "(:table).slug",
        ),
        'parent' => array(
            'title' => 'Parent',
            'output' => function($value) {
        return $value['name'];
    }, //what column or accessor on the other table you want to use to represent this object
            'sort_field' => 'parent_id',
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
        )
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
        )
    ),
);
