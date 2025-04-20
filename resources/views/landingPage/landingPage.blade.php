<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    @vite('resources/css/app.css')
</head>
<body>

 
   <section class="h-screen flex items-center justify-center">
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

   <header class="sticky top-0 header-bg flex items-center fix">
    <p class="text-2xl font-bold ms-10 p-0 m-0 leading-none">LISTA</p>
    <p class="w-full">
    <ul class="flex">
        <li class="btn-gray w-max me-5"> LOGIN </li>
        <li class="btn-outline w-max me-5"> SIGN UP </li>
    </ul>
    
</header>
   <section class="h-full w-full ">
   

    <div class="w-full h-max p-10 bg-gray-900 flex justify-center items-center"> 
        <p class="text-center text-white text-4xl font-bold mt-20 mb-20"> About Lista </p>
     </div>

        <div class="w-full flex flex-col md:flex-row justify-center h-full m-0 items-center  ">
        
            <div class="w-3/4 max-w-4xl sm:p-5 md:p-10 h-max flex flex-col md:flex-row items-center justify-center">
                <p class="text-1xl sm:w-full md:w-1/2 text-justify p-5 text-gray-500">Lista is a powerful and intuitive note-taking platform designed to help you stay organized and productive. Whether you're a student, professional, or just someone who loves to jot down ideas, Lista provides a seamless experience for capturing, organizing, and accessing your notes from anywhere. With an easy-to-use interface, advanced search features, and the ability to sync across devices, Lista ensures your notes are always at your fingertips. Take control of your thoughts, tasks, and projects with Lista – your go-to digital notebook.</p>
                <p class="text-1xl sm:w-full md:w-1/2 text-justify p-5 text-gray-500">Lista is a powerful and intuitive note-taking platform designed to help you stay organized and productive. Whether you're a student, professional, or just someone who loves to jot down ideas, Lista provides a seamless experience for capturing, organizing, and accessing your notes from anywhere. With an easy-to-use interface, advanced search features, and the ability to sync across devices, Lista ensures your notes are always at your fingertips. Take control of your thoughts, tasks, and projects with Lista – your go-to digital notebook.</p>
                
            </div>

        </div>
   </section>

   <section class="h-full w-full p-10 bg-gray-200 flex flex-wrap justify-center">
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
   </section>
   <section
   class="bg-gray-800 p-20">
   </section>



</body>
</html>
