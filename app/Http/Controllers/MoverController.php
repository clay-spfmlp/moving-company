<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MoverRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Mover;

class MoverController extends Controller
{
        public function __construct(Mover $mover)
    {
        $this->mover = $mover;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $movers = $this->mover->get();

        return view('movers.index', compact('movers'))->withTitle('Movers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('movers.create')->withTitle('Create New Mover');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(MoverRequest $request)
    {
        $this->mover->create($request->all());
        return redirect('movers');
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
        $mover = $this->mover->findOrFail($id);
        return view('movers.edit', compact('mover'))->withTitle('Edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(MoverRequest $request, $id)
    {
        $this->mover->findOrFail($id)->update($request->all());
        return redirect('movers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->mover->destroy($id);
        return redirect('movers')->with(['flash_message' => 'That mover has been delete!']);
    }
}
