<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    protected $table = 'classifieds';

    protected $fillable = ['title', 'category_id', 'description', 'price', 'condition', 'main_image', 'location', 'email', 'phone', 'owner_id'];

    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
