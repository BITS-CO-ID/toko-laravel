<?php

class Image extends Eloquent {

    protected $table = 'product_img';
    protected $fillable = array('name', 'path');
    public static $rules = array(
        'name' => 'required',
        'path' => 'required|image',
        'product_id' => 'required',
    );

    public function product() {
        return $this->belongsTo('Product','product_id');
    }

}
