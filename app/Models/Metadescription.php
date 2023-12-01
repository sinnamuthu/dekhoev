<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadescription extends Model
{
    use HasFactory;

    protected $table ='metadescription';
    protected $primaryKey='id';
    protected $fillable=['page_name',
                         'keyword',
                         'description',
                         'url_name',
                        'title'];
}
