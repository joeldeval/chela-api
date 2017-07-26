<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class TypeBeer extends Model
{
    protected $table = 'types_concentrate';
    
    protected $fillable = ['name'];

    protected $hidden = ['id', 'created_at', 'updated_at'];
     
}