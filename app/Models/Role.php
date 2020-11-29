<?php
# @Date:   2020-11-16T18:21:55+00:00
# @Last modified time: 2020-11-28T21:11:53+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    public function users()
  {
    return $this->belongsToMany('App\Models\User', 'user_role');
  }
}
