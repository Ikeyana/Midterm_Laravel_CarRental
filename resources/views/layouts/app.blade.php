<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Car Rental System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">



    <style>
        body {
            
    
    background: url(Images/ncar.jpg);
     }
    </style>

</head>

<body class="antialiased" >
    <header class="text-white body-font" >
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center ">
            <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="square" stroke-linejoin="square" stroke-width="2" class="w-10 h-10 text-white p-2 bg-black-500 rounded-xl" viewBox="0 0 24 24">
                    
                </svg>
                <span class="text-white text-2xl"  font-size: 40px; >CAR RENTAL</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-yellow-500" href="/home">Dashboard</a>
                <a class="mr-5 hover:text-yellow-500" href="/transactions"> Transaction</a>
                <a class="mr-5 hover:text-yellow-500" href="/settings">Settings</a>
            </nav>
          
        </div>
    </header>
    <main class="max-w-6xl mx-auto">
    {{$slot}}
    </main>
    
</body>

</html>