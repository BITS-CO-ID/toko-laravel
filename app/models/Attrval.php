<?php

class Attrval extends Eloquent {

    protected $table = 'attr_value';
    protected $fillable = array('value');
    public static $rules = array(
        'value' => 'required',
    );
    
    public function attributes() {
        return $this->belongsTo('Attribute','attr_id');
    }

}
