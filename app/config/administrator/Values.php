<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Product Option Values',
    'single' => 'value',
    'model' => 'Attrval',
    /**
     * The display columns
     */
    'columns' => array(
        'value' => array(
            'title' => 'Value',
            'select' => "(:table).value",
        ),
        'attribute_name' => array(
            'title' => "Attribute",
            'relationship' => 'attributes', //this is the name of the Eloquent relationship method!
            'select' => "(:table).name",
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'value' => array(
            'title' => 'value',
        ),
    ),
//
//	/**
//	 * The editable fields
//	 */
    'edit_fields' => array(
        'attributes' => array(
            'type' => 'relationship',
            'title' => 'Attribute',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'value' => array(
            'title' => 'value',
        ),
    ),
);
