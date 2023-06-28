@extends('enseignants')

@section('username')
<div class="w-full flex justify-end p-2">
{{$enseignant ->nom}}
</div>
@endsection

@section('entete')
    <p class="mb-3 text-center">Bienvenue {{$enseignant ->nom}}</p>
@endsection
@section('content')
    <div class="p-3 md:m-8 border-[1px] rounded">
        <h2 class="text-xl font-semibold text-center"> Vos messages </h2> <hr>
        <div class="flex w-full p-3  font-bold text-lg">
                <h2 class="text-slate-800 w-2/3">Titre du message</h2>
                <h2 class="w-1/3"> Date d'envoi </h2>
            </div><hr>
        <?php foreach($emessages as $message): ?>
            <div class="flex w-full p-3">
                <a href="/emessage/{{$message->id}}/{{$enseignant->id}}" class="text-slate-800 w-2/3">{{$message->title}}</a>
                <p class="w-1/3"> {{$message-> created_at}} </p>
            </div><hr>
        <?php endforeach; ?>
        
    </div>
    
    <a href="/enseignants/dashboard/{{$enseignant->id}}" class="py-3 px-20 text-white rounded mt-8 ml-12 bg-blue-700">Retour</a>
    
@endsection