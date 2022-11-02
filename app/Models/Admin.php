<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "admin_petugas";
    protected $primaryKey = 'id_admin_petugas';
    protected $fillable = ['nama', 'email', 'no_hp', 'foto', 'role'];
}
