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
        'slug' => array(
            'title' => 'Slug',
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
        ),
        'template' => array(
            'type' => 'enum',
            'title' => 'Template',
            'options' => array('Home', 'Page', 'About', 'News'),
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
);
