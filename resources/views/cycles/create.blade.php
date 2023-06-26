@extends('admin')

@section('title')
    Création d'école
@endsection

@section('content')
<div id="entete" class="w-full h-24 md:h-32 lg:h-48 overflow-hidden relative text-white font-semibold text-[24px] md:text-[32px]">
    
    <div class="absolute w-full h-24 md:h-32 lg:h-48">
        <img class="w-full" src="{{asset('/img/campus.jpg')}}" alt="">
    </div>
    <div class="absolute w-full h-24 md:h-32 lg:h-48 opacity-70 flex justify-center items-center" style="background:#000">
        <div>
        <h2 class="opacity-100 font-semibold mb-8">{{$ecole->nom}}</h2>
        <h2 class="opacity-100 font-semibold text-center">Ajouter un cycle</h2>
        </div>
    </div>
</div>

<div>
    <form action="/cycles/store/{{$ecole->id}}" method="post" class="m-4 border-[1px] rounded">
        @method('POST')
        @csrf
        <div class="input-group py-2 px-5">
            <div class="mb-3"><label for="nom" class="font-semibold mb-3">Nom</label></div>
            <div class="mb-3"><input type="text" name="nom" id="nom" placeholder="Entrer le nom du cycle" class="p-2 rounded border-[1px] w-full"></div>
            @error('nom')
                <div class="p-1 text-red-700">{{$message}}</div>
            @enderror
        </div>

        <div class="input-group py-2 px-5">
            <div class="mb-3"><label for="nom" class="font-semibold mb-3">École</label></div>
            <div class="mb-3"><input type="text" name="nom" id="nom" value="{{$ecole->nom}}" disabled class="p-2 rounded border-[1px] w-full"></div>
            @error('ecole_id')
                <div class="p-1 text-red-700">{{$message}}</div>
            @enderror
        </div>

        <button class=" m-5 py-2 px-16 md:px-36 bg-green-700 text-white rounded hover:bg-green-600 active:scale-95"> Enrégistrer </button>

    </form>
</div>
@endsection