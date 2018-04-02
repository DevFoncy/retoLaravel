<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Restaurant;
use App\Menu;
use App\Order;
use Auth;
class PageController extends Controller
{
    //

    public function restaurant(){
    	$restaurants= Restaurant::orderBy('id','ASC')->paginate(6);

    	return view('web.restaurants',compact('restaurants'));
    }

    public function menu($restaurant_name){
    	/*obtener el id del restaurant*/
    	$restaurant_id= Restaurant::where('name',$restaurant_name)->pluck('id')->first();
    	$menus= Menu::where('restaurant_id',$restaurant_id)->paginate(6);

        return view('web.menu',compact('menus'))->with('restaurant_name',$restaurant_name)->with('restaurant_id',$restaurant_id);    
    }

    public function pedir($dish_id){
        
        $order= new Order;
        $order->dish_id=$dish_id;
        $order->user_id=Auth::user()->id;
        $order->note='Prepararlo rapido y caliente';
        $order->state='DRAFT';
        $order->save();

        /*Obtener el nombre del restaurante*/
        $restaurant_id= Menu::where('dish_id',$dish_id)->pluck('restaurant_id')->first();
        $restaurant_name=Restaurant::where('id',$restaurant_id)->pluck('name')->first();
        
        return redirect()->route('menu',$restaurant_name)->with('info','Plato agregado al carrito con exito');

    }

    public function ver_carta($restaurant_id){
        $day_now=date("l"); // day now
        $restaurant_name= Restaurant::where('id',$restaurant_id)->pluck('name')->first();
        $menus= Menu::where([['restaurant_id',$restaurant_id],['fecha',$day_now]])->orderBy('id','DESC')->paginate(6);

        return view('web.menu',compact('menus'))->with('restaurant_name',$restaurant_name)->with('restaurant_id',$restaurant_id);

    }
}
