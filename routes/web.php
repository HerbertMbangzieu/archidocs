<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\CMessageController;
use App\Http\Controllers\EMessageController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EnseignantController;
use App\Models\Cycle;
use App\Models\Filiere;
use App\Models\Niveau;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/ecoles', [EcoleController::class,'index']);
Route::get('/ecoles/{ecole}', [EcoleController::class,'show']);
Route::get('/ecoles/add', [EcoleController::class,'create']);
Route::get('/ecoles/edit/{ecole}', [EcoleController::class,'edit']);
Route::post('/ecoles/store', [EcoleController::class,'store']);
Route::patch('/ecoles/update/{ecole}', [EcoleController::class,'update']);

Route::get('/cycles/show/{cycle}', [CycleController::class, 'show']);
Route::get('/cycles/create/{ecole}', [CycleController::class, 'create']);
Route::get('/cycles/edit/{cycle}', [CycleController::class, 'edit']);
Route::post('/cycles/store/{ecole}', [CycleController::class, 'store']);
Route::patch('/cycles/update/{cycle}', [CycleController::class, 'update']);

Route::get('/filieres/create/{cycle}',[FiliereController::class, 'create']);
Route::post('/filieres/store/{cycle}',[FiliereController::class, 'store']);

Route::get('/messages', function(){
    return view('messages.index');
});

Route::get('/cmessages', [CMessageController::class, 'index']);
Route::post('/cmessages/storeall', [CMessageController::class, 'storeall']);
Route::post('/cmessages/storefiliere', [CMessageController::class, 'storefiliere']);
Route::post('/cmessages/storeclasse', [CMessageController::class, 'storeclasse']);
Route::post('/cmessages/storeniveau', [CMessageController::class, 'storeniveau']);
Route::get('/cmessages/all', function(){
    return view('cmessages.all');
});


Route::get('/message/{cmessage}/{etudiant}', [CMessageController::class, 'show']);
Route::get('/emessage/{emessage}/{enseignant}', [EMessageController::class, 'show']);

Route::get('/cmessages/filiere', function(){
    $ecoles = App\Models\Ecole::all();

    return view('cmessages.filiere', compact('ecoles'));
});

Route::get('/cmessages/niveau', function(){
    $ecoles = App\Models\Ecole::all();

    return view('cmessages.niveau');
});



Route::get('/cmessages/classe', function(){
    $ecoles = App\Models\Ecole::all();

    return view('cmessages.classe', compact('ecoles'));
});


Route::get('/etudiants/{etudiant}', [EtudiantController::class, 'index']);
Route::get('/etudiants/dashboard/{etudiant}', [EtudiantController::class, 'show']);

// Route::get('/enseignants/{enseignant}', [EnseignantController::class, 'index']);
Route::get('/enseignants/messages/{enseignant}', [EnseignantController::class, 'showmessages']);
Route::get('/enseignants/dashboard/{enseignant}', [EnseignantController::class, 'show']);


Route::get('/emessages', [EMessageController::class, 'index']);
Route::post('/emessages/store', [EMessageController::class, 'store']);



Route::get('/niveau',function(){
    $filieres = Filiere::all();
    foreach ($filieres as $filiere) {
        if($filiere->cycle->nom == 'BTS' || $filiere->cycle->nom == 'BTS' ){
            for ($i=1; $i < 3; $i++) { 
                $niveau = new Niveau();
                $niveau->filiere_id = $filiere->id;
                $niveau->niveau = $i;
                $niveau->save();
            }
        }
        else if(strtoupper($filiere->cycle->nom) == 'LICENCE PROFESSIONNELLE' || strtoupper($filiere->cycle->nom) == 'LICENCE DE TECHNOLOGIE' ){
                $niveau = new Niveau();
                $niveau->filiere_id = $filiere->id;
                $niveau->niveau = 3;
                $niveau->save();
        }
    }
});


// Ajax Routes

Route::get('/getEcoles', function(){
    $ecoles = App\Models\Ecole::all();
    return response()->json($ecoles, 200);
});

Route::get('/getEcole/{ecole}', function(App\Models\Ecole $ecole){
    $cycles = $ecole->cycles;
    return response()->json($cycles, 200);
});

Route::get('/getCycle/{cycle}', function(App\Models\Cycle $cycle){
    $filieres = $cycle->filieres;
    return response()->json($filieres, 200);
});

Route::get('/cmessages/getFiliere/{filiere}', function(App\Models\Filiere $filiere){
    $niveaux = $filiere->niveaus;
    return response()->json($niveaux, 200);
});

Route::get('/addEtudiant', function(){
    return App\Models\Etudiant::create([
        'nom'=>'Batchama Emmanuel',
        'niveau_id'=> 2,
    ]);
});

Route::get('/addEnseignant', function(){
    return App\Models\Enseignant::create([
        'nom'=>'Frederick Fokam',
    ]);
});



