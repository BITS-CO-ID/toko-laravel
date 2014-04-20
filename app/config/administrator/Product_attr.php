<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Product Options',
    'single' => 'attribute',
    'model' => 'attribute',
    /**
     * The display columns
     */
    'columns' => array(
        'name' => array(
            'title' => 'Name',
            'select' => "(:table).name",
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
            'type' => 'text',
        ),
    ),
);
