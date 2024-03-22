@extends('layouts.master')
@section('content')

<main>
    <div class="mt-6">
        <form class="flex lg:flex-row md:flex-row flex-col justify-between gap-4">
            <div class="flex lg:w-[30%] md:w-[50%] w-[80%] justify-center items-center container mx-auto">
                <select class='w-full px-4 py-3 border-4 border-amber-500 focus:outline-amber-500 rounded-md rounded-r-none' name='category'>
                    <option value="All">
                    All
                    </option>
                    <option value="Snacks">
                    Snacks
                    </option>
                    <option value="Drinks">
                    Drinks
                    </option>
                    <option value="Packaged">
                    Packaged
                    </option>
                    <option value="Frozen">
                    Frozen
                    </option>
                    <option value="Cookingz">
                    Cooking
                    </option>
                 

                </select>
                <h1 class="w-full bg-amber-500 py-[12px] rounded-l-none px-5 text-center rounded-md text-white text-xl font-bold">Category</h1>
            </div>

            <div class="flex lg:w-[30%] md:w-[50%] w-[80%] container mx-auto ">
                <input class='w-full px-4 py-3 text-gray-800 border-4 rounded-r-none border-amber-500 focus:outline-amber-500 rounded-md' name='name' id='name' type='text'  placeholder='Search Product Here.........' />

                <button type="submit" class="px-6 py-2  rounded-l-none bg-amber-500 rounded-md text-white text-xl font-bold">Search</button>
            </div>
        </form>
    </div>

 <section class="bg-white mb-10">

<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Executive & Trending Products </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Yummay Snacks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/snacks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Healthy Drinks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/drinks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>


<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Essential Cooking</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/cooking.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Imported Frozen</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/frozen.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Freash Packaged</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/packaged.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>



</div>
</section>



<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Snacks Items </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Yummay Snacks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/snacks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Yummay Snacks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/snacks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Yummay Snacks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/snacks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Yummay Snacks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/snacks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

</div>
</section>



<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Drinks Items </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Healthy Drinks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/drinks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Healthy Drinks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/drinks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Healthy Drinks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/drinks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>


<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Healthy Drinks</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/drinks.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>



</div>
</section>


<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Cooking Items </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  
<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Essential Cooking</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/cooking.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Essential Cooking</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/cooking.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>


<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Essential Cooking</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/cooking.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>


<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Essential Cooking</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/cooking.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

</div>
</section>


<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Frozen Items </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Imported Frozen</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/frozen.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Imported Frozen</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/frozen.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>


<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Imported Frozen</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/frozen.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>


<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Imported Frozen</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/frozen.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

</div>
</section>


<section class="bg-white mb-10">
<div class="container px-6 py-10 mx-auto">
<h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-5xl ">Our Packaged Items </h1>

<div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-4">
  


<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Freash Packaged</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/packaged.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>



<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Freash Packaged</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/packaged.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>



<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Freash Packaged</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/packaged.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>



<div class="max-w-lg overflow-hidden bg-amber-50 rounded-lg shadow-lg ">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase ">Freash Packaged</h1>
        <p class="mt-1 text-sm text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="img/packaged.jpg" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-amber-50">
        <h1 class="text-lg font-bold text-amber-500">$129</h1>
        <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add to cart</button>
    </div>
</div>

</div>
</section>







</main>


@endsection