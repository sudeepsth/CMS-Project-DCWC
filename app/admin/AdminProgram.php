<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class AdminProgram extends Model
 {

    use HasSlug;

    protected $table = 'program_description';
    protected $guarded = ['id'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('program_name')
            ->saveSlugsTo('slug');
    }

    public static function getProgramList(){
        $data = DB::table('program_description')
                ->where('status','1')
                -> orderBy('program_name', 'ASC')
    			-> get();

    	return $data; 
    }

}
