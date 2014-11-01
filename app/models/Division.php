<?php 
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Division extends Eloquent implements SluggableInterface {
	use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'dvName',
        'save_to'    => 'slug',
    );
}  
?>