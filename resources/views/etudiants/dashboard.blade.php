@extends('etudiants')

@section('entete')
    Bienvenue {{$etudiant->nom}}
@endsection

@section('username')
<div class="w-full flex justify-end p-2">
{{$etudiant ->nom}}
</div>
@endsection

@section('content')
    <div class="px-5 py-16 rounded m-5 grid grid-cols-3 gap-4 border-[1px]">
        <a href="" class="py-3 text-center text-lg bg-red-800 text-white"> Emploi de temps</a>     
        <a href="/etudiants/{{$etudiant->id}}" class="py-3 text-center text-lg bg-red-800 text-white"> Messages</a>     
        <a href="" class="py-3 text-center text-lg bg-red-800 text-white"> Documents</a>     
    </div>
@endsection