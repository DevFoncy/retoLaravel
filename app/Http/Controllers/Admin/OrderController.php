<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Order;
use App\Menu;
use App\Schedule;
use App\Detail_Order;
use Auth;

class OrderController extends Controller
{
     public function __construct(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $orders= Order::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('admin.orders.index',compact('orders'))->with('count_orders',count($orders));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $factura=Detail_Order::create($request->all());        
        return redirect()->route('restaurant')->with('info','Su pedido esta en marcha');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        /*Find Order then eliminate*/
        $order=Order::find($id)->delete();
        return back()->with('info','Eliminado correctamente');

    }
    public function factura($order_id,$precio_total)
    {

        $dish_id= Order::where('id',$order_id)->pluck('dish_id')->first();
        $restaurant_id=Menu::where('dish_id',$dish_id)->pluck('restaurant_id')->first();
        $schedules=Schedule::where('restaurant_id',$restaurant_id)->pluck('schedule');
        $code_qr=rand(100000,999999);
       return view('admin.orders.create',compact('schedules'))->with('order_id',$order_id)->with('precio_total',$precio_total)->with('code_qr',$code_qr);
    }
}
