<?php 
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Team extends Eloquent implements SluggableInterface {
	use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'tName',
        'save_to'    => 'tSlug',
    );
}  
?>