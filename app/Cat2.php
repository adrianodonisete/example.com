<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Cat2 extends Model {

    protected $fillable = ['name', 'date_of_birth', 'breed_id'];

    public function breed() {
        return $this->belongsTo('Furbook\Breed');
    }

}
