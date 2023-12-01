<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newmodel extends Model
{
    use HasFactory;
    
    protected $table ='newmodels';
    // protected $primaryKey='id';
    // protected $fillable=['Newfeaturemaster_id',
    //                     'brandmaster_id',
    //                     'Products',
    //                      'OEM_name',
    //                      'model_name',
    //                      'feature_name',
    //                      'Featurevalues',
    //                      'Modelimage'];
}
