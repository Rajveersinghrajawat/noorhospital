<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    function get_faq()
    {
        return $this->hasMany('App\Models\Faq', 'faq_type')->where('status', 1);
    }

    function get_sub_cat()
    {
        return $this->hasMany('App\Models\SubCategory', 'category_id')->where('status', 1);
    }
}
