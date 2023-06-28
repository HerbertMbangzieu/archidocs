<?php

namespace App\Http\Controllers;

use App\Models\EMessage;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class EMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('emassages.all');
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
        $data = $request->validate([
            'title' => 'required',
            'contenu' => 'required|max:100000',
        ]);
       
            $emessage = new EMessage();
            $emessage->title = $data["title"];
            $emessage->contenu = $data["contenu"];
            $emessage->save();
        
        return redirect('/emessages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EMessage  $eMessage
     * @return \Illuminate\Http\Response
     */
    
        public function show(EMessage $emessage, Enseignant $enseignant)
    {
        return view('enseignants.message', compact('emessage'), compact('enseignant'),);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EMessage  $eMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(EMessage $eMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EMessage  $eMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EMessage $eMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EMessage  $eMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(EMessage $eMessage)
    {
        //
    }
}
