<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Beer extends Model
{
    protected $table = 'beers';
    
    protected $fillable = ['name', 'color'];
     
    
    public function brand() {
       return $this->belongsTo('App\Brand', 'id_brand');
    }
}