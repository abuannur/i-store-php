@extends('layouts.master')
@section('content')

<main>

<section class="bg-white ">
    <div class="container flex items-center justify-center my-10 px-6 mx-auto">
        <form class="w-full max-w-lg">
            <div class="flex justify-center mx-auto">
            <div class="flex items-center gap-2">
 <img class="lg:h-8 md:h-7 h-6  " src="img/logo.png" alt="">
    <a href="{{url('/')}}" class="font-bold lg:text-2xl md:texl-2xl uppercase text-xl">I-Store</a>
 </div>
            </div>
            

            <div class="relative flex items-center mt-8">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </span>

                <input type="text" class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11  focus:border-amber-400 focus:ring-amber-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Username">
            </div>

            <label for="dropzone-file" class="flex items-center px-3 py-3 mx-auto mt-6 text-center bg-white border-2 border-dashed rounded-lg cursor-pointer ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                </svg>

                <h2 class="mx-3 text-gray-400">Profile Photo</h2>

                <input id="dropzone-file" type="file" class="hidden" />
            </label>

            <div class="relative flex items-center mt-6">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </span>

                <input type="email" class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11  focus:border-amber-400 focus:ring-amber-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Email address">
            </div>

            <div class="relative flex items-center mt-4">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </span>

                <input type="password" class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg  focus:border-amber-400 focus:ring-amber-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Password">
            </div>

            <div class="relative flex items-center mt-4">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </span>

                <input type="password" class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg  focus:border-amber-400 focus:ring-amber-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Confirm Password">
            </div>

            <div class="mt-6">
                <button class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-amber-500 rounded-lg hover:bg-amber-400 focus:outline-none focus:ring focus:ring-amber-300 focus:ring-opacity-50">
                    Sign Up
                </button>

                <p class="mt-8 text-lg font-light text-center text-gray-400"> Already have an account? <a href="{{url('/login')}}" class="font-medium text-gray-700  hover:underline">Log In</a></p>
            </div>
        </form>
    </div>
</section>









</main>


@endsection