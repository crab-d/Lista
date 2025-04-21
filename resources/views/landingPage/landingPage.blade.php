<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    @vite('resources/css/app.css')
</head>
<body>

 
   <section class="h-screen flex items-center justify-center bg-light">
        <div class="flex flex-col w-full sm:w-1/2 max-w-lg p-6">
            <h2 class="font-bold text-7xl w-full text-center mb-8">LISTA</h2>  

            <form method="POST" action="{{ route('login')}}">
                @csrf
                @error('email')
                <p class="text-red-500 text-end text-sm"> {{ $message }} </p>
            @enderror
            <input placeholder="Email" id="email" name="email" type="email" class="bg-gray-100 px-4 py-2 border w-full border-gray-300 rounded-sm mb-4">
          
            @error('password')
            <p class="text-red-500 text-end text-sm"> {{ $message }} </p>
        @enderror

            <input placeholder="Password" id="password" name="password"  type="password" class="bg-gray-100 px-4 py-2 border w-full border-gray-300 rounded-sm mb-4">
           
           
            <div class="flex space-x-4 mt-6">
                <button class="w-full btn-gray" type="submit">LOG IN</button>
                <button class="w-full btn-outline">SIGN UP</button>
            </div>
            </form>
            <button class="mt-25 w-full btn-outline">ABOUT LISTA</button>

        </div>
        
   </section>

   <header class="sticky top-0 header-bg flex items-center fix z-10">
    <p class="text-2xl font-bold ms-10 p-0 m-0 leading-none">LISTA</p>
    <p class="w-full">
    <ul class="flex">
        <li class="btn-gray w-max me-5"> LOGIN </li>
        <li class="btn-outline w-max me-5"> SIGN UP </li>
    </ul>
    
</header>
   <section class="h-full w-full  ">
   

    <div class="w-full relative h-max p-10 bg-fixed flex justify-center items-center" > 
        
        <div 
        class="absolute inset-0 bg-cover bg-center filter blur-md z-0 bg-fixed"
        style="background-image: url('{{ asset('image/bg-lp.png') }}');"
    ></div>
        <div class="relative z-10 ">
            <p class=" text-center text-white text-4xl font-bold mt-20 mb-20"> About Lista </p>
        </div>
     </div>

        <div class="w-full flex flex-col md:flex-row justify-center h-full m-0 items-center bg-light ">
        
            <div class="w-3/4 max-w-4xl sm:p-5 md:p-10 h-max flex flex-col md:flex-row items-center justify-center">
                <p class="text-1xl sm:w-full md:w-1/2 text-justify p-5 text-gray-500">Lista is a powerful and intuitive note-taking platform designed to help you stay organized and productive. Whether you're a student, professional, or just someone who loves to jot down ideas, Lista provides a seamless experience for capturing, organizing, and accessing your notes from anywhere. With an easy-to-use interface, advanced search features, and the ability to sync across devices, Lista ensures your notes are always at your fingertips. Take control of your thoughts, tasks, and projects with Lista – your go-to digital notebook.</p>
                <p class="text-1xl sm:w-full md:w-1/2 text-justify p-5 text-gray-500">Lista is a powerful and intuitive note-taking platform designed to help you stay organized and productive. Whether you're a student, professional, or just someone who loves to jot down ideas, Lista provides a seamless experience for capturing, organizing, and accessing your notes from anywhere. With an easy-to-use interface, advanced search features, and the ability to sync across devices, Lista ensures your notes are always at your fingertips. Take control of your thoughts, tasks, and projects with Lista – your go-to digital notebook.</p>
                
            </div>

        </div>
   </section>

   <section class="h-full w-full p-10 bg-gray-200 flex flex-wrap justify-center">
    <p class="font-bold text-4xl"> features</p>
    <div class="h-full w-full p-10 flex flex-wrap justify-center"> 
        <x-card
        class="border"
        title="Sync Across Devices"
        content="Lista allows you to access your notes from any device, ensuring you're always up to date."
        imageUrl="{{ asset('image/notepadVector.png')}}"
        /> 
        <x-card
        title="Organize Your Notes"
        content="Stay organized with Lista’s intuitive interface, and easily search your notes."
        imageUrl="{{ asset('image/notepadVector.png')}}"
        /> 
        <x-card
        title="Collaborate with Ease"
        content="Share your notes and collaborate in real-time for group projects."
        imageUrl="{{ asset('image/notepadVector.png')}}"
        /> 
    </div>
   </section>
   <section
   class="bg-gray-800 p-20 flex flex-col justify-center bg-fixed relative">
 
   {{-- <div class="absolute inset-0 filter blur-md bg-fixed" style="background-image: url({{ asset('image/bg-lp.png')}})"> </div>
   <div class="relative z-10">  --}}
   <p class="text-center text-white text-4xl m-2 font-bold">Contact</p>

   <p class="text-center text-gray-400 text-sm mb-5">Got anything to say? Feel free to message us! </p>

   <hr class=" border-gray-600 m-10">
   <form method="POST" action="" class=" w-full flex flex-wrap justify-between">

   <textarea type="text" class="bg-white p-2 w-full md:w-7/12 text-wrap rounded-sm" placeholder="Message"></textarea>
   <div class="flex flex-col w-full md:w-4/12">
   <input type="email" class="bg-white p-2 w-full h-max mt-10 rounded-sm md:mt-0" placeholder="Email"/>
   <input type="email" class="bg-white p-2 w-full h-max mt-10 rounded-sm md:mt-5" placeholder="Subject"/>
   <button type="submit" class="btn-white mt-10"> send </button>

   </div>

</form>
   {{-- </div> --}}
</section>
<footer class="bg-gray-900 p-10 flex justify-center items-center">
    <p class="text-white"> &copy; SIMPLE 2025. </p>
</footer>



</body>
</html>
