<?php

namespace App\Http\Controllers;

use App\Models\CMessage;
use App\Models\Niveau;
use App\Models\Filiere;
use Illuminate\Http\Request;

class CMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cmessages.index');
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
    public function storeall(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'contenu' => 'required',
        ]);
        $niveaux = Niveau::all();
        foreach($niveaux as $niveau){
            $cmessage = new CMessage();
            $cmessage->niveau_id = $niveau->id;
            $cmessage->title = $data["title"];
            $cmessage->contenu = $data["contenu"];
            $cmessage->save();
        }
    }

    public function storefiliere(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'filiere_id' => 'required',
            'contenu' => 'required',
        ]);
        $filiere = Filiere::find($data['filiere_id']);
        foreach($filiere->niveaus as $niveau){
            $cmessage = new CMessage();
            $cmessage->niveau_id = $niveau->id;
            $cmessage->title = $data["title"];
            $cmessage->contenu = $data["contenu"];
            $cmessage->save();
        }
    }

    public function storeclasse(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'filiere_id' => 'required',
            'niveau_id' => 'required',
            'contenu' => 'required',
        ]);
        $niveaux = Niveau::find($data['niveau_id']);
        foreach($niveaux as $niveau){
            $cmessage = new CMessage();
            $cmessage->niveau_id = $niveau->id;
            $cmessage->title = $data["title"];
            $cmessage->contenu = $data["contenu"];
            $cmessage->save();
        }
    }




    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
