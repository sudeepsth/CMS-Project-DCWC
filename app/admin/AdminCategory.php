<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class AdminCategory extends Model
 {

    use HasSlug;

    protected $table = 'category';
    protected $guarded = ['id'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('category_name')
            ->saveSlugsTo('slug');
    }

    public static function getCategoryList(){
        $data = DB::table('category')
                ->where('status','1')
                -> orderBy('category_name', 'ASC')
    			-> get();

    	return $data; 
    }

}
