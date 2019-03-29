<?php

namespace App\site;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = "admin_menus";

    protected $fillable = ['id','name'];


     public function menu_items()
    {
        return $this->hasMany(Menu_items::class,'menu');
    }
}
