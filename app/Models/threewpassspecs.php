<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class threewpassspecs extends Model
{
    protected $table ='threewpassspecss';
    protected $primaryKey='model_id';
    protected $fillable=['vehicle_type','model_name','model_description','version_name','special_limited_edition','Fuel','Product_Launch_Date','Product_Launch_Month','Product_Launch_Year','Model_Year','Year_of_Manufacturing','Trim_Level','Country','Price_Ex_Showroom','Motor_Description'];

}