<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ScheduleRequest;
use App\Http\Controllers\Controller;
use App\Models\Crew;
use App\Models\Truck;
use App\Models\Mover;

class ScheduleController extends Controller
{

    public function __construct(Crew $crew , Truck $truck, Mover $mover)
    {
        $this->crew = $crew;
        $this->truck = $truck;
        $this->mover = $mover;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $crews = $this->crew->with('movers')->get()->toArray();

        foreach ($crews as $key => $value) {
            $mover[$value['id']] = [];
            foreach ($value['movers'] as $k => $v) {
                $mover[$value['id']][$k] = $v['id'];
            }
         }
        return view('schedules.index', compact('crews', 'mover'))->withTitle('Home');
    }

    /**
     * Sets the $truck_id to the crew.
     *
     * @param ScheduleRequest $request
     * @param $crew_id
     * @return JSON Response
     */
    public function setTruck(ScheduleRequest $request, $crew_id)
    {
        $json['message'] = '';
        $json['delay'] = 3000;

        $crew = $this->crew->findOrFail($crew_id);

        $truck_id = $request->get('truck_id');


        if($truck_id != 0 || $truck = '0'){
            $truck = $this->truck->findOrFail($truck_id);
        } else {
            $crew->truck_id = null;
            $crew->save();
            $json['type'] = 'success';
            $json['message'] = 'Truck has been unassign to ' . $crew->name;
            return response()->json($json);
        }
        
        $crew->truck_id = $truck_id;
        $crew->save();
        $json['type'] = 'success';
        $json['message'] = $truck->name . ' has been assign to ' . $crew->name;

        $count = $this->crew->where('truck_id', $truck_id)->count();

        if($count > 1) {
            $json['message'] = 'There are '. $count . ' crews assign to ' . $truck->name;
            $json['delay'] = 0;
            $json['type'] = 'error';
        }

        $json['status'] = 'ok';
        
        
        return response()->json($json);
    }

    /**
     * Upadtes crew_mover table.
     *
     * @param  ScheduleRequest  $request
     * @param  $crew_id
     * @return JSON Response
     */
    public function setMover(ScheduleRequest $request, $crew_id)
    {
        
        $crew = $this->crew->find($crew_id);
        if($request->get('mover_id') != null){
            $crew->movers()->sync($request->get('mover_id'));
        } else {
            \DB::table('crew_mover')->where('crew_id', $crew_id)->delete();
        }
        $crew->save();

        $json['message'] = $crew->name . ' has been updated';
        $json['delay'] = 0;
        $json['type'] = 'success';

        return response()->json($json);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for creating the specified resource.
     *
     * @return Response
     */
    public function create()
    {
        $trucks = Truck::truckList();
        $movers = Mover::moverList();
        return view('schedules.create', compact('trucks', 'movers'))->withTitle('Create');
    }

    /**
     * Store the specified resource in storage.
     *
     * @param  ScheduleRequest  $request
     * @return Response
     */
    public function store(ScheduleRequest $request)
    {

        $truck = $this->truck;
        $truck->name = $request->get('truckname');
        $truck->save();

        $mover = $this->mover;
        $mover->first_name = $request->get('first_name');
        $mover->last_name = $request->get('last_name');
        $mover->save();

        $crew = $this->crew;
        $crew->name = $request->get('name');
        $crew->truck_id = $truck->id;
        $crew->save();

        \DB::table('crew_mover')->insert(['crew_id' => $crew->id, 'mover_id' => $mover->id]);

        return redirect('/')->withMessage('Schedule Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
