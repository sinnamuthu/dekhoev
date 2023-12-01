<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newmodelfeatureimage extends Model
{
    use HasFactory;
    
    protected $table ='newmodelfeatureimages';
    protected $primaryKey='id';
    protected $fillable=['Modelimage'];
}
