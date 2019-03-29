<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class AdminProject extends Model
{
    use HasSlug;

    protected $table = 'project';
    protected $guarded = ['id'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function category(){
    	$data = $this->belongsToMany(AdminCategory::Class, 'rel_project_category');
    	return $data;
    }

    public function gallery(){
    	$data = $this->hasMany(AdminProjectImages::Class,'project_id');
    	return $data;
    }
} 
