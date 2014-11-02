<?php 
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Sermon extends Eloquent implements SluggableInterface{
	use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'srTitle',
        'save_to'    => 'srSlug',
    );
}  
?>