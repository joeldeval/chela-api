<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class TypeBeer extends Model
{
    protected $table = 'types_beers';
    
    protected $fillable = ['name'];
     
}