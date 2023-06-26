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
        <h2 class="opacity-100 font-semibold mb-8">Le système de messagerie</h2>
        </div>
    </div>
</div>
<div class="relative w-full my-16 md:my-28 flex justify-center items-center">
    <div class="flex w-full justify-center border-[1px] m-3 rounded p-3">
        <a href="/cmessages" class="py-3 md:py-4 px-2 md:px-20 text-center bg-red-900 hover:bg-red-800 active:scale(90) m-2 md:m-8 text-white shadow-lg">Messages aux étudiants</a>
        <a href="/emessages" class="py-3 md:py-4 px-2 md:px-20 text-center bg-red-900 hover:bg-red-800 active:scale(90) m-2 md:m-8 text-white shadow-lg">Messages aux enseignants</a>
    </div>
</div>
@endsection