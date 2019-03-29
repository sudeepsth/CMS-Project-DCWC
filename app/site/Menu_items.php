<?php

namespace App\site;

use Illuminate\Database\Eloquent\Model;

class Menu_items extends Model

{

	protected $table="admin_menu_items";

    protected $fillable=['label','link','parent','sort','class','menu','depth'];

     public function menu()
    {
        return $this->belongsTo('App\site\Menu','menu');
    }
}
