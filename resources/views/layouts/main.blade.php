<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Movie App</title>
 <link rel="stylesheet" href="/css/main.css">
 <script src="https://kit.fontawesome.com/dcc95333f3.js" crossorigin="anonymous"></script>
</head>
<body class="font-sans bg-gray-900 text-white">
<nav class="border-b border-gray-800">
   <div class="container mx-auto flex items-center justify-between px-4 py-6"></div>
       <ul class="flex items-center">
          <li>
             <a href="#" class=" flex">
                <i class="fas fa-video text-1xl"></i> <p class="pl-5 pb-2 text-1xl">MovieApp</p>
             </a>
          </li>

          <li class="ml-16">
           <a href="#" class="hover:text-gray-300">Movies</a>
          </li>
          <li class="ml-6">
           <a href="#" class="hover:text-gray-300">TV Shows</a>
          </li>
          <li class="ml-6">
           <a href="#" class="hover:text-gray-300">Actors</a>
          </li>
       </ul>

        <div class="flex items-center">
            <div class="relative">
              <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 focus:outline-none focus:shadow-outline" placeholder="search">

            </div>
          </div>

</nav>

@yield('content')

</body>
</html>