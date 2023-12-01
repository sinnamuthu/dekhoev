<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brandmaster extends Model
{
    use HasFactory;

    protected $table ='brandmasters';
    protected $primaryKey='id';
    protected $fillable=['Products',
    'new_oem_name',
    'OEMImage'];

}
