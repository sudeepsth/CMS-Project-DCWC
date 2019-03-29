<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class AdminNewsEvent extends Model
{
    use HasSlug;

    protected $table = 'news_events';
    protected $guarded = ['id'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public static function getUserEmailAddress(){
        return DB::table('user_mail')
                ->where('status','1')
                ->get();
    }

    public static function getCategoryUserEmailAddress($id){
        return DB::table('user_mail')
                ->whereIn('title', $id)
                ->where('status','1')
                ->get();
    }

}
