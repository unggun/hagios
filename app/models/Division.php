<?php 
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\ModelNotFoundException;



class Division extends Eloquent implements SluggableInterface {
	use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'dvName',
        'save_to'    => 'slug',
    );

    public function articles(){
    	return $this->hasMany('Article');
    }
}  
?>