<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class News extends Model {
    use Resizable;
    protected $table = 'posts';
    public function author(){
        return $this->belongsTo('App\User');
    }
}
