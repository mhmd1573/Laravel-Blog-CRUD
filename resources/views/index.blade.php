@extends('layouts.app')

@section('content')
    


<div class="hero-bg-image flex flex-col items-center justify-center">
<h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome to my Blog</h1>
<a href="" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
</div>



<div class="container  m-20  sm:grid  grid-cols-2 gap-15 mx-auto py-15">    

   
    <div class="mx-2 md:mx-0 ">
    <img class="sm: rounded-lg" src="https://picsum.photos/id/239/960/620" alt="">
    </div>

    <div class="= flex flex-col items-left justify-center m-10 sm:m-0   p-20 " >

    <h2 class="font-bold text-gray-700 text-4xl uppercase">
    How to be an expert in 2023
    </h2>

    <p class="font-bold text-gray-600 text-xl pt-2">
    You can find a list of all programming languages here.
    </p>

    <p class="py-4 text-gray-500 text-sm leading-5">
    Get the same random image every time based on a seed, by adding to the start of the url.
    </p>

    <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-center text-l place-self-start">Read More</a>
    

    </div>

    </div>





    <!- Recent Posts →→
    <div class="container mx-auto text-center py-15">
    <h2 class="font-bold text-5xl py-10 text-center">Recent Posts</h2>
    <p class="text-gray-400 leading-6 px-10">
        PHP is a general-purpose scripting language
        geared toward web development. It was originally
        created by Danish-Canadian programmer
        Rasmus Lerdorf in 1993 and released in 1995. The
        PHP reference implementation is now produced
        by The PHP Group. PHP is a server scripting
        language, and a powerful tool for making
        dynamic and interactive Web pages. PHP is a
        widely-used, free, and efficient alternative to  
      </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto pt-10">
    <div class="flex bg-yellow-700 text-gray-100 p-10 ">
        <div class="block m-auto pt-4 pb-15 w-4/5">

            <ul class="md:flex text-xs gap-2">
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="">PHP</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="">Programming</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="">Languages</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="">Backend</a></li>
            </ul>


            <h3 class="text-l py-10 leading-6">
                PHP is a general-purpose scripting language
                geared toward web development. It was originally
                created by Danish-Canadian programmer
                Rasmus Lerdorf in 1993 and released in 1995. The
                PHP reference implementation is now produced
                by The PHP Group. PHP is a server scripting
                language, and a powerful tool for making
                dynamic and interactive Web pages. PHP is a
                widely-used, free, and efficient alternative to  
        
            </h3>
            <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>
            </div>
    </div>

    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
    </div>


    </div>






        








    @endsection