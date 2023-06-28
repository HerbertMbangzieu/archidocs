@extends('etudiants')

@section('username')
<div class="w-full flex justify-end p-2">
{{$etudiant ->nom}}
</div>
@endsection

@section('entete')
    <p class="mb-3 text-center">Bienvenue {{$etudiant ->nom}}</p><hr>
    <p class="mt-2 text-center"> {{$niveau->filiere->nom}} - {{$niveau->niveau}} </p>
@endsection
@section('content')
    <div class="p-3 md:m-8 border-[1px] rounded">
        <h2 class="text-xl font-semibold text-center"> Vos messages </h2> <hr>
        <div class="flex w-full p-3  font-bold text-lg">
                <h2 class="text-slate-800 w-2/3">Titre du message</h2>
                <h2 class="w-1/3"> Date d'envoi </h2>
            </div><hr>
        <?php foreach($niveau->cmessages as $message): ?>
            <div class="flex w-full p-3">
                <a href="/message/{{$message->id}}/{{$etudiant->id}}" class="text-slate-800 w-2/3">{{$message->title}}</a>
                <p class="w-1/3"> {{$message-> created_at}} </p>
            </div><hr>
        <?php endforeach; ?>
    </div>
    
@endsection