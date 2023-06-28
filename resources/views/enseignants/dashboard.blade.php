@extends('enseignants')

@section('entete')
    Bienvenue {{$enseignant->nom}}
@endsection

@section('username')
<div class="w-full flex justify-end p-2">
{{$enseignant ->nom}}
</div>
@endsection

@section('content')
    <div class="px-5 py-16 rounded m-5 grid grid-cols-3 gap-4 border-[1px]">
        <a href="" class="py-3 text-center bg-red-800 text-white"> Envoyer des documents</a>     
        <a href="/enseignants/messages/{{$enseignant->id}}" class="py-3 text-center bg-red-800 text-white"> consulter les messages</a>     
        <a href="" class="py-3 text-center bg-red-800 text-white"> consulter les documents</a>     
    </div>
@endsection