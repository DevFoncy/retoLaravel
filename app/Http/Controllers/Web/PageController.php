<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Restaurant;
use App\Menu;
class PageController extends Controller
{
    //

    public function restaurant(){
    	$restaurants= Restaurant::orderBy('id','ASC')->paginate(6);

    	return view('web.restaurants',compact('restaurants'));
    }

    public function menu($id){
    	$menu= Menu::where('restaurant_id',$id)->first();

    	return view('web.menu',compact('menu'));
    
    }
}
