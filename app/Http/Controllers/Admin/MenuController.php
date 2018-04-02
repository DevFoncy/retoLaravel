<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;

use App\Menu;

class MenuController extends Controller
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
        //
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

    public function createMenu($restaurant_id)
    {
        $menus=Menu::where('restaurant_id',$restaurant_id)->orderBy('id','DESC')->get();
        $date_now=date("Y-m-d-l"); //date of now
        $day_now=date("l"); // day now
        return view('admin.menus.create',compact('menus'))->with('date_now',$date_now)->with('day_now',$day_now)->with('restaurant_id',$restaurant_id);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuStoreRequest $request)
    {
        //Salvar Menu
        $menu=Menu::create($request->all());
        
        return redirect()->route('restaurant-carta-del-dia',$menu->restaurant_id)->with('info','Plato añadido a la carta del dia  con exito');
       
    
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
    }
}
