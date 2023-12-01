<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Registration\Registration as Authenticatable;

class Registration extends Model
{
    use HasFactory;

    protected $table ='Registrations';
    protected $primaryKey='id';
    protected $fillable=['username',
                         'email',
                         'password',
                         'confirm_password',
                         'role'];
                         
}