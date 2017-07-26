<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Brand extends Model
{
    protected $table = 'brands';
    
    protected $fillable = ['name'];
     
     protected $hidden = ['id', 'created_at', 'updated_at'];
}