<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cat extends Model {
    protected $table = 'cats';
    protected $fillable = ['name', 'date_of_birth', 'breed_id'];
    
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function breed() {
        return $this->belongsTo('Furbook\Breed');
    }
}
