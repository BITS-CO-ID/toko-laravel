<?php

class Attrval extends Eloquent {

    protected $table = 'attr_value';
    protected $fillable = array('value');
    public static $rules = array(
        'value' => 'required',
    );
    
    public function Attributes() {
        return $this->belongsTo('Attribute','attr_id');
    }

}
