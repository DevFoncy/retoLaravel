<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\DishStoreRequest;
use App\Http\Requests\DishUpdateRequest;

use App\Http\Controllers\Controller;

use App\Dish;
class DishController extends Controller
{

    /**
     * set Middleware
     *
     * @return view Login
     */
    
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
        $dishes= Dish::orderBy('id','DESC')->paginate(10);
        //dd($dishes);
        return view('admin.dishes.index',compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DishStoreRequest $request)
    {
        //Salvar
        $dish=Dish::create($request->all());

        return redirect()->route('dishes.edit',$dish->id)->with('info','Plato creado con exito');
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
        $dish=Dish::find($id);

        return view('admin.dishes.show',compact('dish'));   
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

        $dish=Dish::find($id);

        return view('admin.dishes.edit',compact('dish'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DishUpdateRequest $request, $id)
    {
        //
        $dish=Dish::find($id);

        /*Update Row */
        $dish->fill($request->all())->save();

        /*show view after update*/
        return redirect()->route('dishes.edit',$dish->id)->with('info','Plato actualizado con exito');

    
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
        /*Fin Dish then eliminate*/
        $dish=Dish::find($id)->delete();

        return back()->with('info','Eliminado correctamente');
    }
}
