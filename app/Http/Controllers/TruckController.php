<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TruckRequest;
use App\Http\Controllers\Controller;
use App\Models\Truck;

class TruckController extends Controller
{



    public function __construct(Truck $truck)
    {
        $this->truck = $truck;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $trucks = $this->truck->get();

        return view('trucks.index', compact('trucks'))->withTitle('Trucks');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('trucks.create')->withTitle('Create New Truck');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(TruckRequest $request)
    {
        $this->truck->create($request->all());
        return redirect('trucks')->with([
            'flash_message' => 'A new truck has been created!',
        ]);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $truck = $this->truck->findOrFail($id);
        return view('trucks.edit', compact('truck'))->withTitle('Edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(TruckRequest $request, $id)
    {
        $this->truck->findOrFail($id)->update($request->all());
        return redirect('trucks')->with([
            'flash_message' => 'You have updated tour truck!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->truck->destroy($id);
        return redirect('trucks')->with(['flash_message' => 'That truck has been delete!']);
    }
}
