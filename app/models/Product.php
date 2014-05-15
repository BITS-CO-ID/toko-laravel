<?php

class Product extends Eloquent {

    protected $table = 'products';
    protected $productAttributes;
    protected static $attributeModel = 'Attribute';

    /**
     * The user groups pivot table name.
     *
     * @var string
     */
    protected static $productAttributesPivot = 'pro_attr';
    protected $fillable = array('name', 'slug', 'price', 'discount', 'stock');
    public static $rules = array(
        'name' => 'required|min:4',
        'price' => 'required|numeric',
        'discount' => 'digits_between:0,100',
        'stock' => 'required|numeric',
        'cat_id' => 'required'
    );

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = getSlug($this->attributes['name']);
    }

    public function getFormattedPriceAttribute() {
        return 'Rp.' . number_format($this->getAttribute('price'), 2);
    }

    public function getFormattedDiscountAttribute() {
        return $this->getAttribute('discount') . ' %';
    }

    public function getNetPriceAttribute() {
        return 'Rp.' . number_format($this->getAttribute('price') - ($this->getAttribute('price') * floatval(intval($this->getAttribute('discount')) / 100)), 2);
    }

    public function getUnFormattedNetPriceAttribute() {
        return  $this->getAttribute('price') - ($this->getAttribute('price') * floatval(intval($this->getAttribute('discount')) / 100));
    }

    public function Categories() {
        return $this->belongsTo('Category', 'cat_id');
    }

    public function Images() {
        return $this->hasMany('Image');
    }

    public function Attributes() {
        return $this->belongsToMany(static::$attributeModel, static::$productAttributesPivot);
    }

}
