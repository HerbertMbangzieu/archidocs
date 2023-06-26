<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Ecole;
use Illuminate\Http\Request;

class CycleController extends Controller
{
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
    public function create(Ecole $ecole)
    {
        return view('cycles.create', compact('ecole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Ecole $ecole)
    {
        $data = $request->validate([
            'nom' => 'required',
        ]);
        $cycle = new Cycle();
        $cycle->nom = $data['nom'];
        $cycle->ecole_id = $ecole->id;
        $cycle->save();
        return redirect('ecoles/'.$ecole->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function show(Cycle $cycle)
    {
        return view('cycles.show', compact('cycle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Cycle $cycle)
    {
        return view('cycles.edit',compact('cycle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cycle $cycle)
    {
        $data = $request->validate([
            'nom' => 'required',
        ]);
        $cycle->nom = $data['nom'];
        $cycle->save();
        return redirect('ecoles/'.$cycle->ecole->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cycle $cycle)
    {
        //
    }
}
