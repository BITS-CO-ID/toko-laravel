<?php

class Attribute extends Eloquent {

    protected $table = 'product_attr';
    protected $fillable = array('name');
    public static $rules = array(
        'name' => 'required|min:4',
    );
    
    public function Products() {
        return $this->belongsToMany('Product', 'product_attr');
    }
    
    public function Values(){
        return $this->hasMany('Attrval','attr_id');
    }

}
