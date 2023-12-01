<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newfeaturemaster extends Model
{
    protected $table ='newfeaturemasters';
    protected $primaryKey='id';
    protected $fillable=['Products','Category','Feature_Name','Feature_Description'];

}
