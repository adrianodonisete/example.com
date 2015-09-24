<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model {
    protected $table = 'cats';
    

    protected $fillable = ['name', 'date_of_birth', 'breed_id'];

    public function breed() {
        return $this->belongsTo('Furbook\Breed');
    }
}
