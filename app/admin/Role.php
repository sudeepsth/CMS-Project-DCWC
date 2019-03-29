<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    protected $table = 'role';
    protected $guarded = ['id'];

    public static function GetRoleList(){
    	$data = DB::table('role')
                -> orderBy('role_name', 'ASC')
                -> get();

    	return $data; 
    }
    public function users()
{
  return $this->belongsToMany(User::class);
}
}
