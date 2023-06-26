<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '.mytextarea',           
        height: 300,

        menubar: false,

        plugins: [

            'advlist autolink lists link image charmap print preview anchor',

            'searchreplace visualblocks code fullscreen',

            'insertdatetime media table paste code help wordcount', 'image'

        ],

        toolbar: 'undo redo | formatselect | ' +

            'bold italic backcolor | alignleft aligncenter ' +

            'alignright alignjustify | bullist numlist outdent indent | ' +

            'removeformat | help',
      });
    </script>
</head>
<body class="h-full">
    <div id="global" class="w-full min-h-screen h-[600px] flex bg-[#f9f8f8]">
        <div id="sidebar" class="min-h-full bg-slate-800 w-full hidden lg:block lg:w-1/6">
            <div id="appname" class="p-3 text-2xl font-semibold text-white text-center mb-6">
                Archidocs <hr class="mt-2">
            </div>

            <ul class="p-1 text-[#fafbf6]">
                <li class="text-[14px]"><a href="/ecoles"><i class="fa fa-school"></i> Gestion des écoles</a></li><hr class="mx-2 my-4">
                <li class="text-[14px]"><a href="/etudiants"><i class="fa fa-graduation-cap"></i> Gestion des étudiants</a></li><hr class="mx-2 my-4">
                <li class="text-[14px]"><a href="/enseignants"><i class="fa fa-user"></i> Gestion des enseignants</a></li><hr class="mx-2 my-4">
                <li class="text-[14px]"><a href="/messages"><i class="fa fa-comments"></i> Gestion des messages</a></li><hr class="mx-2 my-4">
                <li class="text-[14px]"><a href="/fichiers"><i class="fa fa-file"></i> Gestion des fichiers</a></li><hr class="mx-2 my-4">
            </ul>
        </div>
        <div id="content" class="w-full text-[12px] md:text-sm lg:text-md">
            <div id="menu" class="p-2 flex bg-white">
                <div id="menubar" class="">
                    <i class="fa fa-bars text-xl"></i>
                </div>
                <div class="w-full flex justify-end">
                    Admin name
                </div>
            </div>

            <div class="relative">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>