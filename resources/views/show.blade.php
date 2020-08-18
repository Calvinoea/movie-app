@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
      <div class="container mx-auto px-4 py-16 flex">
             <img src="https://www.sonypictures.com/sites/default/files/styles/max_560x840/public/chameleon/title-movie/230608_Identity_2003_1400x2100_ENG_2.jpg?itok=RIgm77cp" alt="" class="w-96">
        <div class="ml-24">
            <h2 class="text-4xl font-sem">Movie Title</h2>
            <div class="flex items-center text-gray-400 text-sm">

                       <span>⭐</span>
                       <span class="ml-1">85%</span>
                       <span class="mx-2">|</span>
                       <span>August 2, 2020</span>
                        <span class="mx-2">|</span>
                        <span>Action, Thriller, Comedy</span>
                   </div>

                    <p class="text-gray-300 mt-8 text-left">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quos impedit voluptates enim rem necessitatibus tempore nesciunt dolore nemo dolorum distinctio iste numquam possimus cum obcaecati reiciendis similique, animi provident!
                    </p>

                    <div class="mt-12">
                       <h4 class="text-white font-semibold"></h4>
                           <div class="flex mt-4">
                               <div>Tyler Perry</div>
                               <div class="text-sm text-gray-400">Tyler Perry</div>
                           </div>
                           <div class="ml-8">
                              <div>Tyler Perry</div>
                              <div class="text-sm text-gray-400">Movie</div>
                           </div>
                    </div>

                        <div class="mt-12">
           <button class="flex items-center bg-green-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-green-600 transition ease-in-out duration-150 ">  <i class="fas fa-play fill-current"></i> <span class="ml-2">Play Trailer</span></button>

             </div>
        </div>


        </div>
</div>






@endsection