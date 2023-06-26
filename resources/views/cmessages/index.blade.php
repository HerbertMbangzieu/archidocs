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
        <h2 class="opacity-100 font-semibold mb-8">Envoyer un message</h2>
        </div>
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2 p-2 md:mt-20">
<a href="/cmessages/all" class="py-3 md:py-4 px-2 md:px-10 text-center bg-red-900 hover:bg-red-800 active:scale(90) m-2 md:m-1 text-white shadow-lg">Message à tous</a>
<a href="/cmessages/filiere" class="py-3 md:py-4 px-2 md:px-10 text-center bg-red-900 hover:bg-red-800 active:scale(90) m-2 md:m-1 text-white shadow-lg">Message à une filière</a>
<a href="/cmessages/niveau" class="py-3 md:py-4 px-2 md:px-10 text-center bg-red-900 hover:bg-red-800 active:scale(90) m-2 md:m-1 text-white shadow-lg">Message à un niveau</a>
<a href="/cmessages/classe" class="py-3 md:py-4 px-2 md:px-10 text-center bg-red-900 hover:bg-red-800 active:scale(90) m-2 md:m-1 text-white shadow-lg">Message à une classe</a>
        
</div>

@endsection