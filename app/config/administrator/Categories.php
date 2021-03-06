<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Product Categories',
    'single' => 'category',
    'model' => 'Category',
    /**
     * The display columns
     */
    'columns' => array(
        'ads' => array(
            'title' => 'Name',
            'output' => function($value) {
        return item_depth($value['depth']) . $value['name'];
    },
        ),
        'slug' => array(
            'title' => 'Slug',
            'select' => "(:table).slug",
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
    'sort' => array(
        'field' => 'lft',
        'direction' => 'asc',
    ),
);
