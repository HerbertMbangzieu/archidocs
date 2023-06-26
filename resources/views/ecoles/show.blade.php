@extends('admin')

@section('title')
    Modification
@endsection

@section('content')
<div id="entete" class="w-full h-24 md:h-32 lg:h-48 overflow-hidden relative text-white font-semibold text-[24px] md:text-[32px]">
    
    <div class="absolute w-full h-24 md:h-32 lg:h-48">
        <img class="w-full" src="{{asset('/img/campus.jpg')}}" alt="">
    </div>
    <div class="absolute w-full h-24 md:h-32 lg:h-48 opacity-70 flex text-center justify-center items-center" style="background:#000">
        <h2 class="opacity-100 font-semibold">{{$ecole->nom}}</h2>
    </div>
</div>

<div class="p-2 w-full rounded-md border m-5 lg:flex">
    <div class="w-full md:w-1/3 p-2 flex"> <h2 class="px-3 font-semibold"> Code :</h2> <h2 class="px-2 text-slate-600 font-bold"> {{$ecole->code}} </h2> </div>
    <div class="w-full md:w-2/3 p-2 flex"> <h2 class="px-3 font-semibold"> Nom :</h2> <h2 class="px-2 text-slate-600 font-bold"> {{$ecole->nom}} </h2> </div>
</div>

<div class="p-2 my-3">
    <a href="/ecoles/edit/{{$ecole->id}}" class=" px-12 lg:px-28 text-white font-semibold py-3 hover:bg-blue-700 active:scale-90 bg-blue-600 rounded m-2"> Éditer</a>
    <a href="/ecoles/delete/{{$ecole->id}}" class=" px-12 lg:px-28 text-white font-semibold py-3 hover:bg-red-700 active:scale-90 bg-red-600 rounded m-2"> Supprimer</a>
</div><hr>

<div class="p-2">
    <h2 class="text-lg font-semibold">Cycles</h2><hr>
</div>

<div class="p-2 text-blue-500"><a href="/cycles/create/{{$ecole->id}}"> + Ajouter un cycle</a></div><hr>

<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5 mx-6 md:mx-2 my-2">
    <?php foreach($ecole->cycles as $cycle): ?>
        <a class="p-4 text-white bg-red-900 hover:bg-red-700 active:scale-95 text-center font-semibold" href="/cycles/show/{{$cycle->id}}">{{$cycle->nom}}</a>
    <?php endforeach;?>
</div>

@endsection