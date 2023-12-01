<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $table ='posts';
    protected $primaryKey='id';
    protected $fillable=['Posttitle',
                         'Postcontent',
                         'meta_description',
                         'meta_keyword',
                         'meta_title',
                         'Postimage'];
                         
}
