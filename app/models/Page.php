<?php

class Page extends Baum\Node {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected static $moveToNewSlug = NULL;
    protected $table = 'pages';
    protected $fillable = array('name', 'slug', 'template', 'status');
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
        'slug' => 'required|unique:pages,slug',
        'template' => 'required',
    );

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    protected static function boot() {
        parent::boot();

        static::saved(function($node) {
            $node->storeNewSlug();
        });
    }

    public function storeNewSlug() {
        $pslug = Page::find($this->getParentId());
        Page::where('id', $this->getAttributeFromArray('id'))->update(array('slug' => $pslug->slug.'/'.$this->getAttributeFromArray('slug')));
    }

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = getSlug($value);
    }

    public function getSlugUrlAttribute() {
        return url($this->attributes['slug']);
    }

    public function getAdsAttribute() {
        $data = array(
            'name' => $this->attributes['name'],
            'depth' => $this->attributes['depth'],
        );
        return $data;
    }

}
