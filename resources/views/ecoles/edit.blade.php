@extends('admin')

@section('title')
    Modification
@endsection

@section('content')
<div id="entete" class="w-full h-24 md:h-32 lg:h-48 overflow-hidden relative text-white font-semibold text-[24px] md:text-[32px]">
    
    <div class="absolute w-full h-24 md:h-32 lg:h-48">
        <img class="w-full" src="{{asset('/img/campus.jpg')}}" alt="">
    </div>
    <div class="absolute w-full h-24 md:h-32 lg:h-48 opacity-70 flex justify-center items-center" style="background:#000">
        <h2 class="opacity-100 font-semibold">{{$ecole->nom}}</h2>
    </div>
</div>

<form action="/ecoles/update/{{$ecole->id}}" method="post" class="px-2 md:px-4 lg:px-5 mx-2 md:mx-4 lg:mx-5 lg:py-5 my-2 md:my-4 lg:my-5 rounded-md border-[1px]">
    @method('PATCH')
    @csrf
    <div class="input-group">
        <label for="code" class="font-semibold mb-3">Code</label><br>
        <input type="text" name="code" id="code" class="w-full p-2 border my-2 rounded" placeholder="Entrer le code de l'école" value = "{{$ecole->code}}">
        @error('code')
            <div class="w-full p-1 rounded m-1 text-red-800">{{$message}}</div>
        @enderror
    </div>
    <div class="input-group">
        <label for="nom" class="font-semibold mb-3">Nom</label><br>
        <input type="text" name="nom" id="nom" class="w-full p-2 border my-2 rounded" placeholder="Entrer le nom de l'école" value = "{{$ecole->nom}}">
        @error('nom')
            <div class="w-full p-1 rounded m-1 text-red-800">{{$message}}</div>
        @enderror
    </div>

    <button type="submit" class="my-2 bg-blue-900 text-white text-center w-full md:w-1/2 p-2 rounded-md active:scale-95">Modifier</button>

</form>
@endsection