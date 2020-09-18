<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

  //protected $touches = ['post'];
    // Relationship
    public function post() {
        //return $this->belongsTo('App\Post');
    }
}
