<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Products',
    'single' => 'product',
    'model' => 'Product',
    /**
     * The display columns
     */
    'columns' => array(
        'name' => array(
            'title' => 'Name',
            'select' => "(:table).name",
        ),
        'formatted_price' => array(
            'title' => 'Price',
        ),
        'formatted_discount' => array(
            'title' => 'Discount',
        ),
        'stock' => array(
            'title' => 'Stock',
            'select' => "(:table).stock",
        ),
        'category_name' => array(
            'title' => "Category",
            'relationship' => 'Categories', //this is the name of the Eloquent relationship method!
            'select' => "(:table).name",
        )
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'price' => array(
            'type' => 'number',
            'title' => 'Price',
            'symbol' => 'Rp.', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => '.', //optional, defaults to ','
            'decimal_separator' => ',', //optional, defaults to '.'
        ),
        'discount' => array(
            'title' => 'Discount(%)',
            'type' => 'number',
        ),
        'stock' => array(
            'title' => 'Stock',
            'type' => 'number',
        ),
        'categories' => array(
            'type' => 'relationship',
            'title' => 'Category',
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
            'visible' => function($model) {
        return false; //will only show up before an item is saved for the first time
    },
        ),
        'price' => array(
            'type' => 'number',
            'title' => 'Price',
            'symbol' => 'Rp.', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => '.', //optional, defaults to ','
            'decimal_separator' => ',', //optional, defaults to '.'
        ),
        'discount' => array(
            'title' => 'Discount',
            'type' => 'number',
        ),
        'stock' => array(
            'title' => 'Stock',
            'type' => 'number',
        ),
        'categories' => array(
            'type' => 'relationship',
            'title' => 'Category',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
    ),
);
