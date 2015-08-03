<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CrewRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Crew;

class CrewController extends Controller
{
    
    public function __construct(Crew $crew)
    {
        $this->crew = $crew;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $crews = $this->crew->get();

        return view('crews.index', compact('crews'))->withTitle('Crews');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('crews.create')->withTitle('Create New Crew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CrewRequest $request)
    {
        $this->crew->create($request->all());
        return redirect('crews');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $crew = $this->crew->with('truck', 'movers')->findOrFail($id);
        return view('crews.show', compact('crew'))->withTitle($crew->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $crew = $this->crew->findOrFail($id);
        return view('crews.edit', compact('crew'))->withTitle('Edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CrewRequest $request, $id)
    {
        $this->crew->findOrFail($id)->update($request->all());
        return redirect('crews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->crew->destroy($id);
        return redirect('crews')->with(['flash_message' => 'That crew has been delete!']);
    }
}
