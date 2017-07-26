<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Country extends Model
{
    protected $table = 'country';
    
    protected $fillable = ['name'];

    protected $hidden = ['id', 'created_at', 'updated_at'];
    
     
}