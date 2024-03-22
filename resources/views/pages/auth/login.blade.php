@extends('layouts.master')
@section('content')

<main>

<div class="w-full max-w-lg my-10 p-6 m-auto mx-auto bg-white rounded-lg shadow-md ">
    <div class="flex justify-center mx-auto">
    <div class="flex items-center gap-2">
 <img class="lg:h-8 md:h-7 h-6  " src="img/logo.png" alt="">
    <a href="{{url('/')}}" class="font-bold lg:text-2xl md:texl-2xl uppercase text-xl">I-Store</a>
 </div>
    </div>

    <form class="mt-6">
        <div>
            <label for="username" class="block text-sm text-gray-800 ">Username</label>
            <input type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg    focus:border-amber-400  focus:ring-amber-300 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <div class="mt-4">
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm text-gray-800 ">Password</label>
                <a href="#" class="text-xs text-gray-600  hover:underline">Forget Password?</a>
            </div>

            <input type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg    focus:border-amber-400  focus:ring-amber-300 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <div class="mt-6">
            <button class="w-full px-6 py-2.5 text-lg font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-900 rounded-lg hover:bg-gray-500 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                Sign In
            </button>
        </div>
    </form>

    <div class="flex items-center justify-between mt-4">
        <span class="w-1/5 border-b  lg:w-1/5"></span>

        <a href="#" class="text-base text-center text-gray-500 uppercase  ">
            or login with Social Media
        </a>

        <span class="w-1/5 border-b  lg:w-1/5"></span>
    </div>

    <div class="flex items-center mt-6 -mx-2">
        <button type="button" class="flex items-center justify-center w-full px-6 py-2 mx-2 text-lg font-medium text-white transition-colors duration-300 transform bg-amber-500 rounded-lg hover:bg-gray-800 focus:bg-amber-400 focus:outline-none">
        <i class="fa-brands fa-google"></i>
            <span class="hidden mx-2 sm:inline">Sign In With Google</span>
        </button>

    </div>

    <p class="mt-8 text-lg font-light text-center text-gray-400"> Don't have an account? <a href="{{url('/signup')}}" class="font-medium text-gray-700  hover:underline">Sign Up</a></p>
</div>


</main>


@endsection