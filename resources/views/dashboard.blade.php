@extends('admin')
@section('title')
    Admin dashboard
@endsection

@section('content')
    <div id="entete" class="w-full h-24 md:h-40 lg:h-56 bg-[#4b0786] p-3 text-white font-semibold text-[24px] md:text-[32px]"> <h2>Statistiques</h2> </div>

    <div class="w-full grid grid-cols-4 flex-col gap-2 -mt-16 mx-1">
        <div class="shadow-lg bg-white rounded-md p-2">
            <div class="flex text-lg text-gray-500 border-b-[1px]">
                <h2 class="font-semibold">Étudiants</h2>
                <i class="w-full flex justify-end text-lg fa fa-graduation-cap"></i>
            </div>
            <div class="text-center text-3xl text-gray-700 font-semibold py-3 border-b-[1px]">1234</div>
            <p class="text-gray-500 p-2">Inscrits</p>
        </div>

        <div class="shadow-lg bg-white rounded-md p-2">
            <div class="flex text-lg text-gray-500 border-b-[1px]">
                <h2 class="font-semibold">Enseignants</h2>
                <i class="w-full flex justify-end text-lg fa fa-users"></i>
            </div>
            <div class="text-center text-3xl text-gray-700 font-semibold py-3 border-b-[1px]">76</div>
            <p class="text-gray-500 p-2">En service</p>
        </div>

        <div class="shadow-lg bg-white rounded-md p-2">
            <div class="flex text-lg text-gray-500 border-b-[1px]">
                <h2 class="font-semibold">Messages</h2>
                <i class="w-full flex justify-end text-lg fa fa-comments"></i>
            </div>
            <div class="text-center text-3xl text-gray-700 font-semibold py-3 border-b-[1px]">134</div>
            <p class="text-gray-500 p-2">Envoyés</p>
        </div>

        <div class="shadow-lg bg-white rounded-md p-2">
            <div class="flex text-lg text-gray-500 border-b-[1px]">
                <h2 class="font-semibold">Fichiers</h2>
                <i class="w-full flex justify-end text-lg fa fa-file"></i>
            </div>
            <div class="text-center text-3xl text-gray-700 font-semibold py-3 border-b-[1px]">134</div>
            <p class="text-gray-500 p-2">Partagés</p>
        </div>




    </div>
@endsection