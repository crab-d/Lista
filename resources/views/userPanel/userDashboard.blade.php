<x-userLayout class="w-full">
    <h1 class="text-3xl text-center"> Hello! {{ $player->name }}</h1>
    @forelse($tasks as $taks)
        <p class="p-2 bg-red-300 outline-red-800 text-white m-5 rounded-lg text-center"> {{ $taks->title }}</p>
           
    @empty
    <p class="p-2 bg-red-300 outline-red-800 text-white m-5 rounded-lg text-center"> no tasks</p>
        
    @endforelse
</x-userLayout>