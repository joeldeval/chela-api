<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class TypeBeer extends Model
{
    protected $table = 'types_beers';
    
    protected $fillable = ['name'];
     
    protected $hidden = ['id', 'created_at', 'updated_at'];
}