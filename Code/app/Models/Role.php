<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $primaryKey = "RoleId";
    protected $table = "roles";
    protected $fillable = ['RoleId','RoleName','created_at','updated_at'];

}
