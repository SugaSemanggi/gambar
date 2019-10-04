<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $fillable = [
        'nama_subcategory', 'description', 'root_category_id'
    ];

    public function rootcategory()
    {
        return $this->belongsTo('App\RootCategory', 'root_category_id', 'id');
    }

}
