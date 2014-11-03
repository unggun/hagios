<?php 
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Article extends Eloquent implements SluggableInterface{
	use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'aTitle',
        'save_to'    => 'aSlug',
    );

    public function division() {
    	return $this->belongsTo('Division');
    }
}  
?>