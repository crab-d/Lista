<div class="w-full sm:w-full md:w-1/2 border lg:w-1/3 xl:w-1-4 max-w-sm rounded-sm m-4 rounded-sm shadow-sm bg-white overflow-hidden">
    @if($imageUrl)
        <img src="{{ $imageUrl }}" alt="dwasdwasdwadF" class="w-full h-fit object-cover p-3 border">
    @endif
    <div class="">
        <p class="text-center font-bold text-2xl border p-2 m-0"> {{ $title }} </p>
        <p class="text-center p-3   "> {{ $content }} </p>
    </div>
</div>