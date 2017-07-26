<?php
  
namespace App\Http\Controllers;
  
use App\Beer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class BeerController extends Controller{

    public function index(){
  
        $Beers  = Beer::with('brand')->with('country')->with('type')->get();
  
        return response()->json($Beers);
  
    }

    public function getBeer($id){
  
        $Beer  = Beer::find($id);
  
        return response()->json($Beer);
    }
  
    public function createBeer(Request $request){
  
        $Beer = Beer::create($request->all());
  
        return response()->json($Beer);
  
    }
  
    public function deleteBeer($id){
        $Beer  = Beer::find($id);
        $Beer->delete();
 
        return response()->json('deleted');
    }
  
    public function updateBeer(Request $request,$id){
        $Beer  = Beer::find($id);
        $Beer->title = $request->input('title');
        $Beer->author = $request->input('author');
        $Beer->isbn = $request->input('isbn');
        $Beer->save();
  
        return response()->json($Beer);
    }

}