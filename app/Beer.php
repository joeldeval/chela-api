<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Beer extends Model
{
    protected $table = 'beers';
    
    protected $fillable = ['name', 'color'];
    
    protected $hidden = ['id', 'updated_at', 'id_type', 'id_type_concentrate', 'id_brand', 'id_country'];
    
    public function brand() {
       return $this->belongsTo('App\Brand', 'id_brand');
    }

     public function country() {
       return $this->belongsTo('App\Country', 'id_country');
    }

     public function type() {
       return $this->belongsTo('App\TypeBeer', 'id_type');
    }

}