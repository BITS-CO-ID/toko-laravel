<?php

class Product extends Eloquent {

    protected $table = 'products';
    protected $fillable = array('name', 'slug', 'price', 'discount', 'stock');
    public static $rules = array(
        'name' => 'required|min:4',
        'price' => 'required|numeric',
        'discount' => 'digits_between:0,100',
        'stock' => 'required|numeric'
    );

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = getSlug($this->attributes['name']);
    }

    public function getFormattedPriceAttribute() {
        return 'Rp. ' . number_format($this->getAttribute('price'), 2);
    }

    public function getFormattedDiscountAttribute() {
        return $this->getAttribute('discount') . ' %';
    }

    public function Categories() {
        return $this->belongsTo('Category', 'cat_id');
    }
    
    public function Images() {
        return $this->hasMany('Image');
    }

}