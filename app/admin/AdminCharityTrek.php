<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class AdminCharityTrek extends Model
{
    use HasSlug;

    protected $table = 'charity_trek';
    protected $guarded = ['id'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }


    public function gallery(){
    	$data = $this->hasMany(AdminCharityImages::Class,'charity_id');
    	return $data;
    }

    public function detail(){
    	$data = $this->hasMany(AdminCharityDetails::Class,'charity_id');
    	return $data;
    }
}
