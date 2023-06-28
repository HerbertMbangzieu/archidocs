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

        <div id="content" class="w-full text-[12px] md:text-sm lg:text-md">
            <div id="menu" class="p-2 flex bg-white">
                    @yield('username')
                
            </div>

            <div class="relative">
            <div id="entete" class="w-full h-24 md:h-32 lg:h-48 overflow-hidden relative text-white font-semibold text-[24px] md:text-[32px]">
    
            <div class="absolute w-full h-24 md:h-32 lg:h-48">
                    <img class="w-full" src="{{asset('/img/campus.jpg')}}" alt="">
                </div>
                <div class="absolute w-full h-24 md:h-32 lg:h-48 opacity-70 flex justify-center items-center" style="background:#000">
                    <div>
                    <h2 class="opacity-100 font-semibold mb-8">@yield('entete')</h2>
                    </div>
                </div>
            </div>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>