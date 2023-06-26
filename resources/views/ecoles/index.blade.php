@extends('admin')
@section('title')
    Écoles
@endsection
@section('content')
<div id="entete" class="w-full h-24 md:h-32 lg:h-48 overflow-hidden relative text-white font-semibold text-[24px] md:text-[32px]">
    
    <div class="absolute w-full h-24 md:h-32 lg:h-48">
        <img class="w-full" src="{{asset('/img/campus.jpg')}}" alt="">
    </div>
    <div class="absolute w-full h-24 md:h-32 lg:h-48 opacity-70 flex justify-center items-center" style="background:#000">
        <h2 class="opacity-100 font-semibold">Les écoles</h2>
    </div>
</div>
<div class="w-full">
    <div class="p-2 text-blue-500"><a href="/ecoles/create"> + Ajouter une école</a></div><hr>
    <div class="header w-full font-semibold p-2 flex">
        <div class="p-0 w-3/5"> Noms</div>
        <div class="p-0 w-2/5"> Actions</div>
    </div><hr>
    <?php $i=0; ?>
    <?php foreach($ecoles as $ecole): ?>
    <?php $i++; ?>
        <div class="flex p-2">
        <h2 class="text-gray-600 w-2/3 flex"><div class="px-4">{{$i}}.</div><a href="/ecoles/{{$ecole->id}}">{{$ecole->nom}}</a></h2>
        <h2 class="text-gray-600 w-1/6 text-center"><a href="/ecoles/edit/{{$ecole->id}}"><i class="fa fa-pencil text-blue-700"></i></a></h2>
        <h2 class="text-gray-600 w-1/6 text-center"><a href="/ecoles/delete/{{$ecole->id}}"><i class="fa fa-trash text-red-700"></i></a></h2>
        </div><hr>
    <?php endforeach; ?>
</div>
@endsection