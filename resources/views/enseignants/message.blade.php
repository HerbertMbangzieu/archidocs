@extends('enseignants')

@section('username')
<div class="w-full flex justify-end p-2">
{{$enseignant->nom}}
</div>
@endsection

@section('entete')
 {{$emessage->title}}    
@endsection

@section('content')
    <div class="p-3 rounded m-5 border-[1px]">
        <div class="p-3 text-bold text-xl mb-3 font-bold"> {{$emessage->title}} </div> <hr>
        <div class="p-3 text-bold mb-3 text-lg"> <?php echo $emessage->contenu; ?> </div>

    </div>
    <a href="/enseignants/messages/{{$enseignant->id}}" class="py-3 px-20 text-white rounded ml-4 bg-blue-700">Retour</a>
@endsection
