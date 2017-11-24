<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class EventController extends Controller
{
    public function __construct(){
        $this->middleware(['auth'])->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $parties = DB::table('events')->where('type', '=', 'party')->get();
        $travels = DB::table('events')->where('type', '=', 'travel')->get();
        $learning = DB::table('events')->where('type', '=', 'learn')->get();
        return view('events' , compact('parties', 'travels', 'learning', 'events'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating data
        $this->validate($request, array(
            //table-column    =>   validation rule
            'name' => 'required',
            'date_to_be_held' => 'required',
            'type' => 'required',
            'description' => 'required'
        ));

        // store in DB
        $event = new Event();
        $event->date_to_be_held = $request->date_to_be_held;
        $event->type            = $request->type;
        $event->name            = $request->name;
        $event->description     = $request->description;
        $event->save();

        Session::flash('success', 'The event was successfully created');

        //redirecting
        return response()->redirectTo('/');
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
        $event = DB::table('events')->where('id', '=', $id);
        if ($request->name && $request->date_to_be_held && $request->type && $request->description){
            $this->validate($request, array(

                    'name' => 'required',
                    'date_to_be_held' => 'required',
                    'type' => 'required',
                    'description' => 'required'
            ));

            $event->name  = $request->name;
            $event->date_to_be_held = $request->date_to_be_held;
            $event->type = $request->type;
            $event->description = $request->description;
            $event->save();

        }elseif ($request->name && $request->date_to_be_held && $request->type){

            $this->validate($request, array(

                    'name' => 'required',
                    'date_to_be_held' => 'required',
                    'type' => 'required'

            ));

            $event->name  = $request->name;
            $event->date_to_be_held = $request->date_to_be_held;
            $event->type = $request->type;
            $event->save();
        }elseif ($request->name && $request->date_to_be_held && $request->description){


            $this->validate($request, array(

                    'name' => 'required',
                    'date_to_be_held' => 'required',
                    'description' => 'required'
            ));

        $event->name  = $request->name;
        $event->date_to_be_held = $request->date_to_be_held;
        $event->description = $request->description;
        $event->save();
        }elseif ($request->name && $request->type && $request->description){
            $this->validate($request, array(

                    'name' => 'required',
                    'type' => 'required',
                    'description' => 'required'
            ));

            $event->name  = $request->name;
            $event->type = $request->type;
            $event->description = $request->description;
            $event->save();
        }elseif ($request->date_to_be_held && $request->type && $request->description){
            $this->validate($request, array(
                    'date_to_be_held' => 'required',
                    'type' => 'required',
                    'description' => 'required'
            ));

            $event->name  = $request->name;
            $event->type = $request->type;
            $event->description = $request->description;
            $event->save();
        }elseif ($request->name && $request->date_to_be_held ){
            $this->validate($request, array(
                'name' => 'required',
                'date_to_be_held' => 'required',
            ));

            $event->name  = $request->name;
            $event->date_to_be_held = $request->date_to_be_held;
            $event->save();
        }elseif ($request->date_to_be_held && $request->type){
            $this->validate($request, array(
                'date_to_be_held' => 'required',
                'type' => 'required',
            ));

            $event->date_to_be_held = $request->date_to_be_held;
            $event->type = $request->type;
            $event->save();
        }elseif ($request->type && $request->description){
            $this->validate($request, array(
                'type' => 'required',
                'description' => 'required'
            ));

            $event->type = $request->type;
            $event->description = $request->description;
            $event->save();
        }elseif ($request->name && $request->description){
            $this->validate($request, array(
                'name' => 'required',
                'description' => 'required'
            ));

            $event->name  = $request->name;
            $event->description = $request->description;
            $event->save();
        }elseif ($request->date_to_be_held && $request->description){
            $this->validate($request, array(
                'date_to_be_held' => 'required',
                'description' => 'required'
            ));

            $event->date_to_be_held = $request->date_to_be_held;
            $event->description = $request->description;
            $event->save();
        }elseif ($request->name && $request->type){
            $this->validate($request, array(
                'name' => 'required',
                'type' => 'required',
            ));

            $event->name  = $request->name;
            $event->type = $request->type;
            $event->save();
        }elseif ($request->name){
            $this->validate($request, array(
                'name' => 'required',
            ));

            $event->name  = $request->name;
            $event->save();
        }elseif ($request->date_to_be_held){
            $this->validate($request, array(
                'date_to_be_held' => 'required'
            ));

            $event->date_to_be_held = $request->date_to_be_held;
            $event->save();
        }elseif ($request->type){
            $this->validate($request, array(
                'type' => 'required'
            ));

            $event->type = $request->type;
            $event->save();
        }elseif ($request->description){
            $this->validate($request, array(
                'description' => 'required'
            ));

            $event->description = $request->description;
            $event->save();
        }

        //if all fields are filled
        /*$this->validate($request, array(
                'name' => 'required',
                'date_to_be_held' => 'required',
                'type' => 'required',
                'description' => 'required'
        ));

        $event->name  = $request->name;
        $event->date_to_be_held = $request->date_to_be_held;
        $event->type = $request->type;
        $event->description = $request->description;
        $event->save();*/

        Session::flash('success', 'The event was successfully edited');
        return response()->redirectTo('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('events');
    }
}
