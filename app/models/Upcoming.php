<?php 
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\ModelNotFoundException;



class Upcoming extends Eloquent implements SluggableInterface {
	use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'uName',
        'save_to'    => 'uSlug',
    );
}  
?>