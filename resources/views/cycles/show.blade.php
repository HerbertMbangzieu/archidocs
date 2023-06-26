@extends('admin')

@section('title')
    {{$cycle->nom}}
@endsection

@section('content')
<div id="entete" class="w-full h-24 md:h-32 lg:h-48 overflow-hidden relative text-white font-semibold text-[24px] md:text-[32px]">
    
    <div class="absolute w-full h-24 md:h-32 lg:h-48">
        <img class="w-full" src="{{asset('/img/campus.jpg')}}" alt="">
    </div>
    <div class="absolute w-full h-24 md:h-32 lg:h-48 opacity-70 flex justify-center items-center" style="background:#000">
        <div class="p-3 text-center">
            <h2 class="opacity-100 font-semibold lg:mb-3">{{$cycle->ecole->nom}}</h2><hr>
            <h2 class="opacity-100 font-semibold lg:mt-3">{{$cycle->nom}}</h2>
        </div>
    </div>
</div>

<div class="p-2 my-3">
    <a href="/cycles/edit/{{$cycle->id}}" class="px-10 md:px-28 text-white font-semibold py-3 hover:bg-blue-700 active:scale-90 bg-blue-600 rounded m-2"> Éditer</a>
    <a href="/cycles/delete/{{$cycle->id}}" class="px-10 md:px-28 text-white font-semibold py-3 hover:bg-red-700 active:scale-90 bg-red-600 rounded m-2"> Supprimer</a>
</div><hr>

<div class="p-2">
    <h2 class="text-lg font-semibold">Les Filières</h2><hr>
</div>

<div class="w-full">
    <div class="p-2 text-blue-500"><a href="/filieres/create/{{$cycle->id}}"> + Ajouter une filière</a></div><hr>
    <div class="header w-full font-semibold p-2 flex">
        <div class="p-0 w-2/6"> Codes</div>
        <div class="p-0 w-2/6"> Noms</div>
        <div class="p-0 w-2/6"> Actions</div>
    </div><hr>
    <?php $i=0; ?>
    <?php foreach($cycle->filieres as $filiere): ?>
    <?php $i++; ?>
        <div class="flex p-2">
        <h2 class="text-gray-600 w-2/6 flex"><div class="px-4">{{$i}}.</div><p>{{$filiere->code}}</p></h2>
        <h2 class="text-gray-600 w-2/6 flex"><p>{{$filiere->nom}}</a></p>
        <h2 class="text-gray-600 w-1/6 text-center"><a href="/filieres/edit/{{$filiere->id}}"><i class="fa fa-pencil text-blue-700"></i></a></h2>
        <h2 class="text-gray-600 w-1/6 text-center"><a href="/filieres/delete/{{$filiere->id}}"><i class="fa fa-trash text-red-700"></i></a></h2>
        </div><hr>
    <?php endforeach; ?>
</div>


@endsection