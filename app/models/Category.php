<?php

class Category extends Baum\Node {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';
    protected $fillable = array('name', 'slug');
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
        'slug' => 'required|unique:categories,slug',
    );

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = getSlug($value);
    }

    public function products() {
        return $this->hasMany('Product');
    }

}
