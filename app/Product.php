<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'details', 'image','category_id',
    ];
    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

}
