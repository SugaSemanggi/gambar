<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RootCategory extends Model
{
    protected $fillable=[
        'nama_category', 'description'
    ];

    public function subcategory()
    {
        return $this->hasMany('App\subcategory', 'root_category_id', 'id');
    }
}
