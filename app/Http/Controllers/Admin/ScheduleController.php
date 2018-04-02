<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ScheduleStoreRequest;
use App\Http\Requests\ScheduleUpdateRequest;

use App\Http\Controllers\Controller;

use App\Restaurant;
use App\Schedule;
class ScheduleController extends Controller
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
        $restaurants= Restaurant::orderBy('id','ASC')->get();
        //dd($schedules);
        return view('admin.schedules.index',compact('restaurants'));
    }

    public function index2($restaurant_id)
    {
        $schedules= Schedule::where('restaurant_id',$restaurant_id)->orderBy('id','DESC')->get();
        //dd($schedules);
        return view('admin.schedules.index2',compact('schedules'))->with('restaurant_id',$restaurant_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($restaurant_id)
    {
        /*getListMenus*/
        //$menus= Menu::orderBy('id','ASC')->pluck('id');

        return view('admin.schedules.create')->with('restaurant_id',$restaurant_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleStoreRequest $request)
    {
        //Salvar
        $schedule=Schedule::create($request->all());

      //  return redirect()->route('schedules.edit',$schedule->id)->with('info','Horario creado con exito');
        return redirect()->route('restaurant-schedule',$schedule->restaurant_id)->with('info','Horario creado con exito');

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
        $dish=Schedule::find($id);

        return view('admin.schedules.show',compact('dish'));   
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
        $schedule=Schedule::find($id);
         /*getListMenus*/
       // $menus= Menu::orderBy('id','ASC')->pluck('id');

        return view('admin.schedules.edit',compact('schedule'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ScheduleUpdateRequest $request, $id)
    {
        //
        $schedule=Schedule::find($id);

        /*Update Row */
        $schedule->fill($request->all())->save();

        /*show view after update*/
        return redirect()->route('schedules.edit',$dish->id)->with('info','Horaro actualizado con exito');

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
        /*Fin Schedule then eliminate*/
        $schedule=Schedule::find($id)->delete();

        return back()->with('info','Horario Eliminado  correctamente');
    }
}
