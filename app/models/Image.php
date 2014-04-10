<?php

class Image extends Eloquent {

    protected $table = 'product_img';
    protected $fillable = array('name', 'path');

    public function product() {
        return $this->belongsTo('Product','product_id');
    }

}
