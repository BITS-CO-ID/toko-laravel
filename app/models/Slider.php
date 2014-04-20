<?php

class Slider extends Baum\Node {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sliders';
    protected $fillable = array('name', 'link', 'status','image');
    protected $parentColumn = 'parent_id';
    // 'lft' column name
    protected $leftColumn = 'lft';
    // 'rgt' column name
    protected $rightColumn = 'rgt';
    // 'depth' column name
    protected $depthColumn = 'depth';
    // guard attributes from mass-assignment
    protected $guarded = array('id', 'parent_id', 'lft', 'rgt', 'depth');
    public static $rules = array(
        'name' => 'required',
        'link' => 'url',
        'image' => 'required|image|max:2000',
    );

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */

}
