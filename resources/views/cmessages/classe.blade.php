@extends('admin')

@section('title')
    Les messages
@endsection

@section('content')
<div id="entete" class="w-full h-24 md:h-32 lg:h-48 overflow-hidden relative text-white font-semibold text-[24px] md:text-[32px]">
    
    <div class="absolute w-full h-24 md:h-32 lg:h-48">
        <img class="w-full" src="{{asset('/img/campus.jpg')}}" alt="">
    </div>
    <div class="absolute w-full h-24 md:h-32 lg:h-48 opacity-70 flex justify-center items-center" style="background:#000">
        <div>
        <h2 class="opacity-100 font-semibold mb-8">Envoyer un message à une classe</h2>
        </div>
    </div>
</div>

<div class="p-2 border-[1px] m-2 md:m-4 rounded md:h-auto">
<form action="/cmessages/storeclasse" method="post" class="p-3">
    @csrf
    @method('POST')
    <div class="input-group px-3">
        <label for="title" class="text-lg font-bold">Titre</label>
        <input type="text" name="title" id="title" placeholder="Entrer le titre" class="mt-1 w-full p-1 rounded border-[1px]">
        @error('titre')
            <div class="p-1 text-red-700">{{$message}}</div>
        @enderror
    </div>

    <div class="input-group px-3">
        <label for="cycle" class="text-lg font-bold">Choisir le cycle</label>
        <select name="cycle_id" id="cycle" class="mt-1 w-full p-1 rounded border-[1px]">
            <option selected disabled value=""> Choisir un cycle </option>
            <?php foreach($ecoles as $ecole): ?>
                <?php foreach($ecole->cycles as $cycle):?>
                    <option value="{{$cycle->id}}"> {{$cycle->ecole->code}} {{$cycle->nom}} </option>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </select>
        @error('cycle_id')
            <div class="p-1 text-red-700">{{$message}}</div>
        @enderror
    </div>

    <div class="input-group px-3">
        <label for="filiere" class="text-lg font-bold">Choisir la filiere</label>
        <select name="filiere_id" id="filiere" class="mt-1 w-full p-1 rounded border-[1px]">
            <option selected disabled value=""> Choisir une filiere </option>
        </select>
        @error('filiere_id')
            <div class="p-1 text-red-700">{{$message}}</div>
        @enderror
    </div>

    <div class="input-group px-3">
        <label for="niveau" class="text-lg font-bold">Choisir la niveau</label>
        <select name="niveau_id" id="niveau" class="mt-1 w-full p-1 rounded border-[1px]">
            <option selected disabled value=""> Choisir une niveau </option>
        </select>
        @error('niveau_id')
            <div class="p-1 text-red-700">{{$message}}</div>
        @enderror
    </div>



    <div class="input-group px-3">
        <label for="contenu" class="text-lg font-bold">Message</label>
        <textarea name="contenu" id="contenu" cols="30" rows="10" class="mytextarea rounded w-full"></textarea>
    </div>
    <div class="input-group mt-2 px-3">
        <button class="py-2 px-20 md:px-28 lg:px-36 text-white bg-green-700 rounded hover:bg-green-600 active:scale(90)">Envoyer</button>
    </div>

    
</form>
</div>

@endsection